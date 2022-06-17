<?php
// require '../config/config.php';
include '../includes/header.php';
include '../includes/navbar.php';
// require '../includes/footer.php';
?>

<?php
main_header('Sign Up');
?>

<?php
main_navbar();
?>

<div class="m-auto mt-5 card card-body col-md-6">
    <p class="h1 " align="center">Basic Ecom</p>

    <form action="create_user.php" method="post">
        <div class="mb-3">
            <input class="form-control" type="text" name="flname" placeholder="FullName*">
        </div>

        <div class="mb-3">
            <input class="form-control" type="email" name="email" placeholder="Email*">
        </div>

        <div class="mb-3">

            <input class="form-control" type="password" name="pwd" placeholder="Password *">
         
        </div>

        <div class="mb-3 d-grid gap-2  ">
            <button type="submit" name="sbtn" class=" btn btn-success" align="center">

                Sign Up
            </button>
        </div>
        <p class="text-center">Already have an account <a href="../index.php">Log in</a></p>
    </form>

</div>

<?php main_footer(); ?>
