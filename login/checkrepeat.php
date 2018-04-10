<?php
$user=$_GET["user"];
include "db.php";
$sql="SELECT * FROM `users` WHERE `user`='$user'";
$r=$db->query($sql);
$r=$r->fetch_array(MYSQLI_ASSOC);
if(isset($r)){
//    echo "0";
    echo "false";
}else{
//    echo "1";
    echo "true";
}