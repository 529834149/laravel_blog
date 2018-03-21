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
                    <a href="http://www.mrszhao.com/">首页</a>>杂谈</h4>
                <section>
                    <div class="post multi">
                        <header>
                            <h4 class="post-category">
                                <a href="http://www.mrszhao.com/category-9.html" target="_blank">杂谈</a></h4>
                            <h2 class="post-title">
                                <a href="http://www.mrszhao.com/post/130.html" target="_blank">网站第二版改版完成，快来找茬啦！</a></h2>
                        </header>
                        <div class="post-body clearfix">
                            <div class="post-intro1">我的这个博客是当时给西华师大做一个短训的时候建立的，培训只有十来天，所以没有时间自己设计制作模板，就用了一个别人的主题，然后修改了一下，就匆匆上线了。一晃，第一版就用了一年多，截图留念一下。看久了就有点厌烦，想着什么时候自己设计制作一个，这样就不用在底部加上别人网站的链接啦。趁着今年又有机会给一个班...</div>
                            <small class="post-footer fr">
                                <span>
                                    <i class="iconfont icon-shijian"></i>2017年08月31日</span>
                                <span>
                                    <i class="iconfont icon-eye2"></i>472</span>
                            </small>
                        </div>
                    </div>
                </section>
                <div class="pagebar">
                    <a href="http://www.mrszhao.com/category-9.html">
                        <span class="page">‹‹</span></a>
                    <span class="page now-page">1</span>
                    <a href="http://www.mrszhao.com/category-9.html">
                        <span class="page">››</span></a>
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
                    @include('layouts._category')
                    <div class="function" id="Tblogpublished">
                        <h3 class="function_t">设计类文章</h3>
                        <div class="function_c">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="http://www.mrszhao.com/post/141.html" class="picbox" rel="bookmark">
                                            <img src="/public/default/picture/201712151513320803698191.jpg" class="thumb" width="94" height="64" alt="网页设计中是如何计算网格系统的？" /></a>
                                        <h4 class="title">
                                            <a href="http://www.mrszhao.com/post/141.html" title="网页设计中是如何计算网格系统的？">网页设计中是如何计算网格系统的？</a></h4>
                                        <p class="postmeta">
                                            <span class="time">2017-12-15</span>
                                            <span class="eye">阅读（443）</span></p>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/post/156.html" class="picbox" rel="bookmark">
                                            <img src="/public/default/picture/201712181513585918126628.jpg" class="thumb" width="94" height="64" alt="为什么看了无数教程，还是抠不好长头发丝，关键步骤没告诉你！" /></a>
                                        <h4 class="title">
                                            <a href="http://www.mrszhao.com/post/156.html" title="为什么看了无数教程，还是抠不好长头发丝，关键步骤没告诉你！">为什么看了无数教程，还是抠不好长头发丝，关键步骤没告诉你！</a></h4>
                                        <p class="postmeta">
                                            <span class="time">2017-12-18</span>
                                            <span class="eye">阅读（363）</span></p>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="function" id="divTags">
                        <h3 class="function_t">标签列表</h3>
                        <div class="function_c">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-1.html">html
                                            <span class="tag-count">(8)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-2.html">css
                                            <span class="tag-count">(2)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-4.html">css3
                                            <span class="tag-count">(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-7.html">项目实训
                                            <span class="tag-count">(5)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-8.html">西华师范大学
                                            <span class="tag-count">(5)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-9.html">网站开发
                                            <span class="tag-count">(5)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-10.html">zblog建站
                                            <span class="tag-count">(21)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-12.html">网站前端
                                            <span class="tag-count">(2)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-17.html">DW
                                            <span class="tag-count">(2)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-20.html">教程
                                            <span class="tag-count">(15)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-31.html">text-shadow
                                            <span class="tag-count">(2)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-33.html">下拉菜单
                                            <span class="tag-count">(3)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-34.html">box-shadow
                                            <span class="tag-count">(4)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-37.html">border
                                            <span class="tag-count">(3)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-59.html">相对定位
                                            <span class="tag-count">(5)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-60.html">绝对定位
                                            <span class="tag-count">(5)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-69.html">border-radius
                                            <span class="tag-count">(3)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-71.html">linear-gradient
                                            <span class="tag-count">(4)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-82.html">UI直播课程
                                            <span class="tag-count">(9)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-97.html">jquery插件
                                            <span class="tag-count">(9)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-100.html">作品展
                                            <span class="tag-count">(3)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-102.html">css2教程
                                            <span class="tag-count">(18)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-108.html">CSS3案例集
                                            <span class="tag-count">(15)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-118.html">animation
                                            <span class="tag-count">(5)</span></a>
                                    </li>
                                    <li>
                                        <a href="http://www.mrszhao.com/tags-137.html">书籍
                                            <span class="tag-count">(4)</span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="function" id="Tblogpublished">
                        <h3 class="function_t">案例集精选</h3>
                        <div class="function_c"></div>
                    </div>
                </div>
            </aside>
        </div>

@endsection