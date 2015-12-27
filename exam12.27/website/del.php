<?php
	header("Content-Type:text/html; charset=utf-8");
	include 'conn.php';
	$name =$_POST['name'];
	$sql = 'DELETE FROM website WHERE name ='."'$name'";
	$sql = mysqli_query($mysqli,$sql);
	if($sql){
		echo "添加成功";
	}
	else{
		echo "添加失败";
	}
?>