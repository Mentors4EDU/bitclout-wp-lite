<?php
/**
 * Plugin Name: BitClout WP Lite Plugin
 * Plugin URI: http://www.peer-social.com
 * Description: Minimalist creator coin tiers list for BitClout creators
 * Version: 1.0
 * Author: Andrew Kamal
 * Author URI: http://www.peer-social.com
 */

require_once dirname( __FILE__ ) . '/src/class.settings-api.php';

new bitclout_add_admin_menu();
