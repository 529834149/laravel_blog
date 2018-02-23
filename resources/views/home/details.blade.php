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
        Mysql
    @elseif ($details->cate_id === 5)
        Javascript
    @elseif ($details->cate_id === 6)
        随笔
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
            {{$details->content}}
            <p></p>
            <!--上一篇文章下一篇文章-->
            <!--<p>Laravel5.5新特性-前端模板上一篇文章</p>-->
            <hr>
            <h1 style="color:green">推荐文章</h1>
                 <p style="color:green">上一篇文章：<a href="{{ route('article.show', [$top_article['aid']]) }}" title="{{$top_article['article_title']}}" style="color:red">{{$top_article['article_title']}}</a></p>
                 <p style="color:green">下一篇文章：<a href="{{ route('article.show', [$next_article['aid']]) }}" title="{{$next_article['article_title']}}" style="color:red">{{$next_article['article_title']}}</a></p>

        </div>
    </article>
</div>


@endsection