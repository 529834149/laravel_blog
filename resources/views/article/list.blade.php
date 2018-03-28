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
                @if(empty($is_ex))
                <h2 style="text-align: center;margin-top:30%;color: #ccc">这家伙很懒，什么都没留下</h2>
                @endif
                @foreach($data as $v)
                <section>
                    <div class="post multi">
                        <header>
                            <h4 class="post-category">
                              
                                <a href="/article/{{$v->aid}}" target="_blank" onclick="read({{$v->aid}});">{{$v->title}}</a></h4>
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
                            <form name="search" method="post" action="/search">
                                <input type="text" name="content" size="11" placeholder="一定要学会用我！" />
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
                        <div class="function_c">
                        @include('layouts._case')
                        

                        </div>
                    </div>
                </div>
            </aside>
        </div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $("form").submit(function(e){
       var content = $("input[name='content']").val();
       if(!content){
           return false;
       }else{
           return true;
       }
    });
</script>
@endsection