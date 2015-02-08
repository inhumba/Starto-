<?php
class Captcha{
	var $size;
	var $session;

	function randStr(){
		$chars = 'abcdefghijkmnpqrstuvwxyz123456789';
		for ($i = 0; $i < $this->size; $i++){
			$pos = rand(0, strlen($chars)-1);
			$string .= $chars{$pos};
		}
		$_SESSION[$this->session] = $string;
		return $string;
	}

	function display(){
		 $width = 18*$this->size; 
		 $height = 1*$this->height; 
		 $string = $this->randStr(); 
		 $im = ImageCreate($width, $height); 
		 $imBG = imagecreatefromjpeg("image/captcha_bg.jpg");
		 $bg = imagecolorallocate($im, 255, 255, 255); 
		 $black = imagecolorallocate($im, 0, 0, 0); 
		 $grey = imagecolorallocate($im, 170, 170, 170); 
		 imagerectangle($im,0, 0, $width-1, $height-1, $grey); 
		 $font = "font/verdana.ttf";
		 imagettftext($im, 16, 0, 5, 22, $black, $font, $string);
		 imagecopymerge($im, $imBG, 0, 0, 0, 0, 256, 256, 55);
		 imagepng($im); 
		 imagedestroy($im); 
	}
}
?>