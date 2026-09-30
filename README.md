# Enable Block Editor for Venues

## Description

This plugin enables the Gutenberg block editor for The Events Calendar plugin's Venues post type. By default, The Events Calendar uses the classic editor for Venues, but with this plugin, you can enjoy the full functionality of the block editor when creating and editing Venues.

## Features

- Forces the block editor (Gutenberg) for the `tribe_venue` post type used by The Events Calendar plugin.

## Installation

1. **Download the Plugin**: Download `tec-venue-block-editor.zip` from the latest [GitHub release](https://github.com/prolific-digital/the-events-calendar-venue-block-editor/releases).
2. **Upload to WordPress**: In your WordPress admin dashboard, navigate to **Plugins > Add New** and click **Upload Plugin**. Select the `.zip` file and click **Install Now**.
3. **Activate**: Once installed, click **Activate Plugin**.

## Usage

After activating the plugin, navigate to **Events > Venues** in your WordPress admin panel. You will now be able to use the Gutenberg block editor when editing or creating new Venues.

## Requirements

- WordPress 6.5 or higher and PHP 8.4 or higher.
- The Events Calendar (declared with `Requires Plugins: the-events-calendar`).

The plugin stores no data.

## Updates

Updates are served by the Prolific Digital license server. Add the site's license key to `wp-config.php`:

```php
define( 'PROLIFIC_LICENSE_KEY_TEC_VENUE_BLOCK_EDITOR', 'your-key' );
```

You can also supply the key with the `prolific_license_key` filter, which receives `( $key, 'tec-venue-block-editor' )`.

## Development

The dev site is the DDEV sandbox at `https://wp-sandbox.ddev.site`. Run commands in the container:

```sh
ddev exec -d /var/www/html/wp-content/plugins/the-events-calendar-venue-block-editor composer install
ddev exec -d /var/www/html/wp-content/plugins/the-events-calendar-venue-block-editor composer lint    # php -l on every file
ddev exec -d /var/www/html/wp-content/plugins/the-events-calendar-venue-block-editor composer phpcs   # WordPress-Extra + PHPCompatibilityWP
```

`vendor/` is not committed. A git checkout needs `composer install` before the updater loads. The plugin itself still runs without it.

## Releasing

1. Bump the version in the plugin header, `TEC_VENUE_BLOCK_EDITOR_VERSION` and `readme.txt` `Stable tag`.
2. Add a `## [x.y.z] - YYYY-MM-DD` section to `CHANGELOG.md` and a `= x.y.z =` entry to `readme.txt`.
3. Merge to `main`, then push a `vx.y.z` tag. The release workflow builds `tec-venue-block-editor.zip` (with `composer install --no-dev`, honoring `.distignore`) and attaches it to a GitHub Release.

CI and release logic live in the shared workflows in [`prolific-digital/.github`](https://github.com/prolific-digital/.github).
## License

This plugin is licensed under GPL-2.0-or-later. You can find the full license text at [GNU GPL v2.0](https://www.gnu.org/licenses/gpl-2.0.html).

## Contributing

Feel free to fork this repository and submit pull requests. Contributions to improve the plugin and ensure compatibility are always welcome!
