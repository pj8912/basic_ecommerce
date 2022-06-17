<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title>Admin</title>
</head>

<body>

    <div class="m-auto mt-5 col-md-4 card card-body">
        
        <form action="admin/login.php" method="post">
            <div class="mb-2">
                <input type="email" name="email" placeholder="Email Address*" class="form-control">
            </div>
            <div class="mb-2">
                <input type="password" name="pwd" placeholder="Password*" class="form-control">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="lbtn">login</button>
            </div>
        </form>
    </div>

</body>

</html>