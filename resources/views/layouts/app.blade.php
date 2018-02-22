<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>bodys男孩儿</title>
<meta name="keywords" content="Body,博客,Laravel,PHP,框架,教程,资源,学习,笔记,不忘初心" />
<meta name="description" content="i晚黎博客致力于提供优质学习资源,分享个人笔记、视频教程。,Python">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" type="text/css" href="/public/default/fonts/font-awesome-4.7.0/css/font-awesome.css">
<link href="/public/default/css/all-271888b423.css" rel="stylesheet" type="text/css"/>
<link href="/public/default/css/app-9b5eb9253b.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="http://blog.iwanli.me/image/favicon.ico"/>
</head>
<body class="animsition">
<div class="wrapper">
    @include('layouts._header')
    <div class="bg-color-sky-light">
        <div class="content-xs container">
            <div class="row">
                 @yield('content')
                <!--@include('layouts.item')-->
                @include('layouts._left')
                                   
    <div class="blog-sidebar margin-b-30">
    <div class="blog-sidebar-heading">
        <i class="blog-sidebar-heading-icon fa fa-link"></i>
        <h4 class="blog-sidebar-heading-title">友情链接</h4>
    </div>
    <div class="blog-sidebar-content">
        @include('layouts._link')
        
    </div>
</div>                                </div>
            </div>
        </div>
    </div>
    

      @include('layouts._footer')
</div>
<a href="javascript:void(0);" class="js-back-to-top back-to-top-theme"></a>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

<script type="text/javascript" src="/public/default/js/all-afcbcb8afd.js"></script>
<script type="text/javascript" src="/public/default/js/app-5faadcb028.js"></script>

</body>
</html>