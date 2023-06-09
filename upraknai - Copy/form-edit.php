<?php

include("functions.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-buku.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM data_buku WHERE id=$id";
$query = mysqli_query($conn, $sql);
$buku = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit data buku</title>
    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Arial', sans-serif;
        }

        h3 {
            color: #ff6699;
            font-size: 24px;
            text-align: center;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        form {
            width: 50%;
            margin: 0 auto;
        }

        label {
            color: #ff6699;
            font-weight: bold;
        }

        textarea {
            width: 100%;
            height: 100px;
            resize: none;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 5px;
        }

        input[type="submit"] {
            background-color: #ff6699;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>
        <h3>Edit data buku</h3>
    </header>

    <form action="edit.php" method="POST">

        <fieldset>
        <input type="hidden" name="id" value="<?php echo $buku['id'] ?>" />
        <p>
            <label for="judul">Judul: </label>
            <textarea name="judul"><?php echo $buku['judul'] ?></textarea>
        </p>

        <p>
            <label for="pengarang">Pengarang: </label>
            <textarea name="pengarang"><?php echo $buku['pengarang'] ?></textarea>
        </p>

        <p>
            <label for="tahun_terbit">Tahun terbit: </label>
            <textarea name="tahun_terbit"><?php echo $buku['tahun_terbit'] ?></textarea>
        </p>
        
        <p>
            <input type="submit" value="Edit" name="edit" />
        </p>

        </fieldset>

    </form>

</body>
</html>
