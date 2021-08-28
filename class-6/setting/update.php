<?php

include 'db.php';

echo '<pre>';
print_r($_POST);
echo '</pre>';

$f_name = $_POST['name'];
$f_email = $_POST['email'];
$f_phone = $_POST['phone'];
$f_id = $_POST['id'];


$update_statement = $db->prepare("UPDATE users SET name=?, email=?, phone=? WHERE id=?");
$update_statement->bind_param("sssi", $f_name, $f_email, $f_phone, $f_id);
$update_done = $update_statement->execute();


if($update_done) {
    $_SESSION['update_done'] = 'User create successful';
} else {
    echo 'no';
}

header('Location: ../index.php');



