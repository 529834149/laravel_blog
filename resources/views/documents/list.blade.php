@extends('layouts.app')
@section('carousel')
<div class="catalog-bg note">
    <h2>talking is cheap,show me your code.</h2>
</div>
@endsection
@section('content')
<div class="divMiddle w1200  cases">
    <main>
        <div class="post page">
    <h2 class="post-title">文章归档</h2>
    <nav>
        <ul>
             <li>
                <span class="title">
                    <a href="/article/14" title="3年PHPer的面试总结">2018-02</a></span>
                <span class="time">发表了20篇文章</span>
            </li>
         </ul>
    </nav>
    
    
    <div class="post-body">
        <style>.hk-archives h3{font-weight: bold;}.hk-archives ul{margin-left: 20px;}.hk-archives ul ul{margin-left: 30px;}.hk-archives span{line-height: 32px;font-size: 16px;}.hk-archives a{color:#428bca;}.hk-archives a:hover{color:#5EB309;}</style>
        <div class="hk-archives">
            <iframe src="//1254408948.vod2.myqcloud.com/vod-player/1254408948/7447398156240077990/tcplayer/console/vod-player.html?autoplay=false&width=1920&height=1080" frameborder="0" scrolling="no" width="100%" height="1080" allowfullscreen >
            
            </iframe>
<!--
注意事项：
* 设置allowfullscreen属性将允许iframe内的页面调用Full Screen API，如去掉该属性，播放器的全屏按钮将无法使用。
* IE10以下（包括IE10）不支持Full Screen API，全屏功能将无法使用，只能通过外部CSS样式设置iframe全屏，并配合浏览器全屏功能进行全屏显示（快捷键为F11）
-->
        </div>
    </div>
</div>
       
    </main>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

@endsection