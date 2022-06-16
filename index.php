<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
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