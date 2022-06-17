<?php
if (isset($_POST['sbtn'])) {
    // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $name = htmlentities(strip_tags($_POST['flname']));
    $email = htmlentities(strip_tags($_POST['email']));
    $pwd = strip_tags($_POST['pwd']);


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?error=empty");
        exit();
    } else {
        require '../database/db.php';
        $sql = "SELECT * FROM users WHERE user_email = '$email' ";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            header("Location: ../index.php?err=email");
            exit();
        } else {
            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
            $sql = "INSERT into users(user_fullname, user_email, user_pwd) VALUES('$name', '$email', '$hashedPwd') ";
            mysqli_query($conn, $sql);
            header("Location: ../index.php?signup=sucess");
            exit();
        }
    }
}
