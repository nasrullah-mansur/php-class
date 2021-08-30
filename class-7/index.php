<?php

// header('Location: front/home.php');

include 'config.php';


// $output = new DB();


// echo '<pre>';
// print_r( $output->table('table_name') );
// echo '</pre>';

// $output = DB::table('contacts')->where('phone', '=', 1234);


$form_val = [
    'name' => 'name from form',
    'email' => 'test@email.com',
    'phone' => '4567',
    'massage' => 'massage from form',
];

// $form_val = $_POST;

$output = DB::table('contacts')->insert(array(
    'name' => $form_val['name'],
    'email' => $form_val['email'],
    'phone' => $form_val['phone'],
    'massage' => $form_val['massage'],
));


// DB::table('users')->update(1, array(
//     'name' => $form_val['name'],
//     'email' => $form_val['email'],
//     'phone' => $form_val['phone'],
//     'massage' => $form_val['massage'],
// ));







echo '<pre>';
print_r( $output );
echo '</pre>';











