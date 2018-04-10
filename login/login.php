<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            list-style: none;
        }
        form{
            background: #f5f5f5;
            color: #000;
            border: 1px solid #ccc;
            width: 300px;
            height: 200px;
            margin: 0 auto;
            margin-top: 200px;
        }
        .codeimg{
            margin-top: 10px;
        }
        ul li#login{
            width: 165px;
            height: 30px;
            margin: 0 auto;
        }
        #login input{
            margin: 0 auto;
            text-align: center;
            font-size: 14px;
            cursor: pointer;
            background: skyblue;
        }
    </style>
</head>
<body>
<form action="checklogin.php" method="post">
    <ul>
        <li>
            <input type="text" placeholder="请输入账号" name="user">
        </li>
        <li>
            <input type="password" placeholder="请输入密码" name="pass">
        </li>
        <li><input type="text" placeholder="请输入验证码" name="code" id="code">
            <img src="code.php" class="codeimg" width="165" height="40" onclick="this.src='code.php?t='+new Date().getTime()" alt="">
        </li>
        <li id="login"><input type="submit" value="登录" ></li>
        <li>还没有账号，请<a href="sign.php">注册</a></li>
    </ul>

</form>
</body>
</html>
