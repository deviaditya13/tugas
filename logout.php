<?php
include "koneksi.php";
include "fungsi.php";
session_start();
unset ($_SESSION['nama']);
unset ($_SESSION['login']);
unset ($_SESSION['proses_login']);
unset ($_SESSION['id_admin']);
session_destroy();
msgbox ("Berhasil Logout","index.php")
?>