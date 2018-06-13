@extends('layouts.app')

@section('title',' 的个人中心')

@section('content')
   <section id="main" class="col-md-8">

    <!--小图-->
    @foreach($get_article as $v)
 
    @if($v->is_image == 1)
    <article class="well post clearfix">
        <header class="entry-header">
            <h1 class="entry-title">
                <a href="/article/details" title=""
                data-original-title="{{$v->article_title}}">
                     {{$v->article_title}}
                </a>
            </h1>
            <div class="clearfix entry-meta">
                <span class="pull-left">
                    <time class="entry-date fa fa-calendar" datetime="{{date('Y-m-d H:i:s',$v->publish_time)}}">
                        &nbsp;{{date('Y-m-d H:i:s',$v->publish_time)}}
                    </time>
                    <span class="dot">
                        |
                    </span>
                    <span class="categories-links fa fa-folder-o">
                        <a href="#" rel="category tag" data-original-title=""
                        title="">
                             {{$v->title}}
                        </a>
                    </span>
                    <span class="dot">
                        |
                    </span>
                    <span class="fa fa-comments-o comments-link">
                        <a href="#"
                        data-original-title="" title="">
                            {{china_year($v->publish_time)}}
                        </a>
                    </span>
                    @if($v->click == 0)
                    <span class="rating tip" title="" data-original-title="平均得分 0,满分 5 分"> 
                        <span class="percent" style="width:0%"></span> 
                    </span>
                    @elseif($v->click  > 0 && $v->click <=20)
                    <span class="rating tip" title="" data-original-title="平均得分 1,满分 5 分"> 
                        <span class="percent" style="width:20%"></span> 
                    </span>
                    @elseif($v->click  > 20 && $v->click <=40)
                    <span class="rating tip" title="" data-original-title="平均得分 2,满分 5 分"> 
                        <span class="percent" style="width:40%"></span> 
                    </span>
                    @elseif($v->click  > 40 && $v->click <=60)
                    <span class="rating tip" title="" data-original-title="平均得分 3,满分 5 分"> 
                        <span class="percent" style="width:60%"></span> 
                    </span>
                    @elseif($v->click  > 60 && $v->click <=80)
                    <span class="rating tip" title="" data-original-title="平均得分 4,满分 5 分"> 
                        <span class="percent" style="width:80%"></span> 
                    </span>
                    @else
                    <span class="rating tip" title="" data-original-title="平均得分 5,满分 5 分"> 
                        <span class="percent" style="width:100%"></span> 
                    </span>
                    @endif
                    (
                    <span class="starNum">
                        {{$v->click}}次浏览数
                    </span>
                    )
                </span>
                <!-- <span class="hidden-xs pull-left"> <span class="dot">|</span> <span class="fa fa-user"> <a href="https://9iphp.com/author/specs" title="由Specs发布" rel="author">Specs</a></span> <span class="dot">|</span> <span class="fa fa-eye"> 732 views</span> </span> -->
            </div>
        </header>
        <div class="entry-summary entry-content clearfix">
            <a class="hidden-xs thumbLink" href="#"
            title="" data-original-title="通过 View::first 使用 Laravel Blade 的动态模板">
                <img class="thumb pull-left lazyLoad" src="/public/home/images/laravel-logo-search.jpg"
                data-original="/public/home/images/laravel-logo-search.jpg"
                alt="通过 View::first 使用 Laravel Blade 的动态模板" style="display: block;">
            </a>
            <p>
                当创建动态组件或者页面的时候，有时候我们想当自定义模版存在的时候展示它，否则展示默认的模版。
            </p>
        </div>
        <footer class="entry-footer clearfix hidden-xs">
            <div class="pull-left footer-tag">
                <a href="#" rel="tag" data-original-title=""
                title="">
                    Blade
                </a>
                <a href="#" rel="tag" data-original-title=""
                title="">
                    Laravel
                </a>
                <a href="#" rel="tag" data-original-title=""
                title="">
                    模版
                </a>
                <a href="#" rel="tag" data-original-title=""
                title="">
                    视图
                </a>
            </div>
            <a class="pull-right more-link" href="/article/details?aid={{$v->aid}}"
            title="" data-original-title="阅读全文">
                阅读全文»
            </a>
        </footer>
    </article>
    @endif
    @if($v->is_image ==2)
    <!--大图-->
     <article class="well post clearfix">
        <header class="entry-header">
            <a href="#" class="entry-cover" data-original-title="" title="">
                <img width="800" height="240" src="{{$v->image_url}}"
                class="attachment-full size-full wp-post-image" alt="">
            </a>
            <h1 class="entry-title">
                <a href="#"
                title="" data-original-title="{{$v->article_title}}">
                    {{$v->article_title}}
                </a>
            </h1>
            <div class="clearfix entry-meta">
                <span class="pull-left">
                   
                    <time class="entry-date fa fa-calendar" datetime="{{date('Y-m-d H:i:s',$v->publish_time)}}">
                        &nbsp;{{date('Y-m-d H:i:s',$v->publish_time)}}
                    </time>
                    <span class="dot">
                        |
                    </span>
                    <span class="categories-links fa fa-folder-o">
                        <a href="#" onclick="return false;" rel="category tag" data-original-title=""
                        title="">
                            {{$v->title}}
                        </a>
                    </span>
                    <span class="dot">
                        |
                    </span>
                    <span class="fa fa-comments-o comments-link">
                        <a onclick="return false;" href="#"
                        data-original-title="" title="">
                            {{china_year($v->publish_time)}}
                        </a>
                    </span>
                    <span class="dot">
                        |
                    </span>
                    @if($v->click == 0)
                    <span class="rating tip" title="" data-original-title="平均得分 0,满分 5 分"> 
                        <span class="percent" style="width:0%"></span> 
                    </span>
                    @elseif($v->click  > 0 && $v->click <=20)
                    <span class="rating tip" title="" data-original-title="平均得分 1,满分 5 分"> 
                        <span class="percent" style="width:20%"></span> 
                    </span>
                    @elseif($v->click  > 20 && $v->click <=40)
                    <span class="rating tip" title="" data-original-title="平均得分 2,满分 5 分"> 
                        <span class="percent" style="width:40%"></span> 
                    </span>
                    @elseif($v->click  > 40 && $v->click <=60)
                    <span class="rating tip" title="" data-original-title="平均得分 3,满分 5 分"> 
                        <span class="percent" style="width:60%"></span> 
                    </span>
                    @elseif($v->click  > 60 && $v->click <=80)
                    <span class="rating tip" title="" data-original-title="平均得分 4,满分 5 分"> 
                        <span class="percent" style="width:80%"></span> 
                    </span>
                    @else
                    <span class="rating tip" title="" data-original-title="平均得分 5,满分 5 分"> 
                        <span class="percent" style="width:100%"></span> 
                    </span>
                    @endif
                    (
                    <span class="starNum">
                        {{$v->click}}次浏览数
                    </span>
                    )
                </span>
                <!-- <span class="hidden-xs pull-left"> <span class="dot">|</span> <span class="fa fa-user"> <a href="https://9iphp.com/author/specs" title="由Specs发布" rel="author">Specs</a></span> <span class="dot">|</span> <span class="fa fa-eye"> 330 views</span> </span> -->
            </div>
        </header>
        <div class="entry-summary entry-content clearfix">
            <p>
                {{msubstr($v->desc,0,100)}} 阅读全文»
            </p>
        </div>
        <footer class="entry-footer clearfix hidden-xs">
            <div class="pull-left footer-tag">
                <a href="#" rel="tag" data-original-title=""
                title="">
                    {{$v->title}}
                </a>
                <a href="#" rel="tag" data-original-title=""
                title="">
                     {{$v->name}}
                </a>
            </div>
            <a class="pull-right more-link" href="/article/{{$v->aid}}/details"
            title="" data-original-title="阅读全文">
                阅读全文»
            </a>
        </footer>
    </article>
    @endif
    @if($v->is_image ==0)
    <!--没图文章-->
    <article class="well post clearfix">
        <header class="entry-header">
            <h1 class="entry-title">
                <a href="#"
                title="" data-original-title="{{$v->article_title}}">
                    {{$v->article_title}}
                </a>
            </h1>
            <div class="clearfix entry-meta">
                <span class="pull-left">
                   
                    <time class="entry-date fa fa-calendar" datetime="{{date('Y-m-d H:i:s',$v->publish_time)}}">
                        &nbsp;{{date('Y-m-d H:i:s',$v->publish_time)}}
                    </time>
                    <span class="dot">
                        |
                    </span>
                    <span class="categories-links fa fa-folder-o">
                        <a href="#" onclick="return false;" rel="category tag" data-original-title=""
                        title="">
                            {{$v->title}}
                        </a>
                    </span>
                    <span class="dot">
                        |
                    </span>
                    <span class="fa fa-comments-o comments-link">
                        <a onclick="return false;" href="#"
                        data-original-title="" title="">
                            {{china_year($v->publish_time)}}
                        </a>
                    </span>
                    <span class="dot">
                        |
                    </span>
                    @if($v->click == 0)
                    <span class="rating tip" title="" data-original-title="平均得分 0,满分 5 分"> 
                        <span class="percent" style="width:0%"></span> 
                    </span>
                    @elseif($v->click  > 0 && $v->click <=20)
                    <span class="rating tip" title="" data-original-title="平均得分 1,满分 5 分"> 
                        <span class="percent" style="width:20%"></span> 
                    </span>
                    @elseif($v->click  > 20 && $v->click <=40)
                    <span class="rating tip" title="" data-original-title="平均得分 2,满分 5 分"> 
                        <span class="percent" style="width:40%"></span> 
                    </span>
                    @elseif($v->click  > 40 && $v->click <=60)
                    <span class="rating tip" title="" data-original-title="平均得分 3,满分 5 分"> 
                        <span class="percent" style="width:60%"></span> 
                    </span>
                    @elseif($v->click  > 60 && $v->click <=80)
                    <span class="rating tip" title="" data-original-title="平均得分 4,满分 5 分"> 
                        <span class="percent" style="width:80%"></span> 
                    </span>
                    @else
                    <span class="rating tip" title="" data-original-title="平均得分 5,满分 5 分"> 
                        <span class="percent" style="width:100%"></span> 
                    </span>
                    @endif
                    (
                    <span class="starNum">
                        {{$v->click}}次浏览数
                    </span>
                    )
                </span>
                <!-- <span class="hidden-xs pull-left"> <span class="dot">|</span> <span class="fa fa-user"> <a href="https://9iphp.com/author/specs" title="由Specs发布" rel="author">Specs</a></span> <span class="dot">|</span> <span class="fa fa-eye"> 330 views</span> </span> -->
            </div>
        </header>
        <div class="entry-summary entry-content clearfix">
            <p>
                {{msubstr($v->desc,0,100)}} 阅读全文»
            </p>
        </div>
        <footer class="entry-footer clearfix hidden-xs">
            <div class="pull-left footer-tag">
                <a href="#" rel="tag" data-original-title=""
                title="">
                    {{$v->title}}
                </a>
                <a href="#" rel="tag" data-original-title=""
                title="">
                     {{$v->name}}
                </a>
            </div>
            <a class="pull-right more-link" href="/article/{{$v->aid}}/details"
            title="" data-original-title="阅读全文">
                阅读全文»
            </a>
        </footer>
    </article>
    @endif
  @endforeach
    <!--首页文章列表模块-->
    <!--分页-->
    <ul class="pagination pull-right">
       {{ $get_article->links() }}
    </ul>
</section>
@include('layouts._left_item')
@stop
