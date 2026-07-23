# OpenBrigade Plugin Registry (template)

A template plugin registry for [OpenBrigade](https://github.com/NewhostGH/OpenBrigade), in the
KASM multi-registry style: the app fetches `registry.json` over HTTPS, merges it with any other
enabled registries, and installs plugins from the `download_url` after verifying the mandatory
`sha256`.

Point an OpenBrigade instance at the raw URL of this file:

```
https://raw.githubusercontent.com/NewhostGH/openbrigade-plugin-registry-example/main/registry.json
```

## Layout

```
registry.json          the catalog served to OpenBrigade instances
plugins/<slug>/        plugin sources (plugin.json manifest + src/)
dist/<slug>-<ver>.zip  built packages referenced by registry.json
build.ps1              zips plugins/ into dist/ and rewrites sha256 in registry.json
```

## registry.json schema

```json
{
  "name": "Registry display name",
  "plugins": [
    {
      "slug": "hello-world",            // ^[a-z0-9][a-z0-9-]{1,49}$
      "name": "Hello World",
      "version": "1.0.0",
      "description": "…",
      "download_url": "https://…/hello-world-1.0.0.zip",
      "sha256": "…",                    // mandatory, verified before install
      "min_app_version": "5.0",
      "author": "…"                     // optional
    }
  ]
}
```

## Plugin package format

A zip whose root (or single top-level directory) contains a `plugin.json` manifest:

```json
{
  "slug": "hello-world",
  "name": "Hello World",
  "version": "1.0.0",
  "description": "…",
  "min_app_version": "5.0",
  "provider": "ObPlugins\\HelloWorld\\HelloWorldServiceProvider",
  "authors": ["…"],
  "autoload": { "ObPlugins\\HelloWorld\\": "src" }
}
```

`provider` is the FQCN of a Laravel service provider registered when the plugin is enabled;
`autoload` maps PSR-4 prefixes to directories inside the package (no `..`, no absolute paths).
An optional `database/migrations/` directory is migrated on enable (never rolled back on disable).

## Adding a plugin

1. Copy one of the `plugins/` examples, adjust `plugin.json` and the provider class.
2. Run `./build.ps1` — it rebuilds every `dist/` zip and rewrites each `sha256` in `registry.json`.
3. Commit and push; instances pick the change up within an hour (catalog cache TTL).

## Included example plugins

Both are deliberate no-ops — empty service providers proving the install/enable/disable pipeline.

| Slug | Purpose |
|---|---|
| `hello-world` | Minimal no-op plugin |
| `example-noop` | Second no-op, to exercise multi-plugin catalogs |
