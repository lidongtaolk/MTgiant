<html><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <script type="text/javascript">
        function Email(){
            alert("多谢光临小站！");
        }
    </script>
    <style type="text/css">
    body{
        margin:0 auto;
        width:500px;
    }
    p{
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    </style>
</head>
<body>
<h1>欢迎吖，这里是大山的测试页</h1>
<form action="/MTgiant/public/index.php/email" method="post">
<p id="first">你是谁吖:</p><input type="username" id="username" placeholder="input your name">
<p id="second">你的邮箱地址嘞:</p><input type="email" name="email" placeholder="input your email address">
<input type="Submit" value="让我给你发邮件吧" onclick="Email()">
</form>
</body>
</html>
