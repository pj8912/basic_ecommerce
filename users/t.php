<!-- <div class="card card-body col-md-4 mt-5 m-auto">
    <form action="login.php" method="post">
        <h5 class="text-center">Basic Ecom</h5>
        <div class="mb-2">
            <input type="text" name="email" class="form-control" placeholder="Email Address">

        </div>
        <div class="mb-2">
            <input type="password" name="pwd" class="form-control" placeholder="Password*">

        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit" name="lbtn">login</button>
        </div>
    </form>
    <div class="text-center mt-4">
        don't have an account <a href="signup.php">SignUp</a>
    </div>
</div> -->


<?php
session_start();
?>
<?php
include '../includes/header.php';
include '../includes/header.php';
include '../includes/footer.php';
?>

<?php main_header('Login'); ?>


<?php main_navbar(false); ?>

<div class="card card-body col-md-4 mt-5 m-auto">
    <form action="login.php" method="post">
        <h5 class="text-center">Basic Ecom</h5>
        <div class="mb-2">
            <input type="text" name="email" class="form-control" placeholder="Email Address">

        </div>
        <div class="mb-2">
            <input type="password" name="pwd" class="form-control" placeholder="Password*">

        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit" name="lbtn">login</button>
        </div>
    </form>
    <div class="text-center mt-4">
        don't have an account <a href="signup.php">SignUp</a>
    </div>
</div>

<?php
// if (isset($_SERVER['REQUEST_METHOD']) == "POST") {

if (isset($_POST['lbtn'])) {

    require '../database/db.php';


    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
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

                header("location: ../index.php");
                exit();
            }
        }
    }
}
// }
