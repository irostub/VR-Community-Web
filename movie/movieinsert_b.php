<?php
// 설정
if(!isset($_POST['title'])||!isset($_POST['note'])||!isset($_POST['url']))
{
    echo "<SCRIPT type='text/javascript'>
    alert(\"비정상적인 접근입니다.\");
    window.location.replace(\"../index.php\");</SCRIPT>";
}

$type = $_POST['type'];
$title = $_POST['title'];
$note = $_POST['note'];
$targeturl = $_POST['url'];
$uploads_dir = "./data";
$allowed_ext = array("jpg","jpeg","png","gif");
 
// 변수 정리
$error = $_FILES["myfile"]["error"];
$name = $_FILES["myfile"]["name"];
$tempvar = explode('.', $name);
$ext = strtolower(array_pop($tempvar));

// 오류 확인
if( $error != UPLOAD_ERR_OK ) {
	switch( $error ) {
		case UPLOAD_ERR_INI_SIZE:
		case UPLOAD_ERR_FORM_SIZE:
			echo "파일이 너무 큽니다. ($error)";
			break;
		case UPLOAD_ERR_NO_FILE:
			echo "파일이 첨부되지 않았습니다. ($error)";
			break;
		default:
			echo "파일이 제대로 업로드되지 않았습니다. ($error)";
	}
	exit;
}
 
// 확장자 확인
if( !in_array($ext, $allowed_ext) ) {
	echo "허용되지 않는 확장자입니다.";
	exit;
}

// 파일 이동
if(move_uploaded_file( $_FILES["myfile"]["tmp_name"], "$uploads_dir/$name"))
{
    $url = "$uploads_dir/$name";
    $size = $_FILES["myfile"]["size"];
    include_once("../dbconn.php");
    $sql = "insert into video(type,title,note,udate,filename,url,size,targeturl)value('$type','$title','$note',now(),'$name','$url',$size,'$targeturl')";
    
    if($conn->query($sql) === TRUE) {
    echo "<SCRIPT type='text/javascript'>
    alert(\"게시글이 등록되었습니다.\");
    window.location.replace(\"movie.php\");</SCRIPT>";
    }
    else
    echo "게시글 등록에 실패했습니다.<br>".$conn->error;
}

// 파일 정보 출력
echo "<h2>파일 정보</h2>
<ul>
	<li>파일명: $name</li>
	<li>확장자: $ext</li>
	<li>파일형식: {$_FILES["myfile"]["type"]}</li>
	<li>파일크기: {$_FILES["myfile"]["size"]} 바이트</li>
</ul>";
?>
