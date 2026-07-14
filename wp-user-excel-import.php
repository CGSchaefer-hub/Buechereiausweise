<?php
/*
Plugin Name: Benutzerimport aus Excel
Plugin URI: https://example.de
Description: Importiert Benutzer aus einer Excel-Datei.
Version: 1.0
Author: Christian Schäfer
License: GPL2
*/

if (!defined('ABSPATH')) {
    exit;
}

define('UEI_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('UEI_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once UEI_PLUGIN_DIR . 'includes/class-plugin.php';

UEI_Plugin::instance();
