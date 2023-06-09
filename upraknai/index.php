<?php
    session_start();

    if(!isset($_SESSION["login"])) {
        header('location:login.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ravve's Library</title>
</head>
<body>
    <h1>Ravve's Library</h1>
    <li><a href="input-buku.php">Input buku</a></li>
    <li><a href="list-buku.php">Directory Buku</a></li>
    <br><br><br>
    <button><a href="logout.php">logout</a></button>

   

</body>
</html>