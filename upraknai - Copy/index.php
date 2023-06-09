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
    <style>
        body {
            background-color: #fdeff3;
            font-family: 'Arial', sans-serif;
        }

        h1 {
            color: #ff6699;
            font-size: 36px;
            text-align: center;
            margin-top: 60px;
        }

        li {
            list-style-type: none;
            margin-bottom: 10px;
        }

        a {
            display: block;
            padding: 10px;
            background-color: #ff6699;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }

        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #ff6699;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-family: 'Arial', sans-serif;
            cursor: pointer;
        }

        p {
            color: #ff6699;
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Ravve's Library</h1>
    <ul>
        <li><a href="input-buku.php">Input Buku</a></li>
        <li><a href="list-buku.php">Directory Buku</a></li>
    </ul>

    <button><a href="logout.php">Logout</a></button>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Input buku baru berhasil!";
            } else {
                echo "Input buku gagal!";
            }
        ?>
    </p>
    <?php endif; ?>
</body>
</html>
