<?php include('server.php') ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

    <div class="register-photo">
        <div class="form-container">
            <form action="reg.php" method="POST">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="text" name="FirstName" placeholder="First Name" required=""></div>  
                <div class="form-group"><input class="form-control" type="text" name="LastName" placeholder="Last Name" ></div>  
                <div class="form-group"><input class="form-control" type="text" name="Address" placeholder="Address" required=""></div>
                <div class="form-group"><input class="form-control" type="number" name="number" placeholder="Number" required=""></div> 				
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required=""></div>
				  
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required=""></div>
                <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)" required=""></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="sign_up"  >Sign up</button></div><a href="logIn.php" class="already">You already have an account? Login here.</a></form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>