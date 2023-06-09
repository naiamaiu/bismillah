<?php

session_start();

    if(isset($_SESSION["login"])) {
        header('location:index.php');
    }


require 'functions.php';
if (isset($_POST["login"])) { 

	$username= $_POST["username"]; 
	$password= $_POST["password"];

	$result = mysqli_query ($conn,"SELECT * FROM users WHERE username='$username'");
	if (mysqli_num_rows($result) === 1) {

		$row = mysqli_fetch_assoc($result); //support PHP versi 5.5.0 keatas
		if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
			header('location:index.php');
			exit;
		}
	}
	$error=true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        p {
            color: #ff0000;
            font-weight: bold;
            text-align: center;
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
    <h1>Login</h1>
    <?php if(isset($error)) :?>
    <p>username / password salah</p>
    <?php endif;
    ?>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        
        <label for="password2">Password confirmation:</label>
        <input type="password" name="password2" id="password2">
        
        <button type="submit" name="login">Login</button>
    </form>
    <h4>Belum punya akun?</h4>
    <a href="registrasi.php">Registrasi disini</a>
</body>
</html>
