<?php
/**
 * Plugin Name:       Enable Block Editor for Venues
 * Plugin URI:        https://prolificdigital.com
 * Description:       Enables the block editor for The Events Calendar's Venues post type.
 * Version:           1.1.0
 * Requires at least: 6.5
 * Requires PHP:      8.4
 * Requires Plugins:  the-events-calendar
 * Author:            Prolific Digital
 * Author URI:        https://prolificdigital.com
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       tec-venue-block-editor
 * Domain Path:       /languages
 * Update URI:        https://api.prolificdigital.io/api/update?plugin=tec-venue-block-editor
 *
 * @package TECVenueBlockEditor
 */

defined( 'ABSPATH' ) || exit;

define( 'TEC_VENUE_BLOCK_EDITOR_VERSION', '1.1.0' );
define( 'TEC_VENUE_BLOCK_EDITOR_PLUGIN_FILE', __FILE__ );
define( 'TEC_VENUE_BLOCK_EDITOR_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// Composer dependencies (plugin-update-checker). Present in release zips;
// in a git checkout run `composer install` first.
if ( is_readable( TEC_VENUE_BLOCK_EDITOR_PLUGIN_DIR . 'vendor/autoload.php' ) ) {
	require_once TEC_VENUE_BLOCK_EDITOR_PLUGIN_DIR . 'vendor/autoload.php';
}

require_once TEC_VENUE_BLOCK_EDITOR_PLUGIN_DIR . 'includes/update-checker.php';

/**
 * Load bundled translations from /languages (the header's Domain Path).
 */
add_action(
	'init',
	static function () {
		load_plugin_textdomain( 'tec-venue-block-editor', false, dirname( plugin_basename( TEC_VENUE_BLOCK_EDITOR_PLUGIN_FILE ) ) . '/languages' );
	}
);

/**
 * Enables the block editor for The Events Calendar plugin's Venues post type.
 *
 * This function forces the Gutenberg block editor to be enabled for the 'tribe_venue' post type,
 * allowing users to use the block editor for editing venue details.
 *
 * @param bool   $can_edit  Whether the post type can be edited or not.
 * @param string $post_type The post type being checked.
 *
 * @return bool True if the block editor should be enabled for 'tribe_venue', otherwise the original value of $can_edit.
 */
function myprefix_enable_block_editor_for_venues($can_edit, $post_type) {
  if ($post_type === 'tribe_venue') {
    return true; // Force enable the block editor
  }
  return $can_edit;
}
add_filter('use_block_editor_for_post_type', 'myprefix_enable_block_editor_for_venues', 100, 2);
