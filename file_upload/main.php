<?php
	header("Content-Type:text/html; charset=utf-8");
	$size = 10000000;
	$rate = 5;
	$path = "uploads"; 
	if ($_FILES['file']['error']>0) {
		echo "上传错误";
		switch($_FILES['file']['error']){
			case 1:die('上传文件大小超出了PHP配置文件约定值');
			case 2:die('上传文件大小超出了表单约定值');
			case 3:die('文件只被部分上传');
			case 4:die('没有上传任何文件');
			default:die('未知错误');
		}
	}
	$type = $_FILES["file"]["type"];
	switch ($type) {
		case 'image/jpeg': $okType = true;$hz = 'jpeg'; break;
		case 'image/gif':  $okType = true;$hz = 'gif' ; break;
		case 'image/png':  $okType = true;$hz = 'png' ; break;
		default:die("类型错误！");break;
	}

	if($_FILES['file']['size'] > $size ) {
		die("超出上传字节限制");
	}
	$filename = date("YmdHis").rand(100,999).".".$hz;

	if (is_uploaded_file($_FILES['file']['tmp_name'])) {
		$destinationA = $path.'/'.$filename;
		if(!move_uploaded_file($_FILES['file']['tmp_name'], $destinationA)) {
			die("WANRNING!不能将文件移动到指定目录。");
		}
	}else {
		die("WANRNING!上传文件{$_FILES['file']['name']}不是一个合法文件");
	}
	$_SESSION['HZ']=$hz;
	$_SESSION['path']=$destinationA;
	include 'small_img.php';
	$small_path = $_SESSION['sma_path'];
	echo "<img name = 'small_img' src='$small_path'/>";
?>	