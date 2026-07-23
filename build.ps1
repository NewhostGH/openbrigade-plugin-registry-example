# Rebuild dist/ zips from plugins/ and rewrite each entry's version, download_url
# filename and sha256 in registry.json from the plugin.json manifests.
#Requires -Version 7
$ErrorActionPreference = 'Stop'
Set-Location $PSScriptRoot

Add-Type -AssemblyName System.IO.Compression.FileSystem
New-Item -ItemType Directory -Force dist | Out-Null

$registry = Get-Content registry.json -Raw | ConvertFrom-Json

foreach ($dir in Get-ChildItem plugins -Directory) {
    $manifest = Get-Content (Join-Path $dir.FullName 'plugin.json') -Raw | ConvertFrom-Json
    $zip = "dist/$($manifest.slug)-$($manifest.version).zip"

    Get-ChildItem dist -Filter "$($manifest.slug)-*.zip" -ErrorAction SilentlyContinue | Remove-Item
    [System.IO.Compression.ZipFile]::CreateFromDirectory(
        $dir.FullName, (Join-Path $PSScriptRoot $zip),
        [System.IO.Compression.CompressionLevel]::Optimal, $true)  # $true → keep <slug>/ top-level dir

    $sha = (Get-FileHash $zip -Algorithm SHA256).Hash.ToLower()
    $entry = $registry.plugins | Where-Object slug -eq $manifest.slug
    if (-not $entry) { throw "No registry.json entry for slug '$($manifest.slug)' — add one first." }

    $entry.version = $manifest.version
    $entry.download_url = $entry.download_url -replace '[^/]+\.zip$', "$($manifest.slug)-$($manifest.version).zip"
    $entry.sha256 = $sha
    Write-Host "$zip  $sha"
}

$registry | ConvertTo-Json -Depth 5 | Set-Content registry.json -NoNewline
Write-Host 'registry.json updated.'
