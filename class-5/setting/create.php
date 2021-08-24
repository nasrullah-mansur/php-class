<?php

include 'db.php';

$f_name = $_POST['name'];
$f_email = $_POST['email'];
$f_phone = $_POST['phone'];

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// echo $f_name;
// echo $f_email;
// echo $f_phone;


// $query = "INSERT INTO users (id, name, email, phone) VALUES (null, '$f_name', '$f_email', '$f_phone')";

// mysqli_query($db, $query);

$insert_done = $db->query("INSERT INTO users (id, name, email, phone) VALUES (null, '$f_name', '$f_email', '$f_phone')");

if($insert_done) {
    $_SESSION['insert_done'] = 'User create successful';
} else {
    echo 'no';
}

header('Location: ../index.php');

