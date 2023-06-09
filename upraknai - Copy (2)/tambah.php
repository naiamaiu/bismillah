<?php

require 'functions.php';

    if(isset($_POST["input"])) {

        $judul = $_POST["judul"];
        
        $result = mysqli_query($conn, "INSERT INTO VALUES (NULL, '$judul', ')");

        if($result) {
            header('location:index.php');
            return mysqli_affected_rows($conn);
            // cek tabel food ->data sudah masuk
        }
        
    }
?>