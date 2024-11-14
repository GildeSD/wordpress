<?php
/*
Plugin Name: Mijn Eerste Plugin
Plugin URI: http://example.com
Description: Een simpele WordPress-plugin.
Version: 1.0
Author: Jouw Naam
Author URI: http://example.com
*/

add_action('admin_notices', function() {
    echo '<div class="notice notice-success is-dismissible">
            <p>Mijn Eerste Plugin is actief!</p>
          </div>';
});
