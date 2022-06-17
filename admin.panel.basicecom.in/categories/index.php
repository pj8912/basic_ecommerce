<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>
    <?php
    include '../includes/navbar.php';
    main_navbar(true);
    ?>
    <div class="main-container">
        <?php
        require '../includes/side-nav.php';
        side_nav();
        ?>
        <div class="view-box card ">
            <div class="card card-body rounded-0">
                <p class="m-1">
                    <span class="h5 m-2">Category</span>
                    <button class="btn btn-primary rounded-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg>
                        Create Category
                    </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Create Category</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="create_category.php" enctype="multipart/form-data" class="mt-3 p-2 m-auto" method="post">
                                    <div class="mb-2">

                                        <input type="text" name="cat_name" class="form-control" placeholder="Category Name">
                                    </div>
                                    <div class="mb-2">

                                        <input type="file" name="cat_img" class="form-control">
                                    </div>
                                    <div class="d-grid gap-2">

                                        <button type="submit" name="cbtn" class="btn btn-primary rounded-5">Upload</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                </p>
                <hr>
                <!-- view Categories -->
                <?php

                // require 'http://localhost/basic_ecommerce/admin.panel.basicecom.in/database/Database.php';
                // require '../database/Database.php';
                // require '../../models/Category.php';


                // $db = new Database();
                // $db = $db->connect();
                // $category = new Category($db);
                // $result = $category->getAllCategories();
                // $num = $result->rowCount();

                $conn = mysqli_connect('localhost', 'root', '', 'basic_ecom');
                $sql = "SELECT * FROM categories";
                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);
                if ($num > 0) {
                    // echo "Categories created";
                    echo '
                    
                    <table>
                    <thead>
                        <tr>
                            <th>Category Image</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    
                    ';
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <tr class="p-1">
                       
                        <td> <img src="images/' . $row['category_Img'] . '" alt="image" class="card-img p-1"></td>
                        <td>'.$row['category_name'].'</td>
                        <td>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#editModal">edit</a> 

                        
                        ';
                        $id = $row['cid'];
                        $sql = "SELECT * FROM categories WHERE cid = '$id'";
                        $res = mysqli_query($conn, $sql);
                        while($r = mysqli_fetch_assoc($res)){
                            echo '
                            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="update_category.php" enctype="multipart/form-data" class="mt-3 p-2 m-auto" method="post">  
                 <div class="mb-2">

                <input type="text" name="cat_name" class="form-control" value="'.$r['category_name'].'">
                 </div>
                <div class="mb-2">

                    <input type="file" name="cat_img" class="form-control">
                </div>
                <div class="d-grid gap-2">

                    <button type="submit" name="ubtn" class="btn btn-primary rounded-5">Upload</button>
                </div>

            </form>
            </div>
            </div>
        </div>
        </div>

        ';
      }
     
    echo  ' 
      
    
 

                        
                            |
                        <a href="delete_category.php?cid='.$row['cid'].'">delete</a>
                        </td>
                      </tr>
                        
                        ';
                    }
                    echo '
                    </tbody>
                    </table>
                    
                    ';
                } else {
                    echo "<b>No Categories created!</b>";
                }

                ?>

            </div>

            <!-- <div class="card card-body mt-2 m-auto rounded-0" style="height:auto;width:100%" >
                <form action="create_category.php" method="post">
                    <input type="text" name="cat-name" class="form-control" placeholder="Category Name">
                    
                    <button type="submit" class="btn btn-primary rounded-5">Upload</button>
                </form>
            </div> -->



        </div>
<a href="#"></a>

    </div>