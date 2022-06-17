<?php

if (isset($_REQUEST['cid'])) {
    $cid = $_REQUEST['cid'];
    $conn = mysqli_connect('localhost', 'root', '', 'basic_ecom');

    $sql = "DELETE FROM  categories WHERE cid = '$cid'";
    mysqli_query($conn, $sql);
    header('Location: index.php');
    exit();
}
