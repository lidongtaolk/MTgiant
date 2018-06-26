<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message</title>
    <script type="text/javascript">
        (function() {
            var newRem = function() {
            var html = document.documentElement;
            html.style.fontSize = html.getBoundingClientRect().width / 10 + 'px';
            console.log(html.style.fontSize);
            };
            //var html = document.documentElement;
            //console.log(html.style.fontSize);
            window.addEventListener('resize', newRem, false);
            newRem();
        })();
    </script>
    <script src="/js/echarts.common.js"></script>
    <script type="text/javascript">
      	 var echarts = require('echarts')
	 //指定图标的配置和数据
        var option = {
            title:{
                text:'ECharts 数据统计'
            },
            tooltip:{},
            legend:{
                data:['用户来源']
            },
            xAxis:{
                data:["Android","IOS","PC","Ohter"]
            },
            yAxis:{

            },
            series:[{
                name:'访问量',
                type:'line',
                data:[500,200,360,100]
            }]
        };
        //初始化echarts实例
        var myChart = echarts.init(document.getElementById('chartmain'));

        //使用制定的配置项和数据显示图表
        myChart.setOption(option);
    </script>
    <style type="text/css">
        html{
            font-size:37.5px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        body{
            background-color: aquamarine;
            background-image: url('/image/message.jpg');
            background-size: 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            /*background-image: linear-gradient(to top, #fbc2eb 0%, #a6c1ee 100%);*/
            margin:0 auto;
            width:10 rem;
            display:flex;
            flex-direction: column;
        }
        /*article{
            width:10 rem;
            height:3.5rem;
            /*height:1334px;
            display:flex;
            flex-direction: column;
            background-color: aqua;
        }*/
        header{
            background-image: linear-gradient(to top, #fff1eb 0%, #ace0f9 100%);
            /*background-color:rgba(127,255,212,0.15);*/
            width:10rem;
            height:6rem;
        }
        header h1{
            text-align: center;
            font-size:1rem;
            color:blueviolet;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        #avatar{
            /*text-align: center;*/
            background-image:url('/image/avatar.jpg');
            background-size:100%;
            background-repeat:no-repeat;
	    background-position-y:0.1rem;
            position: relative;
            left:3.5rem;
            top:0.25rem;
            width:3rem;
            height:3rem ;
            border-radius: 20rem;
            box-shadow: 0 0 0.3rem black;
        }
        article h2{
            font-size:0.5rem;
            text-align: center;
        }
        article p{
            font-size:0.5rem;
            color:blueviolet;
        }
    </style>
</head>
<body>
    <header>
            <h1>MTgiant</h1>
            <div id="avatar"></div>
    </header>
    <article>
        <h2>My resume</h2>
        <p>
            My name: 李东涛 <br>
            Born in：1999.8.6；<br>
            Description: a man who is always clumsy in daily life<br>
        </p>
        <div id="chartmain" style="height:10rem"></div>
    </article>
</body>
</html>
