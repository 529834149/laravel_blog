@extends('layouts.app')
@section('carousel')
<div class="catalog-bg note">
    <h2>talking is cheap,show me your code.</h2>
</div>
@endsection
@section('content')
<div class="divMiddle w1200  cases">
    <main>
        <div class="cases-content clearfix">
            @foreach($caseList_info as $v)
            <section class="fl cases-wrap">
                <div class="post multi">
                    <div class="post-slt">
                        <a href="/boutique/{{$v->id}}" target="_blank" title="{{$v->title}}" onclick="read1({{$v->id}});">
                            <img src="http://{{$internat}}/public/upload/{{$v->lead_image_url}}" alt="{{$v->title}}"></a>
                    </div>
                    <div class="cases-title">
                        <h2 class="post-title">
                            <a href="/boutique/{{$v->id}}" target="_blank" title="{{$v->title}}" onclick="read1({{$v->id}});">{{$v->title}}</a></h2>
                        <small class="post-footer">
                            <span>
                                <i class="iconfont icon-schedule"></i>{{$v->created_at}}</span>
                            <span>
                                <i class="iconfont icon-eye2"></i> <?php 
                                    $read_key = 'article_read_combat_'.$v->id;
                                    echo \Cache::get($read_key) ?\Cache::get($read_key) :0;
                                    ?></span>
                        </small>
                    </div>
                </div>
            </section>
            @endforeach
             
        </div>
       
    </main>
    <div class="pagebar">
         {!! $caseList_info->render() !!}
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    /**
     * 
     * @param {type} aid
     * @returns 当前点击增加阅读数量，存入缓存中
     */
    function read1(aid){
        $.ajax({
           type:'get',
           url: '/cache',
           data:{
               aid: aid,
               type:'combat'
           },
           dataType:'json',
           success:function(data){
               var cons = console;
                   if (cons){
                       cons.log("%c\n","font-size:41px;background:url('http://cdn.iknow.bdimg.com/static/common/pkg/module_zed9cd9fd.png')no-repeat -135px -1px");
                       cons.log('想和PHPer共同打造世界最大自媒体平台吗？\n想让自己的成就在亿万用户面前展现吗？想让世界看得你的光芒吗？想让自己的技术提升更快吗？\n加入QQ群:643890530，在这里不仅是工作，投入你的时间和热情，滴滴汗水终会汇聚成不平凡的成果。\n期待你的加盟。（大神在这里！）');
                       cons.log("本人邮件chen2018php@163.com有不懂的问题可以发邮件哦");
                   }
           }
       });
    }
    
</script>
@endsection