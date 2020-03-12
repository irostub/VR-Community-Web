<?php

$id = $_POST['id'];
$pw = $_POST['pw'];
$name = $_POST['name'];

include_once("../dbconn.php");

$sql = "insert into user(id,pw,name) values('$id','$pw','$name')";

# 4. INSERT 명령어 실행
if($conn->query($sql) === TRUE) {
    echo "<SCRIPT type='text/javascript'>
    alert(\"회원가입되었습니다.\");
    window.location.replace(\"../index.php\");</SCRIPT>";
}
else
    echo "회원가입 처리에 실패하였습니다.<br>".$conn->error;
?>