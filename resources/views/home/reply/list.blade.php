@extends('layouts.app')

@section('title',' 互联网资讯')

@section('content')
    <section id="main" class="col-md-8">
    <article class="well clearfix page" id="post">
        <header class="entry-header">
            <h1 class="entry-title">
                留言板
            </h1>
        </header>
        <div class="page-content">
            <p>
                本小站记录了我在学习中遇到的一些困难，及用到的解决方法，收集了一些网上比较好的文章及技术上的知识点，如果有版权等方面的问题，请于我联系~~~更多精彩，请+我的微信
            </p>
            <p> 
                <a href="/public/home/picture/weixin_code.jpg"
                data-original-title="" title="" class="phzoom">
                    <img class="aligncenter size-full wp-image-1580" src="/public/home/picture/weixin_code.jpg"
                    alt="qrcode_for_gh_info" width="250" height="250">
                    <span class="ph_hover" style="display: none;">
                    </span>
                </a>
            </p>
        </div>
        <!--分享-->
        <!--分享-->
        <footer class="entry-footer">
            <!--评论模块-->
            <div id="comments" class="comments-area">
                <h2 class="comments-title">
                    本文共 1 个回复
                </h2>
                <div id="commentshow">
                    <ul class="commentlist list-unstyled">
                        <li class="comment even thread-even depth-1" id="comment-4194">
                            <div class="comment-wrap done" id="comment-4194">
                                <div class="comment-avatar pull-left" data-url="https://secure.gravatar.com/avatar/327883bc0c2c1c0f92e79c61c69d622a?s=50&amp;d=monsterid&amp;r=g"
                                style="display: block; background-image: url(&quot;https://secure.gravatar.com/avatar/327883bc0c2c1c0f92e79c61c69d622a?s=50&amp;d=monsterid&amp;r=g&quot;);">
                                </div>
                                <div class="comment-body">
                                    <h4>
                                        <cite class="fn">
                                            cc
                                        </cite>
                                        <span class="comment-date">
                                            2017/06/23 13:15
                                        </span>
                                    </h4>
                                    <p>
                                        主题很惊艳啊
                                    </p>
                                   
                                </div>
                            </div>
                        </li>
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
                    <form action="https://9iphp.com/wp-comments-post.php" method="post" id="commentform"
                    class="comment-form">
                        <div class="form-group" id="comment-author-info">
                            <div class="comment-form-author form-group has-feedback">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user">
                                        </i>
                                    </div>
                                    <input class="form-control" placeholder="昵称" id="author" name="author"
                                    type="text" size="30" required="required">
                                    <span class="form-control-feedback required">
                                        *
                                    </span>
                                </div>
                            </div>
                            <div class="comment-form-email form-group has-feedback">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope-o">
                                        </i>
                                    </div>
                                    <input class="form-control" placeholder="邮箱" id="email" name="email" type="text"
                                    size="30" required="required">
                                    <span class="form-control-feedback required">
                                        *
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group comment-form-comment">
                            <textarea class="form-control" id="comment" placeholder="请使用真实邮箱，任何无意义的邮箱留言都将被直接删除！"
                            name="comment" rows="5" aria-required="true" required="required" onkeydown="if(event.ctrlKey){if(event.keyCode==13){document.getElementById('submit').click();return false}};">
                            </textarea>
                            <div id="loading" class="mt-5" style="display: none;">
                                <i class="fa fa-spinner fa-spin">
                                </i>
                                正在提交, 请稍候...
                            </div>
                            <div id="error" class="text-danger mt-5" style="display: none;">
                                #
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <input name="submit" onclick="alert('开发中');return false;" type="submit" id="submit" class="btn btn-danger"
                            tabindex="5" value="在开发中...">
                        </div>
                        <input type="hidden" name="comment_post_ID" value="78" id="comment_post_ID">
                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                       
                    </form>
                    <script src="//captcha.luosimao.com/static/js/api.js">
                    </script>
                </div>
                <!-- #comments -->
            </div>
        </footer>
    </article>
</section>
@include('layouts._left_item')
@stop
