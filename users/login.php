<?php
include '../includes/header.php';
include '../includes/navbar.php';
?>
<?php
main_header('Sign Up');
?>

<?php
// main_navbar(false);
?>
<div class="m-auto mt-5 card card-body col-md-6">
    <p class="h1" align="center">Basic Ecom</p>
    <form action="register.php" method="post">
        <div class="mb-2">
            <input type="email" name="email" class="form-control" placeholder="Email Address">
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