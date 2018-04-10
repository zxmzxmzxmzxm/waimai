<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册页</title>
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
        input.error{
            background: red;
        }
        label.error{
            color: red;
            font-size: 12px;
        }
        ul li#login{
            width: 165px;
            height: 30px;
            margin: 10px auto;
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
<form action="checksign.php" method="post">
    <ul>
        <li><input type="text" placeholder="请输入账号" required name="user" id="user" class="required"></li>
        <li><input type="password" placeholder="请输入密码" required name="pass" id="pass1" class="required"></li>
        <li><input type="password" placeholder="请确认密码" required id="pass2" class="required" name="pass2"></li>
        <li id="login"><input type="submit" value="注册" id="btn"></li>
        <li>已有账号  请直接<a href="login.php">登录</a></li>
    </ul>
</form>
<!--表单验证：-->
<!--html  通过表单自身属性完成验证 required(必填) pattern="[a-zA-Z0-9]{6,8}"(限制)-->
<!--js  -->
<script src="messages_zh.js"></script>
<script src="jquery-3.3.1.js"></script>
<script src="jquery.validate.js"></script>
<script>
    $.validator.addMethod("format",function (value) {
        let reg=/[a-zA-Z0-9]{6,8}/;
        return reg.test(value);
    },"格式不符合要求");
    $("form").validate({
        rules: {
            user: {
                format:true,
                required: true,
                remote:{
                    url:"checkrepeat.php"
                }
            },
            pass:{
                format:true,
                required:true
            },
            pass2:{
                format:true,
                required:true,
                equalTo:"#pass1"
            }
         },
        messages:{
            user:{
                required:"请输入账号",
                remote:"账号已存在！"
            },
            pass:{
                required:"请输入密码"
            },
            pass2:{
                required:"请确认密码",
                equalTo:"请保持两次输入一致"
            }
        }
        // debug:true,
        // errorElement:"span",
        // errorPlacement:function (error,ele) {
        //     error.appendTo(".demo");
        // }
    })
</script>

<!--<script>-->
<!--    let user = document.querySelector("#user");-->
<!--    let pass1 = document.querySelector("#pass1");-->
<!--    let pass2 = document.querySelector("#pass2");-->
<!--    let btn = document.querySelector("#btn");-->
<!--    let form = document.forms[0];-->
<!--    let flag1 = false, flag2 = false, flag3 = false;-->
<!--    user.onchange = function () {-->
<!--        let val = this.value;-->
<!--        let reg = /^[a-zA-Z0-9]{5,8}$/;-->
<!--        if (!reg.test(val)) {-->
<!--            flag1 = false;-->
<!--            alert("账号格式不符合");-->
<!--            return;-->
<!--        }-->
<!--        let xhr = new XMLHttpRequest();-->
<!--        xhr.open("get", "checkrepeat.php?user=" + val);-->
<!--        xhr.send();-->
<!--        xhr.onload = function () {-->
<!--            let r = xhr.response;-->
<!--            if (r === "1") {-->
<!--                flag1 = true;-->
<!--            } else {-->
<!--                flag1 = false;-->
<!--                alert("账号已被注册过");-->
<!--            }-->
<!--        }-->
<!---->
<!--    };-->
<!--    pass1.onchange = function () {-->
<!--        let val = this.value;-->
<!--        let reg = /^[a-zA-Z0-9]{5,8}$/;-->
<!--        if (reg.test(val)) {-->
<!---->
<!--            flag2 = true;-->
<!---->
<!--        } else {-->
<!--            alert("格式错误");-->
<!--            flag2 = false;-->
<!--        }-->
<!--        // flag3 = false;-->
<!---->
<!--    };-->
<!--    pass2.onchange = function () {-->
<!--        let val = this.value;-->
<!--        if (val === pass1.value) {-->
<!--            flag3 = true;-->
<!--        } else {-->
<!--            alert("两次输入不一致");-->
<!---->
<!--        }-->
<!--//        flag3 = false;-->
<!--    };-->
<!--    btn.onclick = function () {-->
<!--        //一系列的判断-->
<!--        if (flag1 === false) {-->
<!--            alert("输入账号有误");-->
<!--            return;-->
<!--        }-->
<!--        if(pass1.value===pass2.value){-->
<!--            flag3=true;-->
<!--            flag2=true;-->
<!--        }else{-->
<!--            flag2=false;-->
<!--            alert("密码不一致");-->
<!--        }-->
<!--        if(flag1 && flag2 && flag3){-->
<!--            form.submit();-->
<!--        }-->
<!--    }-->
<!--</script>-->
</body>
</html>












