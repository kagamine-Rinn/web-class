<?php
session_start();
require "config.php";

$username = $_POST['user'];
$password = $_POST['pass'];

$query = mysqli_query($log, "SELECT * FROM loginet WHERE id='$username'");

$data = mysqli_fetch_assoc($query);


if($data) {

    if($password == $data['password']) {

        echo "login berhasil";

    } else {

        echo "password salah";

    }

} else {

    echo "user tidak ditemukan";

}


?>