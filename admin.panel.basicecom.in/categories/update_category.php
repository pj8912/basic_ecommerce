<?php
if (isset($_POST['ubtn'])) {

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

    $conn = mysqli_connect('localhost', 'root', '', 'basic_ecom');
    $sql = "UPDATE categories SET category_name = '$cate', category_Img = '$filename '";
    header('Location: index.php');
    exit();
}
