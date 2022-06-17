<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


<body>
    <div class="container">

        <div class="card card-body mt-5 col-md-4 m-auto">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                <div class="mb-2">
                    <input type="text" name="name" placeholder="Name*" class="form-control">
                </div>
                <div class="mb-2">
                    <input type="text" name="email" placeholder="Email Address*" class="form-control">
                </div>
                <div class="mb-2">
                    <input type="password" name="pwd" placeholder="Password*" class="form-control">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" name="lbtn">Sign Up</button>
                </div>

            </form>

        </div>
    </div>
</body>

</html>

<?php

if (isset($_POST['lbtn'])) {

    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $pwd =  $_POST['pwd'];


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?error=empty");
        exit();
    } else {
        include '../../database/db.php';
        $sql = "SELECT * FROM admins WHERE admin_email = '$email' ";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            header("Location: ../index.php?err=emailexsist");
            exit();
        } else {
            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
            $sql = "INSERT into admins(admin_name , admin_email, admin_pwd) VALUES('$name', '$email', '$hashedPwd') ";
            mysqli_query($conn, $sql);
            header("Location: ../index.php?signup=sucess");
            exit();
        }
    }
}
