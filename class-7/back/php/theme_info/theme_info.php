<?php

    include '../../../config.php';

    // ******************* Insert Or update Data *****************
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $path = '../../../public/images/';
        
        // if($_FILES['logo']) {
        //     $logo_exist = DB::table('theme_infos')->first()['logo'];
        //     if($logo_exist) {
        //        unlink($path . $logo_exist);
        //     } 
        //     $rand_num = rand(0, 999999);
        //     $extension = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
        //     move_uploaded_file($_FILES['logo']['tmp_name'], $path . $rand_num . '_' . $_FILES['logo']['name']);
        //     $logo_name = $rand_num . '_' . $_FILES['logo']['name'];
        // }
        
        // if($_FILES['favicon']) {
        //     $fav_exist = DB::table('theme_infos')->first()['favicon'];
        //     if($fav_exist) {
        //         unlink($path . $fav_exist);
        //     } 
        //     $rand_num = rand(0, 999999);
        //     $extension = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
        //     move_uploaded_file($_FILES['favicon']['tmp_name'], $path . $rand_num . '_' . $_FILES['favicon']['name']);
        //     $fav_name = $rand_num . '_' . $_FILES['favicon']['name'];
        // }

            if(DB::table('theme_infos')->first()) {
                DB::table('theme_infos')->update(1, array(
                     'name' => $_POST['name'],
                     'email' => $_POST['email'],
                     'phone' => $_POST['phone'],
                     'address' => $_POST['address'],
                     'hours' => $_POST['hours'],
                     'map' => $_POST['map'],
                     'copyright' => $_POST['copyright'],
                     'logo' => file_upload($path, 'logo', 'theme_infos', 'logo'),
                     'favicon' => file_upload($path, 'favicon', 'theme_infos', 'favicon'),
                ));
            } else {
                DB::table('theme_infos')->insert(array(
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'address' => $_POST['address'],
                    'hours' => $_POST['hours'],
                    'map' => $_POST['map'],
                    'copyright' => $_POST['copyright'],
                    'logo' => file_upload($path, 'logo', 'theme_infos', 'logo'),
                    'favicon' => file_upload($path, 'favicon', 'theme_infos', 'favicon'),
               ));
            }


    //    echo '<pre>';
    //    print_r( $output);
    //    echo '</pre>';

    // echo $output;



        //     DB::table('theme_infos')->insert(array(
        //         'name' => $_POST['name'],
        //         'email' => $_POST['email'],
        //         'phone' => $_POST['phone'],
        //         'address' => $_POST['address'],
        //         'hours' => $_POST['hours'],
        //         'map' => $_POST['map'],
        //         'copyright' => $_POST['copyright'],
        //         'logo' => $logo_name,
        //         'favicon' => $fav_name,
        //     ));


        //     header('Location: ../../index.php');
        // }
    }

// ******************* Update Data *****************
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if($_POST['type'] == 'update') {
            echo 'this is code for insert';
        }
    }



    // public('/images');

    // '../../public/images/'




