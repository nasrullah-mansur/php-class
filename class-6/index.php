<?php

    include 'setting/db.php';
    $id = 111;

    $users = ($db->query("SELECT * FROM users"))->fetch_all();

    $query = $db->prepare("SELECT * FROM users WHERE phone=? ORDER BY id DESC");
    $query->bind_param("i", $id);
    $final = $query->execute();
    $final = $query->get_result();
    $final = $final->fetch_all(MYSQLI_ASSOC);


    $output = $final;


    echo '<pre>';
    print_r($output);
    echo '</pre>';


    // $user_all = User::all();
    // $user = DB::('users')->where('id', 23)->get();

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
                                <a class="btn btn-info" href="edit.php?id='. $user[0] .'">Edit</a>
                                <a class="btn btn-danger delete-btn" data-location="setting/delete.php?id='.$user['0'].'" href="#">Delete</a>
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
            if(isset($_SESSION['insert_done'])) {
                echo "<script>toastr.success('User have been created successfully', 'Well Done')</script>";
            }

            else if(isset($_SESSION['delete_done'])) {
                echo "<script>toastr.success('User have been removed successfully', 'Well Done')</script>";
            }

            else if(isset($_SESSION['update_done'])) {
                echo "<script>toastr.success('User have been updated successfully', 'Well Done')</script>";
            }



            session_unset();
            session_destroy();
        ?>
        


        <script>


            let deleteBtn = $('.delete-btn');

            deleteBtn.on('click', function(e) {
                e.preventDefault();
                let dataLocation = $(this).attr('data-location');
                let confirmDelete = confirm('Are you sure to delete this item?');
                if(confirmDelete) {
                    window.location.replace(dataLocation);
                }
            });

        </script>
    </body>
</html>
