<?php
error_reporting(E_ALL);
session_start();
	$code="";
	$N=array("A","B","C","D","E","F","G","H","Y","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","a","b","c","d","e","f","g","h","y","z","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","1","2","3","4","5","6","7","8","9","0");
	for($i=0;$i<4;$i++){
		$code.=$N[rand(0,57)];
	}
	$_SESSION['code']=$code;
getcode(5,80,35);


function getcode($num,$width,$height){
	global $code;
	header("Content-type:image/png");
	$img=imagecreate($width,$height);
	$bgcolor=imagecolorallocate($img,255,255,255);
	$strcolor=imagecolorallocate($img,134,193,102);
	$font = './font836/FreeSerif.ttf';
	for($i=0;$i<5;$i++){
	$x=$i*14+lcg_value(0,1)+5;
	imagettftext($img,17,lcg_value()*60-30,$x,25,$strcolor,$font,substr($code,$i,1));}
	for($i=0;$i<50;$i++){
		imagesetpixel($img,lcg_value()*80,lcg_value()*34,$strcolor);
	}
	
	imagepng($img);
	$imagedestroy($img);
}