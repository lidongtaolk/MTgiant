<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style type="text/css">
        body{
            background-image: url('/image/home.jpg');
            background-size:100%;
            background-repeat:no-repeat;
        }
        header{
            margin:0 auto;
            width:425px;
            height:50px;
        }
        h1{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        article{
            margin:0 auto;
            width:1200px;
            height:630px;
            border-radius: 50px;
            background-color:rgba(240,248,255,0.5);
            display:flex;
            flex-direction: row;
        }
        #side-bar{
            border-radius: 50px;
            display:flex;
            flex-direction:column;
        }
        #avatar{
            background-image: url('/image/avatar.jpg');
            background-size:100%;
            background-repeat: no-repeat;
            background-position-x:-30px;
            width:100px;
            height:100px;
            border-radius: 750px;
            box-shadow: 0 0 10px black;
        }
    </style>
</head>
<body>
    <!--<img src="../path/image/avatar.jpg" alt="大山的头像">-->
    <header>
        <h1>A man full of fatigue</h1>
    </header>
    <article>
        <div id="side-bar">
            <div id='avatar'></div>
        </div>
    </article>
</body>
</html>
