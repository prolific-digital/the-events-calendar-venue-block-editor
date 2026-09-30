<?php
/*
Plugin Name: Enable Block Editor for Venues
Description: Enables the Gutenberg block editor for The Events Calendar plugin's Venues post type.
Version: 1.0
Author: Prolific Digital
Author URI: https://prolificdigital.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: enable-block-editor-venues
*/

// Exit if accessed directly
if (! defined('ABSPATH')) {
  exit;
}

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
