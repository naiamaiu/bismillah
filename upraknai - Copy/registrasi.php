<?php
require 'functions.php';
if (isset($_POST["register"])) {

	if (registrasi ($_POST) > 0 ) { 
		echo "<script>
		alert ('new user!');
		</script>";
	} else {
		echo mysqli_error($conn);
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <style>
        body {
            background-color: #f9e3e6;
            font-family: 'Arial', sans-serif;
        }

        h1 {
            color: #ff6699;
            font-size: 36px;
            text-align: center;
            margin-top: 60px;
        }

        form {
            max-width: 400px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-size: 18px;
            font-weight: bold;
            color: #ff6699;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: 'Arial', sans-serif;
        }

        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #ff6699;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }

        h4 {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 5px;
            font-size: 16px;
            color: #ff6699;
        }

        a {
            display: block;
            text-align: center;
            color: #ff6699;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Registration</h1>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        
        <label for="password2">Password confirmation:</label>
        <input type="password" name="password2" id="password2">
        
        <button type="submit" name="register">Register!</button>
    </form>
    <h4>Anda sudah punya akun?</h4>
    <a href="login.php">Login disini</a>
</body>
</html>
