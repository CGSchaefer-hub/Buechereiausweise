<?php

if (!defined('ABSPATH')) {
    exit;
}

class UEI_Importer
{

    public function __construct()
    {
        add_action('admin_init', [$this, 'handle_import']);
    }

    public function handle_import()
    {

        if (!isset($_POST['_wpnonce'])) {
            return;
        }

        if (!wp_verify_nonce($_POST['_wpnonce'], 'uei_import')) {
            return;
        }

        if (empty($_FILES['excel']['tmp_name'])) {
            return;
        }

        // Hier erfolgt später das Einlesen der Excel-Datei.

    }

}
