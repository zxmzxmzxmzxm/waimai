<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .box{
            /*background: #f5f5f5;*/
            color: #000;
            /*border: 1px solid #ccc;*/
            width: 150px;
            height: 150px;
            margin: 0 auto;
            margin-top: 200px;
        }
        .box img{
            width: 110px;
            height: 110px;
        }
    </style>
</head>
<body>
<div class="box">
    <img src="../img/shoucang.png" alt="">
<?php
session_start();
if(isset($_SESSION["user"])):

    ?>
    <div>欢迎 <span><?php echo $_SESSION["user"]?></span>登录</div>
    <div><a href="logout.php">退出</a></div>
<?php else:?>
    <div>尚未登录 请 <a href="login.php">登录</a></div>

<?php endif;?>

</div>
</body>
</html>