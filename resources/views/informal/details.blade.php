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

<script type="text/javascript"> 
(function(){ 
var appid = 'cyttVmRbA'; 
var conf = 'prod_6ce43aaeddc102a52b1dec1ff3d2f652'; 
var width = window.innerWidth || document.documentElement.clientWidth; 
if (width < 960) { 
window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); } else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("https://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); } })(); </script>

@endsection