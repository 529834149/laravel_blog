@extends('layouts.app')
@section('carousel')
<div class="catalog-bg note">
    <h2>talking is cheap,show me your code.</h2>
</div>
@endsection
@section('content')
<!--列表页-->

<div class="divMiddle w1200 mt20 clearfix">
            <div class="divMain fl">
                <h4 class="cata-nav">
                    <a href="article">首页</a>
                    <!--<a href="http://www.mrszhao.com/">首页</a>>杂谈-->
                </h4>
                @foreach($data as $v)
                <section>
                    <div class="post multi">
                        <header>
                            <h4 class="post-category">
                              
                                <a href="{{ $article->link() }}" target="_blank" onclick="read({{$v->aid}});">{{$v->title}}</a></h4>
                            <h2 class="post-title">
                                <a href="/article/{{$v->aid}}" target="_blank" onclick="read({{$v->aid}});">{{$v->article_title}}</a></h2>
                        </header>
                        <div class="post-body clearfix">
                            <div class="post-intro1">{{$v->desc}}...</div>
                            <small class="post-footer fr">
                                <span>
                                    <i class="iconfont icon-shijian"></i>{{date('Y-m-d H:i:s',intval($v->publish_time))}}</span>
                                <span>
                                    <i class="iconfont icon-eye2"></i>
                                    <?php 
                                    $read_key = 'article_read_aid_'.$v->aid;
                                    echo \Cache::get($read_key) ?\Cache::get($read_key) :0;
                                      
                                    ?></span>
                            </small>
                        </div>
                    </div>
                </section>
                @endforeach
                 <div id="pull_right">
                        <div class="pull-right">
                           {!! $data->render() !!}
                           <?php // echo $data->appends(['sort' => 'votes'])->render(); ?>
                        </div>
                  </div>
               
            </div>
            <aside class="fr">
                <div class="divSidebar ">
                    <div class="function" id="divSearchPanel">
                        <h3 class="function_t">站内搜索</h3>
                        <div class="function_c">
                            <form name="search" method="post" action="http://www.mrszhao.com/zb_system/cmd.php?act=search">
                                <input type="text" name="q" size="11" placeholder="一定要学会用我！" />
                                <input type="submit" value="搜索" /></form>
                        </div>
                    </div>
                    @include('layouts._category',['cateInfo' => $menuAll])
                    <!--设计文章-->
                    @include('layouts._hot',['get_hot_article'=>$get_hot_article])
                    <!--标签tag-->
                    @include('layouts._tag')
                    <div class="function" id="Tblogpublished">
                        <h3 class="function_t">案例集精选</h3>
                        <div class="function_c"></div>
                    </div>
                </div>
            </aside>
        </div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
     function read(aid){
         $.ajax({
            type:'get',
            url: '/cache',
            data:{
                aid: aid,
                type:'articles'
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