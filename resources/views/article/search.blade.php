@extends('layouts.app')
@section('carousel')

@endsection
@section('content')
<?php
//dd($article);

?>
<!--详情页-->
<div class="divMiddle mt90 clearfix">
    <!--主体内容-->
    <div class="pagecontent w1200">
        <main>
            <div class="post page">
                <h2 class="post-title">搜索 "{{$content}}"</h2>
                <div class="post-body">
                    @foreach($news as $v)
                    <p>
                        <a href="/article/{{$v->aid}}">{{$v->article_title}}</a>
                        <br>
                        <a href="/article/{{$v->aid}}">{{$_SERVER['HTTP_HOST']}}/article/{{$v->aid}}</a>
                        <br></p>
                    <p>
                    @endforeach
                    {!! $news->appends(array('content'=>$content))->render() !!}
                </div>
            </div>
        </main>
    </div>
 </div>
        <script charset="utf-8" type="text/javascript" src="/public/default/js/jquery-1.8.3.min.js"></script>
       
@endsection