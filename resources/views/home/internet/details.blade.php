@extends('layouts.app')

@section('title',' 互联网资讯')

@section('content')
<section id="main" class="col-md-8">
    
    <div style="margin-top: 50px;"></div>
    <article class="well clearfix entry-common" id="post-1918">
        <header class="entry-header">
            <p>
                <a title="" href="#" data-original-title="首页">
                    <i class="fa fa-home">
                    </i>
                    首页
                </a>
                »
                <a href="#" data-original-title="互联网资讯" title="互联网资讯">
                   互联网资讯
                </a>
                » {{$internet_details->title}}
            </p>
            <h1 class="entry-title">
                {{$internet_details->title}}
            </h1>
            <div class="clearfix entry-meta">
                <span class="pull-left">     
                    <time class="entry-date fa fa-calendar" datetime="{{date('Y:m:d',$internet_details->read_time)}}">
                        &nbsp; {{date('Y:m:d',$internet_details->read_time)}}
                    </time>
                    <span class="dot">
                        |
                    </span>
                    <span class="categories-links fa fa-folder-o">
                        <a href="#" rel="category tag" data-original-title=""
                        title="">
                            {{$internet_details->source}}
                        </a>
                    </span>
                    <span class="dot">
                        |
                    </span>
                    <span class="fa fa-comments-o comments-link">
                        <a href="#"
                        data-original-title="" title="">
                          {{china_year($internet_details->read_time)}}
                        </a>
                    </span>
                    <span class="dot">
                        |
                    </span>
                   @if($internet_details->click_num == 0)
                    <span class="rating tip" title="" data-original-title="平均得分 0,满分 5 分"> 
                        <span class="percent" style="width:0%"></span> 
                    </span>
                    @elseif($internet_details->click_num  > 0 && $internet_details->click_num <=20)
                    <span class="rating tip" title="" data-original-title="平均得分 1,满分 5 分"> 
                        <span class="percent" style="width:20%"></span> 
                    </span>
                    @elseif($internet_details->click_num  > 20 && $internet_details->click_num <=40)
                    <span class="rating tip" title="" data-original-title="平均得分 2,满分 5 分"> 
                        <span class="percent" style="width:40%"></span> 
                    </span>
                    @elseif($internet_details->click_num  > 40 && $internet_details->click_num <=60)
                    <span class="rating tip" title="" data-original-title="平均得分 3,满分 5 分"> 
                        <span class="percent" style="width:60%"></span> 
                    </span>
                    @elseif($internet_details->click_num > 60 && $internet_details->click_num <=80)
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
                        {{$internet_details->click_num}}次浏览数
                    </span>
                    )
                    <span class="dot">
                        |
                    </span>
                    <div class="btn-group">
                        <button type="button" class="showStar btn btn-warning btn-xs dropdown-toggle "
                        data-toggle="dropdown" aria-expanded="false">
                            评分
                            <span class="caret">
                            </span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="javascript:;" class="star star-5" onclick="postStars(1918, 5);"
                                data-original-title="" title="">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="star star-4" onclick="postStars(1918, 4);"
                                data-original-title="" title="">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="star star-3" onclick="postStars(1918, 3);"
                                data-original-title="" title="">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="star star-2" onclick="postStars(1918, 2);"
                                data-original-title="" title="">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="star star-1" onclick="postStars(1918, 1);"
                                data-original-title="" title="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </span>
                <!-- <span class="hidden-xs pull-left"> <span class="dot">|</span> <span class="fa fa-user"> <a href="https://9iphp.com/author/specs" title="由Specs发布" rel="author">Specs</a></span> <span class="dot">|</span> <span class="fa fa-eye"> 732 views</span> </span> -->
            </div>
        </header>
        <div class="entry-content clearfix">
            <p>
                <a href="/public/home/images/laravel-logo-search.jpg"
                data-original-title="" title="" class="phzoom">
                    <img class="aligncenter size-full wp-image-1919" src="/public/home/images/laravel-logo-search.jpg"
                    data-original="/public/home/images/laravel-logo-search.jpg"
                    alt="" width="1100" height="553" style="display: block;">
                    <span class="ph_hover" style="display: none;">
                    </span>
                </a>
            </p>
           {!!$internet_details->content!!}
        </div>

            <!-- #comments -->
    </article>
</section>
@include('layouts._left_item')
@stop
