<?php

$db = new mysqli("localhost","root","","my_data");

// Check connection
if ($db -> connect_errno) {
    echo "Failed to connect to MySQL: " . $db -> connect_error;
    exit();
}

session_start();