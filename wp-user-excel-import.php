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

public function handle_import()
{

    if (!isset($_POST['_wpnonce']))
        return;

    if (!wp_verify_nonce($_POST['_wpnonce'], 'uei_import'))
        return;

    if (empty($_FILES['excel']['tmp_name']))
        return;

    $rows = UEI_Excel::load($_FILES['excel']['tmp_name']);

    if (count($rows) < 2)
        return;

    $header = array_shift($rows);

    foreach ($rows as $row)
    {

        $user=[];

        foreach($header as $index=>$field)
        {
            $user[$field]=$row[$index] ?? '';
        }

        UEI_User::create($user);

    }

}
