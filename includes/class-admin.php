<?php

if (!defined('ABSPATH')) {
    exit;
}

class UEI_Admin
{

    public function __construct()
    {
        add_action('admin_menu', [$this, 'menu']);
    }

    public function menu()
    {
        add_management_page(
            'Benutzerimport',
            'Benutzerimport',
            'manage_options',
            'uei-import',
            [$this, 'page']
        );
    }

    public function page()
    {
        ?>

        <div class="wrap">

            <h1>Benutzer aus Excel importieren</h1>

            <form method="post" enctype="multipart/form-data">

                <?php wp_nonce_field('uei_import'); ?>

                <input
                    type="file"
                    name="excel"
                    accept=".xlsx,.xls"
                    required>

                <?php submit_button("Import starten"); ?>

            </form>

        </div>

        <?php
    }

}
