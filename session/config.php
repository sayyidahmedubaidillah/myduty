<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "user";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("koneksi ke databse gagal:" . mysqli_connect_error())
}
?>