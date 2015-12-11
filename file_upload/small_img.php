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


		
		




	// 	function suoluetu($destinationA,$width_s,$height_s,$destinationB=null) {	
	// 	$imgage = getimagesize($destinationA); //得到原始大图片
	// 	$rate =5;
	// 	switch ($imgage[2]) { // 图像类型判断
	// 		case 1:
	// 		$im = imagecreatefromgif($destinationA);
	// 		break;
	// 		case 2:
	// 		$im = imagecreatefromjpeg($destinationA);
	// 		break;
	// 		case 3:
	// 		$im = imagecreatefrompng($destinationA);
	// 		break;
	// 	}
	// 	$width_s = $imgage[0]; //获取大图片宽度
	// 	$height_s = $imgage[1]; //获取大图片高度
	// 	$width = $height_s/$rate; //rate为倍率
	// 	$height= $width_s/$rate;
	// 	$tn = imagecreatetruecolor($width, $height); //创建缩略图
	// 	imagecopyresampled($tn, $im, 0, 0, 0, 0, $width, $height, $width_s, $height_s); //复制图像并改变大小
	// 	imagejpeg($tn,$destinationB); //输出图像
	// 	imagedestroy($tn);
	// 	return true;
	// }
	
// 	function mkThumbnail($src, $width = null, $height = null, $filename = null) {  
//     if (!isset($width) && !isset($height))  
//         return false;  
//     if (isset($width) && $width <= 0)  
//         return false;  
//     if (isset($height) && $height <= 0)  
//         return false;  
  
//     $size = getimagesize($src);  
//     if (!$size)  
//         return false;  
  
//     list($src_w, $src_h, $src_type) = $size;  
//     $src_mime = $size['mime'];  
//     switch($src_type) {  
//         case 1 :  
//             $img_type = 'gif';  
//             break;  
//         case 2 :  
//             $img_type = 'jpeg';  
//             break;  
//         case 3 :  
//             $img_type = 'png';  
//             break;  
//         case 15 :  
//             $img_type = 'wbmp';  
//             break;  
//         default :  
//             return false;  
//     }  
  
//     if (!isset($width))  
//         $width = $src_w * ($height / $src_h);  
//     if (!isset($height))  
//         $height = $src_h * ($width / $src_w);  
  
//     $imagecreatefunc = 'imagecreatefrom' . $img_type;  
//     $src_img = $imagecreatefunc($src);  
//     $dest_img = imagecreatetruecolor($width, $height);  
//     imagecopyresampled($dest_img, $src_img, 0, 0, 0, 0, $width, $height, $src_w, $src_h);  
  
//     $imagefunc = 'image' . $img_type;  
//     if ($filename) {  
//         $imagefunc($dest_img, $filename);  
//     } else {  
//         header('Content-Type: ' . $src_mime);  
//         $imagefunc($dest_img);  
//     }  
//     imagedestroy($src_img);  
//     imagedestroy($dest_img);  
//     return true;  
// } 
// 	$result = mkThumbnail($destinationA, 147, 147);  
	
?>