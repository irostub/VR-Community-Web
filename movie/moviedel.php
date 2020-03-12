<?php session_start();

if($_SESSION['admin']=='n' || !isset($_SESSION['id']))
{
    echo "<SCRIPT type='text/javascript'>
    alert(\"비정상적인 접근입니다.\");
    window.location.replace(\"../index.php\");</SCRIPT>";
}
# 1. 입력된 데이터 가져오기
$no = $_GET['no'];

# 2. pizza 데이터베이스 접속
include_once("../dbconn.php");

# 3. DELETE 명령어 작성
$sql = "delete from video where no = '$no'";

# 4. DELETE 명령어 실행
if($conn->query($sql) === TRUE) {
    echo "<SCRIPT type='text/javascript'>
    alert(\"게시글이 삭제되었습니다.\");
    window.location.replace(\"movie.php\");</SCRIPT>";
}
else
    echo "게시글 삭제에 실패했습니다.<br>".$conn->error;
?>