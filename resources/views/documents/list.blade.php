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
    <div class="post-body">
        <style>.hk-archives h3{font-weight: bold;}.hk-archives ul{margin-left: 20px;}.hk-archives ul ul{margin-left: 30px;}.hk-archives span{line-height: 32px;font-size: 16px;}.hk-archives a{color:#428bca;}.hk-archives a:hover{color:#5EB309;}</style>
        <div class="hk-archives">
            <ul>
                <li>
                    <span>php相关学习网站</span>
                    <ul>
                        <li>PHP官方手册：
                            <a href="http://www.php.net/">php相关扩展包、函数方法使用和说明..</a></li>
                        <li>慕课网：
                            <a href="http://www.mrszhao.com/post/5.html">PHP、Java、Web前端、服务器在线课程</a></li>
                        <li>CSDN：
                            <a href="http://www.mrszhao.com/aboutmrszhao.html">专业IT技术发表平台</a></li>
                        <li>laravel china社区：
                            <a href="https://laravel-china.org/">laravel中国社区</a></li>
                         <li>云知梦：
                            <a href="https://laravel-china.org/">PHP视频资料教程</a></li>
                         <li>PHPChina开发者社区：
                            <a href="http://www.phpchina.com/portal.php?mod=listall">最早的php社区论坛</a></li>
                         <li>github：
                            <a href="https://github.com/">GitHub is where people build software. More than 27 million people use GitHub to discover, fork, and contribute to over 80 million projects</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--PC和WAP自适应版-->
                    <div id="SOHUCS" sid="url" ></div> 
                    <script type="text/javascript"> 
                    (function(){ 
                    var appid = 'cyttVmRbA'; 
                    var conf = 'prod_189e0b63e2c3649f52ed3d939a1a103b'; 
                    var width = window.innerWidth || document.documentElement.clientWidth; 
                    if (width < 960) { 
                    window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); } else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("https://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); } })(); </script>
    </div>
</div>
       
    </main>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

@endsection