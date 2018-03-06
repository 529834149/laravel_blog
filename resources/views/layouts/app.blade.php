<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>bodys男孩儿</title>
<meta name="keywords" content="Body,博客,Laravel,PHP,框架,教程,资源,学习,笔记,不忘初心,语言无限学精才是王道" />
<meta name="description" content="Body博客致力于提供优质学习资源,分享个人笔记、视频教程。,php 爬虫 ">
<meta name="author" content="陈宝金">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" type="text/css" href="/public/default/fonts/font-awesome-4.7.0/css/font-awesome.css">
<link href="/public/default/css/all-271888b423.css" rel="stylesheet" type="text/css"/>
<link href="/public/default/css/app-9b5eb9253b.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="/public/default/picture/ico.ico"/>
<link rel="stylesheet" href="/public/default/share/dist/css/share.min.css">
<link rel="stylesheet" href="https://cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css">

<meta name="site" content="http://www.bodys.top" />
<!--文章详情页轮播-->
<!--<link rel="stylesheet" href="/public/default/css/reset.css"/>
<link rel="stylesheet" href="/public/default/css/index.css"/>-->
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
                <!--推荐的文章-->
               <div class="blog-sidebar margin-b-30">
                   <div class="blog-sidebar-heading">
                       <i class="icon ion-trophy"></i>
                       <h4 class="blog-sidebar-heading-title">大家都在看</h4>
                   </div>

                   <div class="blog-sidebar-content">
                       @foreach($order_sort_article as $ar)
                        {!!$ar!!}
                       @endforeach

                   </div>

               </div>                        


               <!--归档栏目-->
               <div class="blog-sidebar margin-b-30">
                  <div class="blog-sidebar-heading">
                      <i class="icon ion-clock"></i>
                      <h4 class="blog-sidebar-heading-title">归档</h4>
                  </div>
                   <div class="blog-sidebar-content" id="information">
                       <ul class="infomation_list" >
                       </ul>

                      <!--归档文件-->
                  </div>

               </div>
               <div class="blog-sidebar margin-b-30">
                   <div class="blog-sidebar-heading">
                       <i class="blog-sidebar-heading-icon fa fa-link"></i>
                       <h4 class="blog-sidebar-heading-title">友情链接</h4>
                   </div>
                   <div class="blog-sidebar-content">
                       @include('layouts._link')
                   </div>
               </div>  
               <div class="blog-sidebar margin-b-30">
                   <div class="blog-sidebar-heading">
                       <i class="icon ion-calendar"></i>
                       <h4 class="blog-sidebar-heading-title">广告栏</h4>
                   </div>
                   <div class="blog-sidebar-content">
                       @include('layouts._advertisement')
                   </div>
               </div>  

               </div>
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
<script src="/public/default/share/dist/js/jquery.share.min.js"></script>
    <script src="/public/default/rose/js/snowfall.jquery.js"></script> 
    <script>
        $(function(){
            $.ajax({
                type : "get",
                url: '/file_information',
                cache:false,//不缓存数据
                data:{},
                dataType : "json",//数据类型为json
                //jsonp: "callback",//服务端用于接收callback调用的function名的参数
                success : function(msg){
                    var meta = msg.meta;
                    if(meta.code == 200){
                        var data_list = msg.data;
                        var html = '';
                        for (var value of data_list) {
                            console.log(value);
                            html+='<li class="catListItem"> <a id="CatList_LinkList_1_Link_0" class="listitem" href="/date_article/'+value['time_infomation']+'">'+value['time_infomation']+' ('+value['article_count']+')</a></li>';
                        }
                          $('.infomation_list').append(html);
                    }else{
                        
                        return false;
                    }
                }
            })  
        })
    </script>
    <script>
            $(document).snowfall('clear');
            $(document).snowfall({
                image: "/public/default/rose/images/huaban.png",
                flakeCount:50,
                minSize: 5,
                maxSize: 22
            });
            
    </script>
    <script>
        $('#share-1').share();
        $('#share-2').share({sites: ['qzone', 'qq', 'weibo','wechat']});
        $('#share-3').share();
        $('#share-4').share();
    </script>
</body>
</html>