<?php

if (!defined('ABSPATH')) {
    exit;
}

class UEI_User
{

public static function create($data)
{

    if(empty($data['Benutzername']))
        return;

    if(username_exists($data['Benutzername']))
        return;

    $password=wp_generate_password();

    $email='';

    if(!empty($data['E-Mail']))
        $email=$data['E-Mail'];

    $id=wp_insert_user([

        'user_login'=>$data['Benutzername'],
        'user_pass'=>$password,
        'user_email'=>$email,
        'first_name'=>$data['Vorname'] ?? '',
        'last_name'=>$data['Nachname'] ?? '',
        'role'=>'subscriber'

    ]);

    if(is_wp_error($id))
        return;

    foreach($data as $key=>$value)
    {

        update_user_meta(
            $id,
            sanitize_key($key),
            $value
        );

    }

}
