=== Enable Block Editor for Venues ===
Contributors: prolificdigital
Tags: the events calendar, venues, block editor, gutenberg
Requires at least: 6.5
Tested up to: 7.1
Requires PHP: 8.4
Requires Plugins: the-events-calendar
Stable tag: 1.1.0
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Enables the block editor for The Events Calendar's Venues post type.

== Description ==

The Events Calendar edits Venues (`tribe_venue`) with the classic editor. This plugin switches them to the block editor. There are no settings and the plugin stores no data.

Requires The Events Calendar.

== Installation ==

1. Upload the `tec-venue-block-editor` folder to `/wp-content/plugins/`, or install the release zip from **Plugins > Add New > Upload Plugin**.
2. Activate the plugin, then edit a venue under **Events > Venues**.
3. To receive automatic updates, add your license key to `wp-config.php`:
   `define( 'PROLIFIC_LICENSE_KEY_TEC_VENUE_BLOCK_EDITOR', 'your-key' );`

== Changelog ==

= 1.1.0 =
* Updates now come from the Prolific Digital license server. Define `PROLIFIC_LICENSE_KEY_TEC_VENUE_BLOCK_EDITOR` to receive them.
* Main file renamed to `tec-venue-block-editor.php`; reactivate the plugin once after updating.
* Text domain changed to `tec-venue-block-editor`; declares The Events Calendar as a required plugin.
* License is GPL-2.0-or-later. Requires WordPress 6.5+ and PHP 8.4+.

= 1.0.0 =
* Initial release.
