<?php
session_start();
?>
<?php
require 'includes/header.php';
require 'includes/navbar.php';
main_header('HOME');
?>

<?php
// require '../config/config.php';
if (isset($_SESSION['u_id'])) {
	main_navbar(true);
} else {
	main_navbar(false);
}
?>


<div class="container-fluid">

	<!-- <div class="row mt-5"> -->
	<!-- <div class="mt-1" style="width:100%;height:200px" > -->



	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" tyle="height:200px">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="banner/offer.png" class="d-block w-100 " alt="...">
			</div>
			<div class="carousel-item">
				<img src="banner/offer.png" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="banner/offer.png" class="d-block w-100" alt="...">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<!-- </div> -->
	<!-- </div> -->

	<!-- <div class="card card-body col-md-4 mt-5 m-auto">
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
			don't have an account <a href="users/signup.php">SignUp</a>
		</div>
	</div> -->

	<div class="mt-3 card card-body ">

	</div>
</div>
<?php
main_footer();
?>