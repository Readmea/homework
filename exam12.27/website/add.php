<?php
	header("Content-Type:text/html; charset=utf-8");
	include "conn.php";
	$name = $_POST['name'];
	$address = $_POST['address'];
	$sql = 'INSERT INTO website (name,address)
			VALUES ('."'$name'".','."'$address'".')';
	$sql = mysqli_query($mysqli,$sql);
	if($sql){
		echo "添加成功";
	}
	else{
		echo "添加失败";
	}
?>