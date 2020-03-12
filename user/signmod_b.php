<?php session_start();

if(!isset($_POST['id'])||!isset($_POST['pw']))
{
       echo "<SCRIPT type='text/javascript'>
    alert(\"비정상적인 접근입니다.\");
    window.location.replace(\"../index.php\");</SCRIPT>";
}

$id = $_POST['id'];
$pw = $_POST['pw'];

include_once("../dbconn.php");

$sql = "update user set pw = '$pw' where id = '$id'";

if($conn->query($sql) === TRUE) {
    $_SESSION['name'] = $name;
    echo "<SCRIPT type='text/javascript'>
    alert(\"비밀먼호가 변경되었습니다.\");
    window.location.replace(\"../index.php\");</SCRIPT>";
}
else
    echo "회원정보변경에 실패하였습니다.<br>".$conn->error;
?>