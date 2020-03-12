
<?php

if(!isset($_POST['no'])||!isset($_POST['title'])||!isset($_POST['note']))
{
    echo "<SCRIPT type='text/javascript'>
    alert(\"비정상적인 접근입니다.\");
    window.location.replace(\"../index.php\");</SCRIPT>";
}

// 설정
$no = $_POST['no'];
$title = $_POST['title'];
$note = $_POST['note'];

include_once("../dbconn.php");
$sql = "update board set title = '$title',note='$note',udate=now() where no = $no";

if($conn->query($sql) === TRUE) {
echo "<SCRIPT type='text/javascript'>
alert(\"게시글이 변경되었습니다.\");
window.location.replace(\"community.php\");</SCRIPT>";
}
else{
echo "게시글 변경에 실패했습니다.<br>".$conn->error;
}
