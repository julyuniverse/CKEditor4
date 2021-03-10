<?php
if($_FILES['upload']['size'] > 0) {
	
	//파일 이름 앞쪽 날짜
	$date = date("YmdHis");

	//확장자 따오기
	$pathinfo = pathinfo($_FILES['upload']['name']);
	$ext = strtolower($pathinfo['extension']);

	//파일 이름
	$fileName = $date."_".str_replace(" ", "_", $_FILES['upload']['name']);

	//파일이 저장될 경로
	$uploadPath = $_SERVER['DOCUMENT_ROOT']."/assets/editor/ckeditor4/images";

	$uploadsrc = $_SERVER['HTTP_HOST']."/assets/editor/ckeditor4/images/";
	$http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '') . '://';

	if($ext == "jpg" or $ext == "gif" or $ext == "png") {
		if(move_uploaded_file($_FILES['upload']['tmp_name'], $uploadPath."/".iconv("UTF-8", "EUC-KR", $fileName))) {
			echo '{"filename" : "'.$fileName.'", "uploaded" : 1, "url":"'.$http.$uploadsrc.$fileName.'"}';
		}
	}

}
?>
