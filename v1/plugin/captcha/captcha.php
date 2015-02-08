<?php
session_start();
include "class.captcha.php";
$capchar = new Captcha();
$capchar->size=4;
$capchar->height=30;
$capchar->session="sCaptcha";
$capchar->display();
?>