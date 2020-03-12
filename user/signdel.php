<?php
session_start();

$id = $_GET['id'];

include_once("../dbconn.php");

$sql = "delete from user where id = '$id'";

if($conn->query($sql) === TRUE) {
    session_destroy();
        echo "<SCRIPT type='text/javascript'>
    alert(\"회원탈퇴가 완료되었습니다.\");
    window.location.replace(\"../index.php\");</SCRIPT>";
}
else
    echo "회원탈퇴 처리에 실패하였습니다.<br>".$conn->error;
?>