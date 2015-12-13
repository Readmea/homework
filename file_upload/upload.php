<?php 

header("Content-Type:text/html; charset=utf-8");
session_start();
if($_SESSION['CODE']==$_POST['yzm_code']){
	echo "验证正确";
	include "main.php";
	
}
else{
	echo "验证码错误";
}
//session_destroy();
?> 
