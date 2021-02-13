<?php
$email      = $_POST['email'];
$pass       = $_POST['password'];

include 'koneksi.php';
$user   = mysqli_query($connect, "SELECT * FROM autho where email='$email' and password='$pass'");
$cek    = mysqli_num_rows($user);

if ($cek > 0) {
    header("location:home.php");
} else {
    header("location:login.php");
}
