<?php  
	session_start();
	$hz = $_SESSION['HZ'];
	$destinationA = $_SESSION['path'];
	$rate = 5;
    ob_clean();
	echo "<br></br>缩略图：<br></br>";
		$imgage = getimagesize($destinationA); //得到原始大图片
		switch ($imgage[2]) { // 图像类型判断
			case 1:
			$im = imagecreatefromgif($destinationA);
			break;
			case 2:
			$im = imagecreatefromjpeg($destinationA);
			break;
			case 3:
			$im = imagecreatefrompng($destinationA);
			break;
		}
		$width_s = $imgage[0]; //获取大图片宽度
		$height_s = $imgage[1]; //获取大图片高度
		$width = $height_s/$rate; //rate为倍率
		$height= $width_s/$rate;
		$tn = imagecreatetruecolor($width, $height); //创建缩略图
		imagecopyresampled($tn, $im, 0, 0, 0, 0, $width, $height, $width_s, $height_s); //复制图像并改变大小
		$imageputout = 'image'.$hz;
		$code = '';
		$code_length = 5;
		$str = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
			for($i = 0 ; $i < $code_length; $i++) {
				$code .= $str[rand(0,51)];
			}
		$path ='uploads/small'.$code.".".$hz;
		$imageputout($tn,$path); //输出图像
		$_SESSION['sma_path'] = $path;


		
		





	
?>
