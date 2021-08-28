<?php
include 'db.php';

echo '<pre>';
print_r($_GET);
echo '</pre>';

$id = $_GET['id'];

$delete_done = $db->query("DELETE FROM users WHERE id = {$id}");

if($delete_done) {
    $_SESSION['delete_done'] = 'Item removed successfully';
} else {
    echo 'no';
}

header('Location: ../index.php');

