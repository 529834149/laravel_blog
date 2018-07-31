@extends('layouts.app')

@section('title',' 的个人中心')

@section('content')
<link rel="stylesheet" href="/public/share/dist/css/share.min.css">
<section id="main" class="col-md-8">
    <article class="well clearfix entry-common" id="post-1918">
        <header class="entry-header">
            <p>
                <a title="" href="https://9iphp.com/" data-original-title="首页">
                    <i class="fa fa-home">
                    </i>
                    首页
                </a>
                »
                <a href="https://9iphp.com/./web" data-original-title="" title="">
                   {{$article_details->title}}
                </a>
                <!--»-->
<!--                <a href="https://9iphp.com/./web/php" data-original-title="" title="">
                    PHP
                </a>-->
                » 正文
            </p>
            <h1 class="entry-title">
                {{$article_details->article_title}}
            </h1>
            <div class="clearfix entry-meta">
                <span class="pull-left">     
                    <time class="entry-date fa fa-calendar" datetime="2017/09/19 12:58:29">
                        &nbsp; {{date('Y:m:d',$article_details->publish_time)}}
                    </time>
                    <span class="dot">
                        |
                    </span>
                    <span class="categories-links fa fa-folder-o">
                        <a href="https://9iphp.com/./web/php" rel="category tag" data-original-title=""
                        title="">
                            {{$article_details->name}}
                        </a>
                    </span>
                    <span class="dot">
                        |
                    </span>
                    <span class="fa fa-comments-o comments-link">
                        <a href="https://9iphp.com/web/php/view-first-in-blade.html#comments"
                        data-original-title="" title="">
                          {{china_year($article_details->publish_time)}}
                        </a>
                    </span>
                    <span class="dot">
                        |
                    </span>
                   @if($article_details->click == 0)
                    <span class="rating tip" title="" data-original-title="平均得分 0,满分 5 分"> 
                        <span class="percent" style="width:0%"></span> 
                    </span>
                    @elseif($article_details->click  > 0 && $article_details->click <=20)
                    <span class="rating tip" title="" data-original-title="平均得分 1,满分 5 分"> 
                        <span class="percent" style="width:20%"></span> 
                    </span>
                    @elseif($article_details->click  > 20 && $article_details->click <=40)
                    <span class="rating tip" title="" data-original-title="平均得分 2,满分 5 分"> 
                        <span class="percent" style="width:40%"></span> 
                    </span>
                    @elseif($article_details->click  > 40 && $article_details->click <=60)
                    <span class="rating tip" title="" data-original-title="平均得分 3,满分 5 分"> 
                        <span class="percent" style="width:60%"></span> 
                    </span>
                    @elseif($article_details->click  > 60 && $article_details->click <=80)
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
                        {{$article_details->click}}次浏览数
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
           {!!$article_details->content!!}
        </div>
            <!--相关文章-->
        </footer>
        
        <div id="share-4" data-disabled="google"></div>
        <div id="comments" class="comments-area">
            <h2 class="comments-title">
                本文共 2 个回复
            </h2>
            <div id="commentshow">
                <ul class="commentlist list-unstyled">
                    <!-- #comment-## -->
                    <li class="comment odd alt thread-odd thread-alt depth-1" id="comment-4326">
                        <div class="comment-wrap" id="comment-4326">
                            <div class="comment-avatar pull-left" data-url="https://secure.gravatar.com/avatar/75e215cea7a9364665ca688b5a23a58a?s=50&amp;d=monsterid&amp;r=g">
                            </div>
                            <div class="comment-body">
                                <h4>
                                    <cite class="fn">
                                        春熙路博客
                                    </cite>
                                    <span class="comment-date">
                                        2017/12/17 14:08
                                    </span>
                                </h4>
                                <p>
                                    进来看看
                                </p>
                                <div class="reply clearfix">
                                    <a rel="nofollow" class="comment-reply-link" href="#"
                                    onclick="return addComment.moveForm( &quot;comment-4326&quot;, &quot;4326&quot;, &quot;respond&quot;, &quot;1918&quot; )"
                                    aria-label="回复给春熙路博客" data-original-title="" title="">
                                        <div class="label label-danger pull-right">
                                            回复
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- #comment-## -->
                </ul>
            </div>
            <div id="respond" class="comment-respond">
                <h3 id="reply-title" class="comment-reply-title">
                    发表评论
                    <small>
                        <a rel="nofollow" id="cancel-comment-reply-link" href="/guestbook#respond"
                        style="display:none;" data-original-title="">
                            取消
                        </a>
                    </small>
                </h3>
                <script src="//captcha.luosimao.com/static/js/api.js">
                </script>
            </div>
            <!-- #comments -->
        </div>
    </article>
</section>
<script src="http://apps.bdimg.com/libs/jquery/1.8.2/jquery.js"></script>
<script src="/public/share/dist/js/jquery.share.min.js"></script>
<script>
////$('#share-1').share();
//$('#share-2').share({sites: ['qzone', 'qq', 'weibo','wechat']});
//$('#share-3').share();
$('#share-4').share();
</script>
@include('layouts._left_item')
@stop
