<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .box{
            /*background: #f5f5f5;*/
            color: #000;
            /*border: 1px solid #ccc;*/
            width: 300px;
            height: 150px;
            margin: 0 auto;
            margin-top: 200px;
        }
    </style>

</head>
<body>
<div class="box">
<span><?php echo $msg;?></span>
<div>当前页面会在 <time>3</time>s后跳转  直接跳转请 <a href="<?php echo $href;?>">点击</a></div>
<script>
    let time=document.querySelector("time");
    let a=document.querySelector("a");
    let n=3;
    setInterval(function(){
        n--;
        time.innerHTML=n;
        if(n===0){
            location.href= a.href;
        }
    },1000);

</script>
</div>
</body>
</html>