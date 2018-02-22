@extends('layouts.app')
@section('titles')
    <!--文章标题-->
    <h1 class='breadcrumbs-v5-post' align="center">{{$details->article_title}}</h1>
@endsection
@section('desc')
    <p class="breadcrumbs-v5-divider" align="center"> {{$details->desc}}</p>
   
@endsection
@section('content')
<div class=" col-xs-12 col-md-9 no-space">
    <article class="blog-grid">
        <div class="blog-grid-content article margin-b-30">
            {{$details->content}}
            <p></p>
            <!--上一篇文章下一篇文章-->
            <!--<p>Laravel5.5新特性-前端模板上一篇文章</p>-->
            <hr>
            <h1 style="color:green">推荐文章</h1>
            @if (isset($top_article))
                 <p style="color:green">上一篇文章：<a href="http://coding.iwanli.me/course/video-5.html" title="{{$top_article->article_title}}" style="color:red">{{$top_article->article_title}}</a></p>
            @else
                 <p style="color:green">上一篇文章：<a href="#" title="" style="color:red">无</a></p>
            @endif
            @if (isset($next_article))
                 <p style="color:green">下一篇文章：<a href="http://coding.iwanli.me/course/video-5.html" title="{{$next_article->article_title}}" style="color:red">{{$top_article->article_title}}</a></p>
            @else
                 <p style="color:green">下一篇文章：<a href="#" title="" style="color:red">无</a></p>
            @endif

        </div>
    </article>
</div>


@endsection