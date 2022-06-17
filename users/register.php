<?php session_start(); ?>
<?php
if (isset($_POST['lbtn'])) {



    $email = $_POST['email'];

    $pwd = $_POST['pwd'];


    require '../database/db.php';
    $sql = "SELECT * FROM users WHERE user_email = '$email'";

    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);

    if ($num  < 0) {

        header('location: ../index.php?uname_err');
        exit();
    } else {
        while ($row = mysqli_fetch_assoc($result)) {

            $hashedpwd = $row['user_pwd'];
            $hashedPwdCheck  = password_verify($pwd, $hashedpwd);

            if ($hashedPwdCheck == false) {
                header("Location: ../index.php?login=error");
                exit();
            } else {

                $_SESSION['u_id'] = $row['user_id'];
                $_SESSION['u_uname'] = $row['user_fullname'];


                header("location: ../index.php");
                exit();
            }
        }
    }
}

?>