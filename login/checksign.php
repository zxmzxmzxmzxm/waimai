<?php
$user=$_POST["user"];
$pass=md5($_POST["pass"]);
//md5()  用来对某个字符串进行加密
include "db.php";
$sql="INSERT INTO `users`(`user`,`pass`)VALUE('{$user}','{$pass}')";
$db->query($sql);
if($db->affected_rows===1){
    $href="login.php";
    $msg="注册成功";
}else{
    $href="sign.php";
    $msg="注册失败";
}
include ("message.php");//引入message.php