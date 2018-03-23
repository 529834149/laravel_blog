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
                            ><a href="{{$article['url']}}">{{$article['cate_info']['parent_name']}}</a>>
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
                            <a href="http://www.mrszhao.com/tags-4.html">css3</a>
                            <a href="http://www.mrszhao.com/tags-146.html">伪对象选择器</a></h5>
                    </div>
                    <div class="post-related">
                        <h3>相关文章</h3>
                        <nav>
                            <ul>
                                <li>
                                    <span class="title">
                                        <a href="http://www.mrszhao.com/post/109.html" title="CSS3第三课：伪类选择器，为什么有一个伪字？">CSS3第三课：伪类选择器，为什么有一个伪字？</a></span>
                                    <span class="time">02-08</span>
                                </li>
                                
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
                            <h3 class="function_t">站内搜索</h3>
                            <div class="function_c">
                                <form name="search" method="post" action="">
                                    <input type="text" name="q" size="11" placeholder="一定要学会用我！" />
                                    <input type="submit" value="搜索" /></form>
                            </div>
                        </div>
                        <div class="function" id="divPrevious">
                            <h3 class="function_t">排行榜</h3>
                            <div class="function_c">
                                <nav>
                                    <ul>
                                        @foreach($get_hot_article as $v)
                                        <?php
//                                            dd($v);
                                        ?>
                                        <li>
                                            <a href="/article/{{$v->aid}}" class="picbox" rel="bookmark">
                                                <img src="/public/default/picture/201712151513320803698191.jpg" class="thumb" width="94" height="64" alt="{{$v->article_title}}" /></a>
                                            <h4 class="title">
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
                                        <li>
                                            <a href="/article" class="picbox" rel="bookmark">
                                                <img src="/public/default/picture/201712151513320803698191.jpg" class="thumb" width="94" height="64" alt="JavaScriptDOM编程艺术" /></a>
                                            <h4 class="title">
                                                <a href="/article" title="JavaScriptDOM编程艺术">JavaScriptDOM编程艺术</a></h4>
                                            <p class="postmeta">
                                                <span class="time">2017-12-15</span>
                                                <span class="eye">阅读（193）</span></p>
                                        </li>
                                       
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
@endsection