<?php
/**
 * Plugin Name: WIMP Badges
 * Plugin URI:  /
 * Description: WIMP BADGES! Badgers?
 * Version:     0.1.0
 * Author:      Cole Geissinger
 * Author URI:  http://www.colegeissinger.com
 * License:     GPLv2+
 * Text Domain: wbadge
 * Domain Path: /languages
 */

/**
 * Copyright (c) 2015 10up (email : info@10up.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

/**
 * Built using yo wp-make:plugin
 * Copyright (c) 2015 10up, LLC
 * https://github.com/10up/generator-wp-make
 */

// Useful global constants
define( 'WBADGE_VERSION', '0.1.0' );
define( 'WBADGE_URL',     plugin_dir_url( __FILE__ ) );
define( 'WBADGE_PATH',    dirname( __FILE__ ) . '/' );
define( 'WBADGE_INC',     WBADGE_PATH . 'includes/' );

// Include files
require_once WBADGE_INC . 'functions/core.php';


// Activation/Deactivation
register_activation_hook( __FILE__, '\TenUp\WIMP_Badges\Core\activate' );
register_deactivation_hook( __FILE__, '\TenUp\WIMP_Badges\Core\deactivate' );

// Bootstrap
TenUp\WIMP_Badges\Core\setup();