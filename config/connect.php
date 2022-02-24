<?php
//ส่งค่าไปที่ function
$host='localhost';
$user='nsc';
$password='!nsc2022';
$dbname='srs';

$info = array(
    'host' => $host,
    'user' => $user,
    'password' => $password,
    'dbname' => $dbname
);
$conn = mysqli_connect($info['host'], $info['user'], $info['password'], $info['dbname']) or die('Error connection database!');
mysqli_set_charset($conn, 'utf8');