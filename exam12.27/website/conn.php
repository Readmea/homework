<?php
 //    $dsn = 'mysql:host=localhost;dbname=website'; //主机名字，数据库名
 //    $username = 'root'; //用户名
 //    $passwd = ''; //密码
	// try{
 //    	$dbh = new PDO($dsn,$username,$passwd,array( PDO :: ATTR_PERSISTENT=> true));//长连接
 //    	$dbh -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//报错会中断进行事物，并回滚
 //    	$dbh->exec('set names utf8');
 //    }catch( PDOException   $e){//抓错误
 //        die($e->getMessage());
 //    }
//创建对象并打开连接，最后一个参数是选择的数据库名称
$mysqli = new mysqli('localhost','root','','website');
//检查连接是否成功
if (mysqli_connect_errno()){
    //注意mysqli_connect_error()新特性
    die('Unable to connect!'). mysqli_connect_error();
}
