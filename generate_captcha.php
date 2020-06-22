<?php
	
/**
 * Author: Shahana Yasmin Chowdhury
 * E-mail: shahana.yc@gmail.com
 * National Board of Revenue(NBR)
 * Date: 10/10/2018
 * Time: 3:48 PM
 */


session_start();
require_once("config/config.php");
//require_once("../config/config.php");
function getRandomWord($len = 5) {
    $word = array_merge(range('0', '9'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $len);
}

$ranStr = getRandomWord();
$_SESSION["vercode"] = $ranStr;

$vercode = $ranStr;

$height = 35; //CAPTCHA image height
$width = 150; //CAPTCHA image width
$font_size = 24; 

$image_p = imagecreate($width, $height);
$graybg = imagecolorallocate($image_p, 245, 245, 245);
$textcolor = imagecolorallocate($image_p, 34, 34, 34);

$fontPath = $_SERVER['DOCUMENT_ROOT'].sprintf('/'.APP_ROOT.'/media/fonts/mono.ttf');
imagefttext($image_p, $font_size, -2, 15, 26, $textcolor, $fontPath, $ranStr);

//imagefttext($image_p, $font_size, -2, 15, 26, $textcolor, 'media/fonts/mono.ttf', $ranStr);
//imagefttext($image_p, $font_size, -2, 15, 26, $textcolor, "media/fonts/mono.ttf", $ranStr);
//imagestring($image_p, $font_size, 5, 3, $ranStr, $white);
imagepng($image_p);

	
?>
