<?php 
include("functions.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Library</title>
    <style>
        body {
            background-color: #fceef5;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        h3 {
            color: #ff80bf;
            font-size: 28px;
            text-align: center;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        nav {
            text-align: center;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            background-color: #ff80bf;
            color: #fff;
            padding: 10px 20px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #ff4da6;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #ff80bf;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #ffe6f2;
        }

        tr:hover {
            background-color: #ffd6e8;
        }

        p {
            text-align: center;
            margin-top: 10px;
        }

        li {
            text-align: center;
            list-style-type: none;
            margin-top: 20px;
        }

        a {
            color: #ff80bf;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <header>
        <h3>Buku</h3>
    </header>

    <nav>
        <a href="input-buku.php" class="btn btn-dark">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tahun terbit</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM data_buku";
            $query = mysqli_query($conn, $sql);

            while($buku = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$buku['id']."</td>";
                echo "<td>".$buku['judul']."</td>";
                echo "<td>".$buku['pengarang']."</td>";
                echo "<td>".$buku['tahun_terbit']."</td>";
                echo "<td>";
                echo "<a href='form-edit.php?id=".$buku['id']."' style='color: #ff80bf; text-decoration: none;'>Edit</a> | ";
                echo "<a href='hapus.php?id=".$buku['id']."' style='color: #ff80bf; text-decoration: none;'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    <li><a href="index.php" style='color: #ff80bf; text-decoration: none;'>Ravve's Library</a></li>
