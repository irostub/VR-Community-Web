<?php session_start();

if(!isset($_POST['id'])||!isset($_POST['pw'])){
    echo "<SCRIPT type='text/javascript'>
    alert(\"비정상적인 접근입니다.\");
    window.location.replace(\"../signin.php\");</SCRIPT>";
}

$id = $_POST['id'];
$pw = $_POST['pw'];

include_once("../dbconn.php");

$sql = "select * from user where id = '$id' and pw = '$pw'";

$result = $conn->query($sql);
echo $conn->error;
if($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $_SESSION['id'] = $id;
    $_SESSION['name'] = $row['name'];
    $_SESSION['admin'] = $row['admin'];
    
    echo "<SCRIPT type='text/javascript'>
    alert(\"로그인되었습니다.\");
    window.location.replace(\"../index.php\");</SCRIPT>";
}
else {
    echo "<SCRIPT type='text/javascript'>
    alert(\"아이디 또는 비밀번호가 일치하지않습니다.\");
    window.location.replace(\"signin.html\");</SCRIPT>";
}
?>