<?php
include("../res/x5engine.php");
$nameList = array("czn","mhx","eep","hw2","kxk","psg","jvv","dxm","mut","8ds");
$charList = array("K","J","G","K","Y","8","2","6","6","Z");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
