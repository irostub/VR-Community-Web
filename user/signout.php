<?php
session_start();

session_destroy();

echo "<SCRIPT type='text/javascript'>
alert(\"로그아웃 되었습니다.\");
window.location.replace(\"../index.php\");</SCRIPT>";
?>