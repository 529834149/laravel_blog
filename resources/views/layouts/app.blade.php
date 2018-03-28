<!DOCTYPE html>
<html xml:lang="zh-Hans" lang="zh-Hans">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="generator" content="Z-BlogPHP 1.5.1 Zero" />
        <meta name="renderer" content="webkit">
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        
        
        <!--百度统计代码 -->
        <!--网站关键词、描述添加-->
        <title>bodys</title>
        <meta name="Keywords" content="技术、教程、解决方案、web、服务器各种疑难杂症">
        <meta name="description" content="技术、教程、解决方案、web、服务器各种疑难杂症">
        <meta name="author" content="陈宝金">
        <!--网站关键词、描述添加结束-->
        <link rel="shortcut icon" href="/public/default/picture/favicon.ico" />
        <link rel="stylesheet" rev="stylesheet" href="/public/default/css/normalize_1.css" type="text/css" media="all" />
        <link rel="stylesheet" rev="stylesheet" href="//at.alicdn.com/t/font_597522_h25unind9rb5ipb9.css" type="text/css" media="all" />
        <link rel="stylesheet" rev="stylesheet" href="/public/default/css/style_1.css" type="text/css" media="all" />
        
        <link rel="stylesheet" href="/public/default/css/lightbox_1.css" type="text/css" media="screen" />
       
        <link rel="stylesheet" href="/public/default/css/newlypublished_1.css" type="text/css" />
        
    </head>
    
    
    <link rel="stylesheet" href="/public/default/css/page.css" type="text/css" /></head>
    <body class="multi category">
        <!--导航-->
        @include('layouts._header')
        <!--轮播-->
        @yield('carousel')
        <!--内容-->
        @yield('content')
        <!--脚注-->
        @include('layouts._footer')
        <a href="#0" class="cd-top">Top</a>
        <script src="/public/default/js/jquery-1.8.3.min.js" type="text/javascript"></script>
        <script src="/public/default/js/zblogphp.js" type="text/javascript"></script>

        <script type="text/javascript" src="/public/default/js/plugins.count.js"></script>
        <script src="/public/default/js/tags.js" type="text/javascript"></script>

        <script id="cy_cmt_num" src="/public/default/js/plugins.list.count.js"></script>
        <script src="/public/default/js/nav.js" type="text/javascript"></script>
        <script src="/public/default/js/backtotop.js" type="text/javascript"></script>
        <script src="/public/default/js/mrszhao.js" type="text/javascript"></script>
        <script>
            /**
             * 
             * @param {type} aid
             * @returns 当前点击增加阅读数量，存入缓存中
             */
            function read(aid){
                    $.ajax({
                       type:'get',
                       url: '/cache',
                       data:{
                           aid: aid,
                           type:'articles'
                       },
                       dataType:'json',
                       success:function(data){
                           var cons = console;
                               if (cons){
                                   cons.log("%c\n","font-size:41px;background:url('http://cdn.iknow.bdimg.com/static/common/pkg/module_zed9cd9fd.png')no-repeat -135px -1px");
                                   cons.log('想和PHPer共同打造世界最大自媒体平台吗？\n想让自己的成就在亿万用户面前展现吗？想让世界看得你的光芒吗？想让自己的技术提升更快吗？\n加入QQ群:643890530，在这里不仅是工作，投入你的时间和热情，滴滴汗水终会汇聚成不平凡的成果。\n期待你的加盟。（大神在这里！）');
                                   cons.log("本人邮件chen2018php@163.com有不懂的问题可以发邮件哦");
                               }
                       }
                   });
                }
        </script>
    </body>

</html>
<!--94.35 ms , 15 query , 5802kb memory , 0 error-->