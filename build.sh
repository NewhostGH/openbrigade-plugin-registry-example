#!/usr/bin/env bash
# Rebuild dist/ zips from plugins/ and rewrite each entry's version, download_url
# filename and sha256 in registry.json. Linux/macOS twin of build.ps1.
# Requires: zip, jq.
set -euo pipefail
cd "$(dirname "$0")"

command -v zip >/dev/null || { echo "zip is required" >&2; exit 1; }
command -v jq  >/dev/null || { echo "jq is required" >&2; exit 1; }

mkdir -p dist

for manifest in plugins/*/plugin.json; do
    dir=$(dirname "$manifest")
    slug=$(jq -r .slug "$manifest")
    version=$(jq -r .version "$manifest")
    zipfile="dist/$slug-$version.zip"

    jq -e --arg slug "$slug" '.plugins[] | select(.slug == $slug)' registry.json >/dev/null \
        || { echo "No registry.json entry for slug '$slug' — add one first." >&2; exit 1; }

    rm -f dist/"$slug"-*.zip
    (cd plugins && zip -q -r -X "../$zipfile" "$(basename "$dir")")  # keeps <slug>/ top-level dir

    sha=$( (sha256sum "$zipfile" 2>/dev/null || shasum -a 256 "$zipfile") | cut -d' ' -f1)
    jq --arg slug "$slug" --arg version "$version" --arg sha "$sha" '
        (.plugins[] | select(.slug == $slug)) |= (
            .version = $version
            | .download_url = (.download_url | sub("[^/]+\\.zip$"; "\($slug)-\($version).zip"))
            | .sha256 = $sha
        )' registry.json > registry.json.tmp && mv registry.json.tmp registry.json

    echo "$zipfile  $sha"
done

echo "registry.json updated."
