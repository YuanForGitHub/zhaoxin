<?php
header("Content-Type: text/html; charset=utf-8");
$serve = "localhost";
$user = "scauwlb";
$psw = "scauwlb";
$dbname = "test";
$conn = new mysqli($serve, $user, $psw, $dbname);
mysqli_set_charset($conn, "utf8");
?>