@extends('layouts.app')

@section('title',' 的个人中心')

@section('content')
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"/>
  <link rel="stylesheet" href="https://g.alicdn.com/de/prismplayer/2.3.5/skins/default/aliplayer-min.css"/>
  <script type="text/javascript" src="https://g.alicdn.com/de/prismplayer/2.3.5/aliplayer-min.js"></script>
<section class="row">
    <div class="prism-player" id="J_prismPlayer">
    </div>
    <script>
        var player = Aliplayer({
            id: "J_prismPlayer",
            autoplay: true,
            width: "1920px",
            height: "1280px",
            vid: "58353d059f204e9b9f1b64774be1e4f2",
            playauth: "客户调用接口生成",
        });
    </script>
    <section id="main" class="col-md-8">
        <article class="well clearfix page" id="post">
            <header class="entry-header">
                <h1 class="entry-title">
                    关于
                </h1>
            </header>
            <div class="page-content">
                <p>
                    <img class="size-full wp-image-954 aligncenter" src="https://static.9iphp.com/wp-content/uploads/2014/05/9iphp_banner_smile.jpg"
                    alt="9iphp_banner_smile" width="700" height="220">
                </p>
                <h6>
                    关于博主
                </h6>
                <ul>
                    <li>
                        性别：
                        <i class="fa fa-male">
                        </i>
                    </li>
                    <li>
                        职业：PHP代码搬运工~
                    </li>
                    <li>
                        技能：LAMP、DIV+CSS、jQuery、LNMP、Linex、VUE、NodeJs、PHP、Laravel、Tp、Redis、Memeche
                    </li>
                    <li>
                        技能熟悉程序：略懂…
                    </li>
                </ul>
                <h6>
                    联系博主
                </h6>
                <p>
                    有事联系，请加入我们的QQ群：
                    <a title="" href="http://shang.qq.com/wpa/qunwpa?idkey=45b8d6d006051cb357cbdcc173f763879fc08a0fe2f358c09e6d1485416af6ea"
                    target="_blank" data-original-title="Specs'&nbsp;Blog&nbsp;用户交流群">
                        529834149
                    </a>
                    或发送邮件到：chen2018php@163.com
                </p>
                <h6>
                    微信公众号
                </h6>
                <p>
                    <a href="https://static.9iphp.com/wp-content/uploads/2014/07/qrcode_for_gh_info.jpg"
                    data-original-title="" title="" class="phzoom">
                        <img class="aligncenter size-full wp-image-1580" src="https://static.9iphp.com/wp-content/uploads/2014/07/qrcode_for_gh_info.jpg"
                        alt="qrcode_for_gh_info" width="250" height="250">
                        <span class="ph_hover" style="opacity: 0;">
                        </span>
                    </a>
                </p>
                <h6>
                    赞助博主
                </h6>
                <p>
                    如果您通过本博客解决了一些问题，并且希望本博客能更好的发展下去，欢迎使用
                    <a href="https://9iphp.com/donate" target="_blank" data-original-title=""
                    title="">
                        赞助
                    </a>
                    功能~
                </p>
                <h6>
                    关于本博
                </h6>
                <p>
                    本人记性不好，建立本博只为记录学习中遇到的问题及解决办法，方便以后查询。主要涉及到LAMP、HTML5、DIV+CSS、jQuery、DedeCMS、Wordpress、微信公众号开发等方面
                </p>
                <h6>
                    博客工具
                </h6>
                <ol>
                    <li>
                        <a href="http://www.bootcss.com/" target="_blank" data-original-title=""
                        title="">
                            Bootstrap
                        </a>
                        前端开发框架
                    </li>
                    <li>
                        <a href="https://9iphp.com/fa-icons" target="_blank" data-original-title=""
                        title="">
                            Font Awesome 字体图标
                        </a>
                        ，目前有 500 多个图标可供选择
                    </li>
                </ol>
                <h6>
                    博客历程
                </h6>
                <ul>
                    <li>
                        2013-09-14：购买域名9iphp.com，并使用
                        <a href="https://my.laoxuehost.net/aff.php?aff=2204" target="_blank" data-original-title=""
                        title="">
                            老薛主机
                        </a>
                        的虚拟主机，使用自带的twentytwelve主题
                    </li>
                    <li>
                        2013-09-19：把主机换到
                        <a href="http://my.weixianghost.com/aff.php?aff=142" target="_blank" data-original-title=""
                        title="">
                            维翔主机
                        </a>
                        ，因为看着比老薛主机便宜点…
                    </li>
                    <li>
                        2013-Xx-Xx：用大发的presscore-lite主题
                    </li>
                    <li>
                        2014-Xx-Xx：换成了Zanblog主题
                    </li>
                    <li>
                        2014-03-16：图片存储采用
                        <a href="https://portal.qiniu.com/signup?code=3lnaew1whqs7m" target="_blank"
                        data-original-title="" title="">
                            七牛云存储
                        </a>
                    </li>
                    <li>
                        2014-04-12：启用自制主题
                        <a href="https://9iphp.com/opensystem/wordpress/828.html" target="_blank"
                        data-original-title="" title="">
                            9IPHP
                        </a>
                    </li>
                    <li>
                        2014-08-31：正式发布
                        <a href="https://9iphp.com/opensystem/wordpress/1115.html" target="_blank"
                        data-original-title="" title="">
                            9IPHP主题
                        </a>
                    </li>
                    <li>
                        2014-12-31：添加“赞”功能
                    </li>
                    <li>
                        2015-03-08：精简CSS/JS文件，调整默认Bootstrap配色方案
                    </li>
                    <li>
                        2015-04-03：添加“评星”功能
                    </li>
                    <li>
                        2015-06-01：
                        <del>
                            使用Pjax，实现全站Ajax
                        </del>
                    </li>
                </ul>
            </div>
            <!--分享-->
            <!--分享-->
            <footer class="entry-footer">
                <!--评论模块-->
                <div id="comments" class="comments-area">
                    <div id="respond" class="comment-respond">
                    </div>
                    <!-- #comments -->
                </div>
            </footer>
        </article>
    </section>
    <!--侧边栏-->
    <aside id="side-bar" class="col-md-4">
        <div id="sidebar" class="affix-top" style="">
            <aside id="specs_recommend-7" class="widget widget_specs_recommend panel panel-specs visible-lg visible-md clearfix">
                <div class="panel-heading">
                    <h2>
                        <i class="fa fa-share-alt">
                        </i>
                        微信公众号
                    </h2>
                </div>
                <div class="textwidget">
                    <img src="https://static.9iphp.com/wp-content/uploads/2014/07/qrcode_for_gh_info.jpg">
                </div>
            </aside>
            <aside id="text-4" class="widget widget_text panel panel-specs visible-lg visible-md clearfix">
                <div class="panel-heading">
                    <h2>
                        广告
                    </h2>
                </div>
                <div class="textwidget">
                    <div>
                        <!--<script type="text/javascript">var cpro_id="u1982868";(window["cproStyleApi"] = window["cproStyleApi"] || {})[cpro_id]={at:"3",rsi0:"330",rsi1:"250",pat:"6",tn:"baiduCustNativeAD",rss1:"#FFFFFF",conBW:"0",adp:"1",ptt:"0",titFF:"%E5%BE%AE%E8%BD%AF%E9%9B%85%E9%BB%91",titFS:"14",rss2:"#393939",titSU:"0",ptbg:"70",piw:"0",pih:"0",ptp:"0"}<script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>-->
                        <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
                        </script>
                        <!-- 模版页-300宽 -->
                        <ins class="adsbygoogle" style="display: inline-block; width: 300px; height: 250px;"
                        data-ad-client="ca-pub-6074386496019881" data-ad-slot="8739581250" data-adsbygoogle-status="done">
                            <ins id="aswift_0_expand" style="display:inline-table;border:none;height:250px;margin:0;padding:0;position:relative;visibility:visible;width:300px;background-color:transparent;">
                                <ins id="aswift_0_anchor" style="display:block;border:none;height:250px;margin:0;padding:0;position:relative;visibility:visible;width:300px;background-color:transparent;">
                                    <iframe width="300" height="250" frameborder="0" marginwidth="0" marginheight="0"
                                    vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true"
                                    onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}"
                                    id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;width:300px;height:250px;">
                                    </iframe>
                                </ins>
                            </ins>
                        </ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>
            </aside>
            <aside id="specs_widget_recent_comments-14" class="widget widget_specs_widget_recent_comments panel panel-specs visible-lg visible-md clearfix">
                <div class="panel-heading">
                    <h2>
                        <i class="fa fa-comments-o">
                        </i>
                        最新评论
                    </h2>
                </div>
                <ul class="list-group">
                    <a class="list-group-item clearfix comment_list" href="https://9iphp.com/opensystem/thinkphp/999.html#comments"
                    title="" data-original-title="发表在 [TP笔记]ThinkPHP自定义错误页面、成功页面及异常页面">
                        <div class="comment-avatar" data-url="https://secure.gravatar.com/avatar/db379dc772f649c5b8a4a2686aee8b41?s=40&amp;d=monsterid&amp;r=g">
                        </div>
                        这个邮箱有什么作用呢？这个方法不错，谢谢了&nbsp;
                    </a>
                    <a class="list-group-item clearfix comment_list" href="https://9iphp.com/opensystem/wordpress/828.html#comments"
                    title="" data-original-title="发表在 自制Wordpress响应式主题-9IPHP 上线了~~">
                        <div class="comment-avatar" data-url="https://secure.gravatar.com/avatar/184d1feffd65127623ecefa0a45ce220?s=40&amp;d=monsterid&amp;r=g">
                        </div>
                        主题不错！&nbsp;
                    </a>
                    <a class="list-group-item clearfix comment_list" href="https://9iphp.com/web/javascript/679.html#comments"
                    title="" data-original-title="发表在 用高德地图JS API获取位置经纬度并在当前页显示">
                        <div class="comment-avatar" data-url="https://secure.gravatar.com/avatar/f0ae0f50c9bb82636872597d6361d4a3?s=40&amp;d=monsterid&amp;r=g">
                        </div>
                        我的这个搜索也用不了Uncaught TypeError: Cannot s...&nbsp;
                    </a>
                    <a class="list-group-item clearfix comment_list" href="https://9iphp.com/web/php/1204.html#comments"
                    title="" data-original-title="发表在 响应式Wordpress主题-9IPHP 使用教程及FAQ">
                        <div class="comment-avatar" data-url="https://secure.gravatar.com/avatar/b1c2511417702c866ee2a81fe31f0c11?s=40&amp;d=monsterid&amp;r=g">
                        </div>
                        最近在搭建个人博客，选择了9IPHP感觉非常不错，但是有一点不足的是点赞功能不好...&nbsp;
                    </a>
                    <a class="list-group-item clearfix comment_list" href="https://9iphp.com/web/javascript/679.html#comments"
                    title="" data-original-title="发表在 用高德地图JS API获取位置经纬度并在当前页显示">
                        <div class="comment-avatar" data-url="https://secure.gravatar.com/avatar/f0ae0f50c9bb82636872597d6361d4a3?s=40&amp;d=monsterid&amp;r=g">
                        </div>
                        加一个三级联动定位大概位置，再模糊搜索就更好了。&nbsp;
                    </a>
                </ul>
            </aside>
            <aside id="text-12" class="widget widget_text panel panel-specs visible-lg visible-md clearfix">
                <div class="panel-heading">
                    <h2>
                        广告
                    </h2>
                </div>
                <div class="textwidget">
                    <div>
                        <!--<script type="text/javascript">var cpro_id = "u1906183";<script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>-->
                        <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
                        </script>
                        <!-- 模版页-300宽 -->
                        <ins class="adsbygoogle" style="display: inline-block; width: 300px; height: 250px;"
                        data-ad-client="ca-pub-6074386496019881" data-ad-slot="8739581250" data-adsbygoogle-status="done">
                            <ins id="aswift_1_expand" style="display:inline-table;border:none;height:250px;margin:0;padding:0;position:relative;visibility:visible;width:300px;background-color:transparent;">
                                <ins id="aswift_1_anchor" style="display:block;border:none;height:250px;margin:0;padding:0;position:relative;visibility:visible;width:300px;background-color:transparent;">
                                    <iframe width="300" height="250" frameborder="0" marginwidth="0" marginheight="0"
                                    vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true"
                                    onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}"
                                    id="aswift_1" name="aswift_1" style="left:0;position:absolute;top:0;width:300px;height:250px;">
                                    </iframe>
                                </ins>
                            </ins>
                        </ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>
            </aside>
        </div>
    </aside>
    <!--底部-->
</section>
@include('layouts._left_item')
@stop
