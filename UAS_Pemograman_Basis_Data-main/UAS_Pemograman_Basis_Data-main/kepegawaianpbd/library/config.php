<?php
  // Koneksi ke Database
  // Tes koneksi : localhost/../config.php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db   = "pegawai";

  $con = mysqli_connect($host, $user, $pass, $db);
  if (mysqli_connect_error()) {
    echo "Koneksi gagal: " . mysqli_connect_error();
  }
?>