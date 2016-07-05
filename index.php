<?php
define("APPID","wx9df2725cc2dd130f");
define("APPSECRET","351c264296853b8b1a23f92017e9af59");
define("TOKEN","weixin11");

require("./wechat.inc.php");
$wechat = new WeChat(APPID,APPSECRET,TOKEN);
$wechat->responseMsg();
// $wechat->_getQRCode();
// $wechat->_getAccesstoken();
?>
