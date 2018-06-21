@extends('layouts.app')

@section('title',' 关于')

@section('content')
    <section id="main" class="col-md-8">
        <article class="well clearfix page" id="post">
            <header class="entry-header">
                <h1 class="entry-title">
                    关于
                </h1>
            </header>
            <div class="page-content">
                <p>
                    <img class="size-full wp-image-954 aligncenter" src="/public/home/picture/wold.jpg"
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
                        技能：Lnmp、Lamp、Html/Css、NodeJs、Mongodb、Github、GitLab、Svn、Jquery/Js/Ajax、Api接口开发等
                    </li>
                    <li>
                        技能熟悉程序：熟练+良好
                    </li>
                     <li>
                        工作经验：目前就任于（<a href="http://www.blogchina.com/">博客中国</a>负责网站开发及项目维护工作）
                    </li>
                </ul>
                <h6>
                    联系博主
                </h6>
                <p>
                    有事联系，请加入我们的QQ群：
                    <a title="" href="http://shang.qq.com/wpa/qunwpa?idkey=45b8d6d006051cb357cbdcc173f763879fc08a0fe2f358c09e6d1485416af6ea"
                    target="_blank" data-original-title="Specs'&nbsp;Blog&nbsp;技术交流进阶群">
                        643890530
                    </a>
                    或发送邮件到：chen2018php@163.com
                </p>
                <h6>
                    微信号
                </h6>
                <p>
                    <a href="/public/home/picture/weixin_code.jpg"
                    data-original-title="" title="" class="phzoom">
                        <img class="aligncenter size-full wp-image-1580" src="/public/home/picture/weixin_code.jpg"
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
                    
                </p>
                <h6>
                    关于本博
                </h6>
                <p>
                    本人记性不好，建立本博只为记录学习中遇到的问题及解决办法，方便以后查询。主要涉及到LAMP、HTML5、DIV+CSS、jQuery、DedeCMS、Wordpress、PHP、Mysql及微信公众号开发等方面
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
                        <a href="http://www.iconfont.cn/collections/detail?cid=29" target="_blank" data-original-title=""
                        title="">
                            阿里iconfont 字体图标
                        </a>
                        ，目前有 500 多个图标可供选择
                    </li>
                </ol>
                <h6>
                    博客历程
                </h6>
                <ul>
                    <li>
                        2017-09-1：购买域名www.bodys.top，网站采用环境lnmp搭建配置
                        <a href="https://www.aliyun.com/product/ecs?spm=5176.8142029.388261.274.a7236d3e2kdFWU" target="_blank" data-original-title=""
                        title="">
                            阿里ECM服务器
                        </a>
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
    @include('layouts._left_item')
    <!--底部-->
</section>

@stop
