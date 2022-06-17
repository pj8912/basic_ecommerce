<?php

if (isset($_POST['lbtn'])) {

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];


    include '../../database/db.php';

    $sql = "SELECT * FROM admins WHERE admin_email = '$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num < 1) {
        header('location: ../index.php?login-err');
        exit();
    } else {
        while ($row = mysqli_fetch_assoc($result)) {

            $hashedpwd = $row['admin_pwd'];
            $hashedPwdCheck  = password_verify($pwd, $hashedpwd);
            if ($hashedPwdCheck == false) {
                header("Location: ../index.php?login=error");
                exit();
            } else {
                $_SESSION['a_id'] = $row['admin_id'];

                header("location: ../dashboard.php");
                exit();
            }
        }
    }
}
