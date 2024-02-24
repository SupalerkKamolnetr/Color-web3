<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "12341234";
$database = "phpcolor";
$port = "3306";

mysqli_report(MYSQLI_REPORT_OFF);

$connection = mysqli_connect($hostname ,$username,$password,$database,$port);

/*
if ($connection)
{
    echo "เชื่อมต่อสำเร็จ";
}
else { die("เชื่อมต่อไม่สำเร็จ เพราะ " . mysqli_connect_error());}
*/

