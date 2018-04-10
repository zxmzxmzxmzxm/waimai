<?php
header("Content-Type:image/png");
//GD  函数库    关于图像函数
//   创建一个画板
$width=180;
$height=40;
$image=imagecreatetruecolor($width,$height);
//创建一个颜色
function getColor($type="1"){
    global $image;
    if($type==="1"){
        return imagecolorallocate($image,mt_rand(120,255),mt_rand(120,255),mt_rand(120,255));
    }else{
        imagecolorallocate($image,mt_rand(0,120),mt_rand(0,120),mt_rand(0,120));
    }
}
//填充颜色
imagefill($image,0,0,getColor());
//   添加线条
for($i=0;$i<10;$i++){
    imageline($image,mt_rand(0,$width),mt_rand(0,$height),mt_rand(0,$width),mt_rand(0,$height),getColor());
}
//添加点
for($i=0;$i<10;$i++){
    imagesetpixel($image,mt_rand(0,$width),mt_rand(0,$height),getColor());
}
//添加字母
$str="qwertyuipasdfghjkzxcvbnm23456789QWERTYUPASDFGHJKLXCVBNM";
session_start();
$code="";
$len=strlen($str);//判断长度
for($i=0;$i<4;$i++){
    $pos=mt_rand(0,$len-1);
    $letter=substr($str,$pos,1);
    $code.=strtoupper($letter);
    imagettftext($image,mt_rand(20,30),mt_rand(-15,15),$i*40,mt_rand(20,40),getColor("d"),
        "msyi.ttf",$letter);
}
$_SESSION["code"]=$code;
//用当前的图像资源生成一张图片
imagepng($image);
imagedestroy($image);