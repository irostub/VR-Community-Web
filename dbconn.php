<?php

$server = "localhost";
$user = "root";
$password = "";
$dbname = "vrcdb";
$conn = new mysqli($server, $user, $password, $dbname);

if($conn->connect_error)
{die("vrcdb 접속 오류");}

?>