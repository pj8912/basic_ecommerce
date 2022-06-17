<?php


if (isset($_POST['cbtn'])) {

    $cate = $_POST['cat_name'];

    $cat_file_name = $_FILES['cat_img']['name'];

    $ext = $_FILES['cat_img']['type'];
    if ($ext == 'image/jpeg')
        $ext = '.jpg';
    elseif ($ext == 'image/png')
        $ext = '.png';

    $filename = date("d_m_Y_H_i_s") . "-" . time() . $ext;
    $cat_tmp_name =  $_FILES['cat_img']['tmp_name'];

    move_uploaded_file($cat_tmp_name, "images/" . $filename);

    require '../../database/Database.php';

    require '../../models/Category.php';

    // $db = new Database();
    // $db = $db->connect();
    // $category = new Category($db);
    // $category->c_name = $cate;
    // $category->c_img = $filename;

    // $category->createCategory();
    // header('location: index.php');
    // exit();
    $conn = mysqli_connect('localhost', 'root', '', 'basic_ecom');
    $sql = "INSERT into categories(category_name, category_Img) VALUES('$cate', '$filename')";
    $result = mysqli_query($conn, $sql);
    header('location: index.php');
    exit();
}
