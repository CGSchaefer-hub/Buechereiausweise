<?php

if (!defined('ABSPATH')) {
    exit;
}

class UEI_User
{

    public static function create($data)
    {

        $password = wp_generate_password(12);

        $user = [
            'user_login' => $data['Benutzername'],
            'user_pass' => $password,
            'user_email' => $data['E-Mail'],
            'first_name' => $data['Vorname'],
            'last_name' => $data['Nachname'],
            'role' => 'subscriber'
        ];

        $id = wp_insert_user($user);

        if (is_wp_error($id)) {
            return $id;
        }

        foreach ($data as $key => $value) {

            update_user_meta($id, sanitize_key($key), $value);

        }

        return $id;

    }

}
