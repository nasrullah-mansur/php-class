<?php

function file_upload($path, $file_data, $table_name, $col_name) {
    $image_exist_path = '../../public/images/';
    $file = $_FILES[$file_data];
    if($file) {
        $logo_exist = DB::table($table_name)->first();
        if($logo_exist) {
            if($logo_exist) {
               unlink($path . $logo_exist[$col_name]);
            } 
        }
        $rand_num = rand(0, 999999);
        // pathinfo($file['name'], PATHINFO_EXTENSION);
        move_uploaded_file($file['tmp_name'], $path . $rand_num . '_' . $file['name']);
        $db_name = $rand_num . '_' . $_FILES['logo']['name'];
        return $db_name;
    }
}



