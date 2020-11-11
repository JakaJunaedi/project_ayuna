<?php
$hostname = 'localhost';
$username = 'root';
$password = 'password051455';
$data = 'php_new';
$conn = mysqli_connect($hostname, $username, $password, $data);
if (!$conn) {
    die('gagal menghubungkan database');
}
//var_dump($conn);
