<?php

    include '../../../config.php';

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";


    // echo "<pre>";
    // print_r($_SERVER);
    // echo "</pre>";

    // // $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $_FILES['logo']['name'])));

    // // echo $slug;

// ******************* Insert Data *****************
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if($_POST['type'] == 'insert') {

            $path = '../../../public/images/';
            

            if($_FILES['logo']) {
                move_uploaded_file($_FILES['logo']['tmp_name'], $path . rand(0, 999999) . $_FILES['logo']['name']);
                $logo_name = $path . rand(0, 999999) . $_FILES['logo']['name'];
            }

            if($_FILES['favicon']) {
                move_uploaded_file($_FILES['favicon']['tmp_name'], $path . rand(0, 999999) . $_FILES['favicon']['name']);
                $fav_name = $path . rand(0, 999999) . $_FILES['favicon']['name'];
            }

            DB::table('theme_infos')->insert(array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'address' => $_POST['address'],
                'hours' => $_POST['hours'],
                'map' => $_POST['map'],
                'copyright' => $_POST['copyright'],
                'logo' => $logo_name,
                'favicon' => $fav_name,
            ));


            header('Location: ../../index.php');
        }
    }

// ******************* Update Data *****************
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if($_POST['type'] == 'update') {
            echo 'this is code for insert';
        }
    }






