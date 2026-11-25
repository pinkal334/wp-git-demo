<?php
/**
 * Plugin Name: WP Git Demo
 * Description: Practical test plugin deployed via cPanel Git Version Control.
 * Version: 1.0
 */
add_action('wp_footer', function () {
    echo '<p style="text-align:center;font-size:12px;">Updated via WP Pusher + GitHub</p>';
});
