<!DOCTYPE html>
<html>
<head>
    <title>Formulir Input Buku</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
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

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: 'Arial', sans-serif;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #ff6699;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>
        <h3>Formulir Input Buku</h3>
    </header>

    <form action="tambah.php" method="POST">

        <fieldset>

        <p>
            <label for="judul">Judul:</label>
            <input type="text" name="judul" placeholder="Judul" />
        </p>
        <p>
            <label for="pengarang">Pengarang:</label>
            <input type="text" name="pengarang" placeholder="Pengarang" />
        </p>
        <p>
            <label for="tahun_terbit">Tahun terbit:</label>
            <input type="text" name="tahun_terbit" placeholder="Tahun terbit" />
        </p>
        <p>
            <input type="submit" value="Input" name="input" />
        </p>

        </fieldset>

    </form>

</body>
</html>
