<?php
//ส่งค่าไปที่ function
$host='localhost';
$user='id18510650_barber';
$password='Webproject@62';
$dbname='id18510650_thebarber';

$info = array(
    'host' => 'localhost',
    'user' => 'id18510650_barber',
    'password' => 'Webproject@62',
    'dbname' => 'id18510650_thebarber'
);
$conn = mysqli_connect($info['host'], $info['user'], $info['password'], $info['dbname']) or die('Error connection database!');
mysqli_set_charset($conn, 'utf8');