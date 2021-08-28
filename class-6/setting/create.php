<?php

include 'db.php';

$f_name = $_POST['name'];
$f_email = $_POST['email'];
$f_phone = $_POST['phone'];


$insert_done = $db->query("INSERT INTO users (id, name, email, phone) VALUES (null, '$f_name', '$f_email', '$f_phone')");

if($insert_done) {
    $_SESSION['insert_done'] = 'User create successful';
} else {
    echo 'no';
}

header('Location: ../index.php');

