@extends('layouts.app')
@section('titles')
    <!--文章标题-->
    <h1 class='breadcrumbs-v5-post' align="center">{{$details->article_title}}</h1>
@endsection
@section('items_info')
    @if ($details->cate_id === 1)
        首页
    @elseif ($details->cate_id === 2)
        PHP
    @elseif ($details->cate_id === 3)
        讨论
    @elseif ($details->cate_id === 4)
        数据库
    @elseif ($details->cate_id === 5)
        前端
    @elseif ($details->cate_id === 6)
        版本控制器
    @elseif ($details->cate_id === 7)
        Github
    @elseif ($details->cate_id === 8)
        laravel学院
    @else
        大杂烩
    @endif
@endsection
@section('desc')
    <p class="breadcrumbs-v5-divider" align="center"> {{$details->motto}}</p>
   
@endsection
@section('content')
<div class=" col-xs-12 col-md-9 no-space">
    <article class="blog-grid">
        <div class="blog-grid-content article margin-b-30">
                       {!!$details->content!!}

            <p></p>
<!--            <ol>
                <li class="row" style="padding: 20px 0 0 20px;list-style-type:none;">
                    <div class="social-share">分享:</div>
                </li>
                    <li class="row" style="padding: 20px 0 0 20px;list-style-type:none;">
                    <div class="social-share" data-mode="prepend" >
                      <a href="javascript:" class="social-share-icon icon-heart"></a>
                    </div>
                  </li>
                  <li class="row" style="padding: 20px 0 0 20px;list-style-type:none;">
                    <div id="share-2"></div>
                  </li>
                  
            </ol>-->
            <!--<div class="share-component" data-disabled="google,twitter,facebook" data-description="Share.js - 一键分享到微博，QQ空间，腾讯微博，人人，豆瓣"></div>-->
            <div class="social-share" data-mobile-sites="weibo,qq,qzone,tencent" data-disabled="google,twitter,facebook"  data-weibo-title="Body博客致力于提供优质学习资源,分享个人笔记,工作遇见的问题和比较好的文章进行分享的平台" data-qq-title="{{$details->article_title}}">分享:</div>
            <!--上一篇文章下一篇文章-->
            <!--<p>Laravel5.5新特性-前端模板上一篇文章</p>-->
            <hr>
            <h1 style="color:green">推荐文章</h1>
            <p style="color:green">上一篇文章：<a href="{{ route('article.show', [$top_article['aid']]) }}" title="{{$top_article['article_title']}}" style="color:red">{{$top_article['article_title']}}</a></p>
            <p style="color:green">下一篇文章：<a href="{{ route('article.show', [$next_article['aid']]) }}" title="{{$next_article['article_title']}}" style="color:red">{{$next_article['article_title']}}</a></p>

        </div>
    </article>
    <!--PC和WAP自适应版-->
    <div id="SOHUCS" sid="{{$top_article['aid']}}" ></div> 
</div>

<script type="text/javascript" src="/public/default/share/jweixin-1.0.0.js"></script>
<script type="text/javascript" src="/public/default/share/jquery.min.js"></script>
<script> 
    $(function(){
        $('#share-2').share({
            sites: ['qzone', 'qq', 'weibo','wechat'],
            url                 : 'http://wanli.org/article/1', // 网址，默认使用 window.location.href
            source              : '', // 来源（QQ空间会用到）, 默认读取head标签：<meta name="site" content="http://overtrue" />
            title               : $('.breadcrumbs-v5-post').text(), // 标题，默认读取 document.title 或者 <meta name="title" content="share.js" />
            origin              : '', // 分享 @ 相关 twitter 账号
            description         : '语言需要时间的积累和磨练才能掌握好它', // 描述, 默认读取head标签：<meta name="description" content="PHP弱类型的实现原理分析" />
            image               : 'http://www.bodys.top/public/default/picture/ico.ico', // 图片, 默认取网页中第一个img标签
            disabled            : ['google', 'facebook', 'twitter'], // 禁用的站点
            wechatQrcodeTitle   : '微信扫一扫：分享', // 微信二维码提示文字
            wechatQrcodeHelper  : '<p>微信里点“发现”，扫一下</p><p>二维码便可将本文分享至朋友圈。</p>'
        
        });
        var contenturl =window.location.href;  //获取当前网站的url
        var titles = $('.breadcrumbs-v5-post').text();//获取当前网站的title信息
        var logoId =  'http://www.bodys.top/public/default/picture/ico.ico';
        var logo = 'http://www.bodys.top/public/default/images/simg.jpg';//获取网站Logo信息
        var content = $('.breadcrumbs-v5-divider').text();//获取分享好友title中的|后面的信息 
        $.ajax({
//            url:'http://bot.blogchina.com/bee/weixinapi',
            url:'http://post.blogchina.com/weixinapi',
            data:{article_url:contenturl},
            type:'get',
            dataType:'jsonp',
            jsonp: 'callback',
            success:function(msg){ 
                if(msg.code == 'A0200'){ 
                    wx.config({
                        debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
                        appId: msg.data.appid, // 必填，公众号的唯一标识
                        timestamp: msg.data.timestamp, // 必填，生成签名的时间戳
                        nonceStr: msg.data.noncestr, // 必填，生成签名的随机串
                        signature: msg.data.signature,// 必填，签名，见附录1
                        jsApiList: ['onMenuShareTimeline','onMenuShareAppMessage'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
                    });

                    wx.ready(function(){ 
                            wx.error(function (res) {
                              //console.log(res.errMsg);
                            });
                            //分享朋友圈
                           wx.onMenuShareTimeline({
                                title: title,
                                link: contenturl,
                                imgUrl: logo, 
                                success: function () {  
                                },
                                cancel: function () {
                                }
                            }); 
                            //分享好友
                           wx.onMenuShareAppMessage({
                                title: title, 						// 分享标题
                                desc: content, 						// 分享描述
                                link: contenturl, 							// 分享链接
                                imgUrl: logo, 							// 分享图标
                                type: '', 									// 分享类型,music、video或link，不填默认为link
                                dataUrl: '', 								// 如果type是music或video，则要提供数据链接，默认为空
                                success: function () { 
                                    // 用户确认分享后执行的回调函数
                                },
                                cancel: function () { 
                                    // 用户取消分享后执行的回调函数
                                }
                            }); 
                    }); 	

                } 
            },
            error:function(){}
        })
        
       
    })
</script>
@endsection