@extends('layouts.app')
@section('carousel')

@endsection
@section('content')
<?php
//dd($article);

?>
<!--详情页-->
<div class="divMiddle mt90 clearfix">
            <header class="single-title-wrap">
                <div class="post-single-title w1200" id="mobile_pc_change">
                    <h4 class="cata-nav">
                        <a href="/">首页</a>>
                        @if(!$article['cate_info']['parent_id'])
                            <a href="{{$article['url']}}">{{$article['cate_info']['title']}}</a>
                        @else
                           
                            <a href="{{$article['url']}}">{{$article['cate_info']['title']}}</a></h4>
                        @endif
                        
                    <h1 class="post-title">{{$article['article_title']}}</h1>
                    <small class="post-footer">
                        <span>
                            <i class="iconfont icon-schedule"></i>{{date('Y-m-d H:i:s',intval($article['publish_time']))}}</span>
                        <span>
                            <i class="iconfont icon-eye2"></i> <?php 
                                    $read_key = 'article_read_aid_'.$article['aid'];
                                    echo \Cache::get($read_key) ?\Cache::get($read_key) :0;
                                    ?></span>
                    </small>
                </div>
            </header>
            <!--主体内容-->
            <div class="post single w1200">
                <div class="divMain">
                    <main>
                        <div class="post-body">
                            {!!$article->content!!}
                        </div>
                        
                    </main>
                    <div class="dianzan sf-praise-sdk"  data-postid='110' data-value="1" >
                        <span>
                            <i class="iconfont icon-dianzan" onclick="click_zan({{$article['aid']}});"></i>
                        </span>
                        <br />（
                        <span class="sf-praise-sdk" id="click_num" sfa='num' data-value='1' data-postid='110'>{{$article['click']}}</span>）
                    </div>
                    <hr>
                    <div class="dianzan sf-praise-sdk"  data-postid='110' data-value="1" style="margin:0 auto;" >
                        <div name="dashmain" id="dash-main-id-879f34" class="dash-main-2 879f34-2" style="margin:0 auto">
                             
                         </div>
                        
                    </div>
                    <div class="post-share">
<!--                        <i class="iconfont icon-fenxiang"></i>保存到：
                        百度分享代码开始
                        <div class="bdsharebuttonbox">
                            <a href="#" class="bds_more" data-cmd="more"></a>
                            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                            <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                            <a href="#" class="bds_huaban" data-cmd="huaban" title="分享到花瓣"></a>
                            <a href="#" class="bds_youdao" data-cmd="youdao" title="分享到有道云笔记"></a>
                            <a href="#" class="bds_evernotecn" data-cmd="evernotecn" title="分享到印象笔记"></a>-->
                        <!--</div>-->
                    </div>
                    <div class="post-tags-wrap">
                        <p>继续阅读与本文标签相同的文章</p>
                        <h5 class="post-tags">
                            <i class="iconfont icon-label_fill"></i>标签:
                            @foreach($article['tag_info'] as $tag)
                            <a href="/article/tag/{{$tag['tid']}}">{{$tag['name']}}</a>
                            @endforeach
                    </div>
                    <!--PC和WAP自适应版-->
                    <div id="SOHUCS" sid="{{$article['aid']}}" ></div> 
                    <script type="text/javascript"> 
                    (function(){ 
                    var appid = 'cyttVmRbA'; 
                    var conf = 'prod_189e0b63e2c3649f52ed3d939a1a103b'; 
                    var width = window.innerWidth || document.documentElement.clientWidth; 
                    if (width < 960) { 
                    window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); } else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("https://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); } })(); </script>
                    <div class="post-related">
                        <h3>相关文章</h3>
                        <nav>
                            <ul>
                                @foreach($article_uid_labout_article as $about)
                                <li>
                                    <span class="title">
                                        <a href="/article/{{$about->aid}}" title="{{$about->article_title}}">{{$about->article_title}}</a></span>
                                    <span class="time">{{date('Y-m-d',intval($about->publish_time))}}</span>
                                </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
                <aside class="post-single-aside">
                    <div class="divSidebar">
                        <div class="function" id="aboutmrszhao">
                            <h3 style="display:none;"></h3>
                            <div class="function_c">
                                <div class="mrszhaologo">
                                    <a href="http://www.mrszhao.com/aboutme.html" target="_blank">
                                        <span></span></a>
                                </div>
                                <h3>
                                    <a href="http://www.mrszhao.com/aboutme.html" target="_blank">php开发宝金</a></h3>
                                <div class="contact">
                                    <span class="city">
                                        <i class="iconfont icon-location"></i>北京</span>
            
                                    <span class="mrszhaoqq">
                                        <a target="_blank"  href="javascript:void(0);" >
                                            <span><i class="iconfont icon-yooxi"></i></span>
                                        </a>
                                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=529834149&site=qq&menu=yes" title="点击QQ给我留言">
                                             <i class="iconfont icon-ai-qq"></i>
                                        </a>
                                    </span>
                                </div>
                                <p>是这样一种品质，它使得你花大力气去避免消耗过多的精力。它敦促你写出节省体力的程序，同时别人也能利用它们。为此你会写出完善的文档，以免别人问你太多问题。</p>
                            </div>
                        </div>
                        <div class="function" id="divSearchPanel">
                            <div class="function_c">
                                <form name="search" method="post" action="/search">
                                    <input type="text" name="content" size="11" placeholder="一定要学会用我！" />
                                    <input type="submit" value="搜索" /></form>
                            </div>
                        </div>
                        <div class="function" id="divPrevious">
                            <h3 class="function_t">与我最新文章</h3>
                            <div class="function_c">
                                <nav>
                                    <ul>
                                        @foreach($article_uid_new_article as $v)
                                        <?php
//                                            dd($v);
                                        ?>
                                        <li>
                                            <a href="/article/{{$v->aid}}" class="picbox" rel="bookmark" onclick="read({{$v->aid}});">
                                                <img src="/public/default/picture/201712151513320803698191.jpg" class="thumb" width="94" height="64" alt="{{$v->article_title}}" /></a>
                                            <h4 class="title" onclick="read({{$v->aid}});">
                                                <a href="/article/{{$v->aid}}" title="{{$v->article_title}}">{{$v->article_title}}</a></h4>
                                            <p class="postmeta">
                                                <span class="time">{{date('Y-m-d',intval($v->publish_time))}}</span>
                                                <span class="eye">阅读（<?php 
                                    $read_key = 'article_read_aid_'.$v->aid;
                                    echo \Cache::get($read_key) ?\Cache::get($read_key) :0;
                                    
                                    ?>）</span></p>
                                        </li>
                                         @endforeach
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="function" id="Tblogpublished">
                            <h3 class="function_t">猜你喜欢</h3>
                            <div class="function_c">
                                <nav>
                                    <ul>
                                        @foreach($article_uid_love_article as $love)
                                        <li>
                                            <a href="/article/{{$love->aid}}" class="picbox" rel="bookmark" onclick="read({{$love->aid}});">
                                                <img src="/public/default/picture/201712151513320803698191.jpg" class="thumb" width="94" height="64" alt="JavaScriptDOM编程艺术" /></a>
                                            <h4 class="title" onclick="read({{$love->aid}});">
                                                <a href="/article/{{$love->aid}}" title="{{$love->article_title}}">{{$love->article_title}}</a></h4>
                                            <p class="postmeta">
                                                <span class="time">{{date('Y-m-d',intval($love->publish_time))}}</span>
                                                <span class="eye">阅读（<?php 
                                    $read_key = 'article_read_aid_'.$love->aid;
                                    echo \Cache::get($read_key) ?\Cache::get($read_key) :0;
                                    
                                    ?>）</span></p>
                                        </li>
                                        @endforeach
                                       
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
           
        </div>
        </div>
        <script charset="utf-8" type="text/javascript" src="/public/default/js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="{{asset('/public/default/js/jweixin-1.0.0.js')}}"></script> 
        <script type="text/javascript" charset="utf-8" src="https://www.dashangcloud.com/static/ds-2.0.js"></script>
        <script type="text/javascript" src="{{asset('public/js/jweixin-1.0.0.js')}}"></script> 
        <!--微信分享-->
        
        <script charset="utf-8" type="text/javascript">
            
            //                哪个Ip进行点攒了，每个Ip只能点一次
                function click_zan(aid){
                   $.ajax({
                        type:'get',
                        url: '/cache',
                        data:{
                            aid: aid,
                            type:'click_zan'
                        },
                        dataType:'json',
                        success:function(data){
                            if(data.meta.code ==200){
                                //成功
                              var num =$('#click_num').text();
                              var zong_num = parseInt(num)+1
                              $('#click_num').html(zong_num);
                            }
                            if(data.meta.code == 400){
                                alert('已经点过了')
                            }
                           
                        }
                    });
                }
                

            $(function(){
                if(navigator.userAgent.match(/mobile/i)) {  
                    var r = $('.post').removeClass("w1200");
                    console.log(r)
                }  
//                $(".mywx").mouseover(function(){
//                    $(".zlzwx1").css( "display", "block" );
//                    $(".zlzwx1").addClass("cb");
//                });

            })
            
        </script>
        <script>
        $(function(){
        var contenturl = window.location.href;  //获取当前网站的url
        var url = location.href.split('#')[0];
        var title = 'Bodys男孩';
        var logo = 'http://www.bodys.top/public/default/picture/timg.png';//获取网站Logo信息
        var content ='php开发技术论坛分享' ;//获取分享好友title中的|后面的信息 
        $.ajax({
//            url:'http://bot.blogchina.com/bee/weixinapi',
            url:'http://post.blogchina.com/weixinapi',
            data:{article_url:url},
            type:'get',
            dataType:'jsonp',
            jsonp: 'callback',
            success:function(msg){ 
                if(msg.code == 'A0200'){ 
                    wx.config({
                        debug: true, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
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
                                title: 'Bodys男孩-技术没有上限',
                                link: msg.data.url,
                                imgUrl: 'http://www.bodys.top/public/default/picture/timg.png', 
                                success: function (res) {  
                                },
                                cancel: function () {
                                }
                            }); 
                            //分享好友
                           wx.onMenuShareAppMessage({
                                title: 'Bodys男孩', 						// 分享标题
                                desc: '技术没有上限技术没有上限技术没有上限技术没有上限', 						// 分享描述
                                link: location.href.split('#')[0],							// 分享链接
                                imgUrl: 'http://www.bodys.top/public/default/picture/timg.png', 							// 分享图标
                                type: 'link', 									// 分享类型,music、video或link，不填默认为link
                                dataUrl: '', 								// 如果type是music或video，则要提供数据链接，默认为空
                                success: function (res) { 
//                                   alert(res);
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