# Changelog

All notable changes to this project are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.1.0] - 2026-09-29

### Changed
- Adopted the Prolific plugin standard. The plugin slug is now `tec-venue-block-editor`. Updates come from the Prolific Digital license server (`api.prolificdigital.io`). Set `PROLIFIC_LICENSE_KEY_TEC_VENUE_BLOCK_EDITOR` in `wp-config.php` (or use the `prolific_license_key` filter) to receive updates.
- The main file is renamed from `index.php` to `tec-venue-block-editor.php`. Reactivate the plugin once after updating.
- Text domain changed from `enable-block-editor-venues` to `tec-venue-block-editor`.
- Declares `Requires Plugins: the-events-calendar`.
- License is GPL-2.0-or-later (the bundled LICENSE file was GPL-3.0 text).
- Requires WordPress 6.5+ and PHP 8.4+.

### Added
- `TEC_VENUE_BLOCK_EDITOR_VERSION` constant and translation loading from `languages/`.
- `CHANGELOG.md`, `readme.txt`, coding-standards config and CI/release workflows.

## [1.0.0] - 2024-10-12

### Added
- Initial release: forces the block editor for The Events Calendar's `tribe_venue` post type.

[Unreleased]: https://github.com/prolific-digital/the-events-calendar-venue-block-editor/compare/v1.1.0...HEAD
[1.1.0]: https://github.com/prolific-digital/the-events-calendar-venue-block-editor/compare/13d8116...v1.1.0
[1.0.0]: https://github.com/prolific-digital/the-events-calendar-venue-block-editor/commit/13d8116
