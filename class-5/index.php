<?php

    include 'setting/db.php';

    $users = ($db->query("SELECT * FROM users"))->fetch_all();

    // echo '<pre>';
    // print_r( $users );
    // echo '</pre>';

    // echo $_SESSION['insert_done'];


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
        <link rel="stylesheet" href="assets/css/toastr.min.css">

        <title>Hello, world!</title>
    </head>
    <body>
        <h1 class="py-5 text-center">User Data</h1>

        <div class="container">

            <div class="btn-area mb-3">
                <a href="create.php" class="btn btn-success">Add new user</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $key => $user) {

                        echo
                        '<tr>
                            <td> ' . ($key + 1) . ' </td>
                            <td>' . ucwords($user['1']) . '</td>
                            <td>' . $user['2'] . '</td>
                            <td>' . $user['3'] . '</td>
                            <td>
                                <a class="btn btn-info" href="#">Edit</a>
                                <a class="btn btn-danger" href="#">Delete</a>
                            </td>
                        </tr>';
                    } ?>

                    
                    

                </tbody>
            </table>
        </div>

        <script src="https://code.jquery.com/jquery-2.2.4.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src="assets/js/toastr.min.js"></script>

        <?php
            if($_SESSION['insert_done']) {
                echo "<script>toastr.success('User have been created successfully', 'Well Done')</script>";
            }


            session_unset();
            session_destroy();
        ?>
        
    </body>
</html>
