@extends('layouts.app')
@section('carousel')
<div class="catalog-bg note">
    <h2>杂谈</h2>
</div>
@endsection
@section('content')
<!--列表页-->

<div class="divMiddle w1200 mt20 clearfix">
            <div class="divMain fl">
                <h4 class="cata-nav">
                    <a href="http://www.mrszhao.com/">首页</a>>杂谈
                </h4>
                @foreach($data as $v)
                <section>
                    <div class="post multi">
                        <header>
                            <h4 class="post-category">
                                <a href="http://www.mrszhao.com/category-9.html" target="_blank">{{$v->title}}</a></h4>
                            <h2 class="post-title">
                                <a href="http://www.mrszhao.com/post/130.html" target="_blank">{{$v->article_title}}</a></h2>
                        </header>
                        <div class="post-body clearfix">
                            <div class="post-intro1">{{$v->desc}}...</div>
                            <small class="post-footer fr">
                                <span>
                                    <i class="iconfont icon-shijian"></i>{{date('Y-m-d H:i:s',intval($v->publish_time))}}</span>
                                <span>
                                    <i class="iconfont icon-eye2"></i>472</span>
                            </small>
                        </div>
                    </div>
                </section>
                @endforeach
                 <div id="pull_right">
                        <div class="pull-right">
                           {!! $data->render() !!}
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
                    @include('layouts._hot')
                    <!--标签tag-->
                    @include('layouts._tag')
                    <div class="function" id="Tblogpublished">
                        <h3 class="function_t">案例集精选</h3>
                        <div class="function_c"></div>
                    </div>
                </div>
            </aside>
        </div>

@endsection