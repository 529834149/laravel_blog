<!DOCTYPE html>
<html>
    
    <head>
        <title>
            @yield('title', 'IT-Bodys')
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="qc:admins" content="4200263000006375" />
        <meta name="description" content="">
        <meta name="keywords" content="专题Specs&#039; Blog-就爱PHP">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script>
            var themeConfig = {
                fixedNav: true,
                isPjax: false,
                postId: 0
            };
        </script>
        <!--<link rel='dns-prefetch' href='//im.9iphp.com' />-->
        <!--<link rel='dns-prefetch' href='//s.w.org' />-->
<!--        <link rel="alternate" type="application/rss+xml" title="Bodys&#039; Blog-就爱PHP &raquo; 专题Feed"
        href="https://9iphp.com/series/feed/" />-->
        <link rel='stylesheet' id='9iphp-style-css' href='/public/home/css/style.css' type='text/css'
        media='all' />
        <script type='text/javascript' src='/public/home/js/jquery.min.js'>
        </script>
        <script type='text/javascript' src='/public/home/js/9iphp.js'>
        </script>
        <link rel='https://api.w.org/' href='https://9iphp.com/wp-json/' />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://9iphp.com/xmlrpc.php?rsd"
        />
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://9iphp.com/wp-includes/wlwmanifest.xml"
        />
        <meta name="generator" content="WordPress 4.7.10" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        rel="stylesheet">
        <style type="text/css">
            body{ background: #ffffff; }
        </style>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media
        queries -->
        <!--[if lt IE 9]>
            <script src="js/html5shiv.js">
            </script>
            <script src="js/respond.min.js">
            </script>
        <![endif]-->
    </head>
    
    <body class="is-loading">
        <div class="loadingBar">
        </div>
        <header class="metabar top-header">
            <div id="pLoading" class="hidden">
                <div class="spinner">
                    <div class="rect1">
                    </div>
                    <div class="rect2">
                    </div>
                    <div class="rect3">
                    </div>
                    <div class="rect4">
                    </div>
                    <div class="rect5">
                    </div>
                </div>
                <!-- <img src="picture/loading-bubbles.svg"> -->
            </div>
            <div id="masthead" role="banner" class="hidden-xs">
                <div class="top-banner">
                    <div class="container">
                        <a class="brand brand-image" href="https://9iphp.com/" title="Specs&#039; Blog-就爱PHP"
                        rel="home">
                            <img src="/public/home/images/logo.png" width="200px" height="50px" alt="Specs&#039; Blog-就爱PHP">
                            <h1 class="hidden-xs">
                                <small>
                                    勤能补拙，出彩自己
                                </small>
                            </h1>
                            <!-- <audio class="aud" src="http://www.w3school.com.cn/i/song.mp3" controls="controls"
                            autoplay="autoplay" loop="loop"> <p>Oops, looks like your browser doesn't support HTML 5 audio.</p> </audio> -->
                        </a>
                        <div class="top-social pull-right hidden-xs">
                            <a id="s_sina_weibo" title="新浪微博" target="_blank" href="http://weibo.com/9iphp"
                            data-toggle="tooltip" data-placement="bottom">
                                <i class="fa fa-weibo">
                                </i>
                            </a>
                            <a id="s_tencent_weibo" title="腾讯微博" target="_blank" href="http://t.qq.com/Specs_"
                            data-toggle="tooltip" data-placement="bottom">
                                <i class="fa fa-tencent-weibo">
                                </i>
                            </a>
                            <a id="s_github" title="GITHUB" target="_blank" href="https://github.com/9IPHP"
                            data-toggle="tooltip" data-placement="bottom">
                                <i class="fa fa-github">
                                </i>
                            </a>
                            <a id="s_rss" title="RSS" target="_blank" href="http://9iphp.com/feed"
                            data-toggle="tooltip" data-placement="bottom">
                                <i class="fa fa-rss-square">
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts._header')
        </header>
        <!--<div class="metabar header-holder"></div>-->
        <div id="pjaxdata" class="pjaxdata">
            <div class="container">
                <section class="row">
                    <!--主体内容-->
                    @yield('content')
                    <!--侧边栏-->
                   
                </section>
            </div>
        </div>
        @include('layouts._link')
        @include('layouts._footer')
        <script type='text/javascript'>
            /* <![CDATA[ */
            var SPECS = {
                "um_ajaxurl": "https:\/\/9iphp.com\/wp-admin\/admin-ajax.php"
            };
            /* ]]> */
            
        </script>
        <script type='text/javascript' src='/public/home/js/comments-ajax.js'>
        </script>
        <script type='text/javascript' src='/public/home/js/wp-embed.min.js'>
        </script>
    </body>

</html>
<!-- Dynamic page generated in 0.072 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2018-05-25 10:59:00 -->
<!-- Compression=g zip -->