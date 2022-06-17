<?php
require 'includes/header.php';
require 'includes/navbar.php';
main_header('HOME');
?>

<?php
// require '../config/config.php';

main_navbar();
?>


<div class="container">
	<div class="card card-body col-md-4 mt-5 m-auto">
		<form action="users/login.php" method="post">
			<h5 class="text-center">Basic Ecom</h5>
			<div class="mb-2">
				<input type="text" name="" class="form-control" placeholder="Email Address">

			</div>
			<div class="mb-2">
				<input type="password" name="" class="form-control" placeholder="Password*">

			</div>
			<div class="d-grid gap-2">
				<button class="btn btn-primary" type="submit" name="lbtn">login</button>
			</div>
		</form>
		<div class="text-center mt-4">
			don't have an  account <a href="users/signup.php">SignUp</a>
		</div>
	</div>
</div>
<?php
main_footer();
?>