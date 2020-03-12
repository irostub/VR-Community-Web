<?php

if(!isset($_POST['id'])||!isset($_POST['title'])||!isset($_POST['note']))
{
    echo "<SCRIPT type='text/javascript'>
    alert(\"비정상적인 접근입니다.\");
    window.location.replace(\"../index.php\");</SCRIPT>";
}
$id = $_POST['id'];
$title = $_POST['title'];
$note = $_POST['note'];

include_once("../dbconn.php");
$sql = "insert into board(id,title,note,udate)value('$id','$title','$note',now())";

if($conn->query($sql) === TRUE) {
echo "<SCRIPT type='text/javascript'>
alert(\"게시글이 등록되었습니다.\");
window.location.replace(\"community.php\");</SCRIPT>";
}
else
{
echo "게시글 등록에 실패했습니다.<br>".$conn->error;
}