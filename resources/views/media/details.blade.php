@extends('layouts.app')
@section('titles')
    <!--文章标题-->
    <h1 class='breadcrumbs-v5-post' align="center">{{$details->article_title}}</h1>
@endsection
@section('items_info')
    文章详情页
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
            @include('layouts.twitter')
           
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

@endsection