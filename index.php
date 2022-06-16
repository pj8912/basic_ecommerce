<?php
include 'includes/header.php';
main_header('HOME');
?>

<div class="container">
	<div class="card card-body col-md-4 mt-4">
		<form action="users/login.php" method="post">
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
	</div>
</div>
</body>

</html>
<?php include 'test.php'; ?>