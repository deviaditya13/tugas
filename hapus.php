<?php

include "koneksi.php";
$nik = $_GET['nik'];
$query = "DELETE FROM dt_karyawan WHERE nik='$nik'";
mysqli_query($koneksi, $query);
header('location:datakaryawan.php');

?>