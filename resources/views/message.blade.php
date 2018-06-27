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
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
    <script src="../../public/js/echart.min.js"></script>
    <script>
    $('document').ready(function(){
        console.log($('article pre'));
        $('article pre').slideUp();
        $('article p').slideUp();
        $('#resume').bind({
            mouseover:function(){
                $('#resume').css("color","blueviolet");
            },
            mouseleave:function(){
                $('#resume').css("color","black")
            },
            click:function(){
                $('article p').slideToggle();
            }
        });
        $('#text').bind({
            mouseover:function(){
                $('#text').css("color","blueviolet");
            },
            mouseleave:function(){
                $('#text').css("color","black")
            },
            click:function(){
                $('article pre').slideToggle();
            }
        });
    });
    </script>
    <script type="text/javascript">
        //require.config({
        //    paths: {
        //        echarts: 'http://echarts.baidu.com/build/dist'
        //    }
        //});
        //指定图标的配置和数据
        window.onload=function(){
        // 基于准备好的dom，初始化echarts实例
        console.log("yes");
        console.log(document.getElementById('chartmain'));
        var myChart = echarts.init(document.getElementById('chartmain'));
        console.log(myChart);
        // 指定图表的配置项和数据
        var option = {
            title: {
                text: 'ECharts 入门示例'
            },
            tooltip: {},
            legend: {
                data:['销量']
            },
            xAxis: {
                data: ["衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子"]
            },
            yAxis: {},
            series: [{
                name: '销量',
                type: 'bar',
                data: [5, 20, 36, 10, 10, 20]
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        }
    </script>
    <style type="text/css">
        html{
            font-size:37.5px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            -webkit-font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
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
        @keyframes ball{
            0%{
                transform: translateY(0rem) scale(1.6,0.9);
            }
            50%{
                transform:translateY(-3rem) scale(0.9,1.6);
            }
            100%{
                transform:translateY(0rem) scale(1.6,0.9);
            }
        }
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
        
        .ball{
            background-image: linear-gradient(to top, #d5dee7 0%, #ffafbd 0%, #c9ffbf 100%);
            position:absolute;
            width:0.5rem;
            height:0.5rem;
            border-radius: 0.5rem;
        }
        #ball1{animation:ball 0.75s infinite;}
        #ball2{animation:ball 0.75s infinite;animation-delay: 0.25s;left:2rem;}
        #ball3{animation:ball 0.75s infinite;animation-delay: 0.5s;left:7rem;}
        #ball4{animation:ball 0.75s infinite;animation-delay: 0.75s;left:9.5rem;}
        article h2{
            font-size:0.5rem;
            text-align: center;
        }
        article p,pre{
            font-size:0.5rem;
            color:blueviolet;
        }
    </style>
</head>
<body>
    <header>
            <h1>MTgiant</h1>
            <div id="avatar"></div>
            <div id="ball1" class="ball"></div><div id="ball2" class="ball"></div>
            <div id="ball3" class="ball"></div><div id="ball4" class="ball"></div>
    </header>
    <article>
        <h2 id="resume">My resume</h2>
        <p>
            My name: 李东涛 <br>
            Born in：1999.8.6；<br>
            Description: 就一大傻子<br>
        </p>
        <h2 id="text">To my dear</h2>
        <pre>
  大一终于要结束了，心心念念了这么久
的大学生活转眼已过了1/3，我写这篇文章
的时候，其实正在复习大物，为什么突然想
写这个？我问自己，难道不能等考完试再写
吗？我也很想考完试再写，但是我想自己或
许没有那个耐心去等。。今年开学的时候，
我曾希望自己在这个学期里把项目写完，同
时养成每节课之后都要复习预习的好习惯。
我到底有没有做到呢？当然是没有，如果我
有能耐做到了，又怎么会想起写这篇短文呢？
既没有什么可以放的上台面的成就，在学习
方面也没有什么进步，我到底干了些什么呢？
  我亲爱的点进这个链接来看我的页面的朋
友们，我想说的是，学习和进步本来就是伴
随着巨大的付出和痛苦的。我告诉自己，我
没能达到开学所许下的目标最根本的原因，
不在于自己的能力，而在于自己的规划，一
个人想要达成某项成就，并不是完全依靠其
本身的能力，更重要的在于其是否有明确的
达成那项成就的方法。你是否有所成就的，
取决于你如何规划了自己的时间。
  我们从来都是在伴随着痛苦成长。
  （谢谢你们一直在我身边）
        </pre>
        <div id="chartmain" style="height:10rem"></div>
    </article>
</body>
</html>
