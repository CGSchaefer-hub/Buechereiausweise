<?php
/*
Plugin Name: Benutzerimport aus Excel
Description: Importiert Benutzer aus Excel-Dateien.
Version: 1.0
*/

if (!defined('ABSPATH')) {
    exit;
}

define('UEI_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('UEI_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once UEI_PLUGIN_DIR . 'vendor/autoload.php';
require_once UEI_PLUGIN_DIR . 'includes/class-plugin.php';

UEI_Plugin::instance();
