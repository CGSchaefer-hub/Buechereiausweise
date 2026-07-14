<?php

if (!defined('ABSPATH')) {
    exit;
}

class UEI_Plugin
{

    private static $instance = null;

    public static function instance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct()
    {

        require_once UEI_PLUGIN_DIR . 'includes/class-admin.php';
        require_once UEI_PLUGIN_DIR . 'includes/class-importer.php';
        require_once UEI_PLUGIN_DIR . 'includes/class-user.php';
        require_once UEI_PLUGIN_DIR . 'includes/class-excel.php';

        new UEI_Admin();
        new UEI_Importer();
    }
}
