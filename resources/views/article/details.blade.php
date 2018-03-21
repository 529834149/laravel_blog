@extends('layouts.app')
@section('carousel')

@endsection
@section('content')

<!--详情页-->
<div class="divMiddle mt90 clearfix">
            <header class="single-title-wrap">
                <div class="post-single-title w1200">
                    <h4 class="cata-nav">
                        <a href="http://www.mrszhao.com/">首页</a>>
                        <a href="http://www.mrszhao.com/category-12.html">前端教程</a>>
                        <a href="http://www.mrszhao.com/category-2.html">CSS教程</a></h4>
                    <h1 class="post-title">CSS3第四课：伪元素选择器，::before和::after就是左膀右臂！</h1>
                    <small class="post-footer">
                        <span>
                            <i class="iconfont icon-schedule"></i>2018年02月09日</span>
                        <span>
                            <i class="iconfont icon-eye2"></i>405</span>
                    </small>
                </div>
            </header>
            <div class="post single w1200">
                <div class="divMain">
                    <main>
                        <div class="post-body">
                            <p>讲完了伪类选择器，还有一个兄弟叫伪元素的选择器也把它搞定吧。
                                <br/></p>
                            <p>它们都有一个伪字，说明都是不存在的，但是它们也有区别：伪类是一种状态，伪对象是不真正存在于HTML文档中的标签对象，但是它是以html对象的方式虚拟出现，并且可以通过css控制的对象。</p>
                            <p>在最新的CSS3标准中，把伪对象的格式改成了双冒号，即::before，::after，是为了和伪类分开。早期的浏览器，比如IE8，只支持单冒号的伪对象。如果为了往下兼容，可以使用单冒号伪对象，如果只兼容IE9以上的现代浏览器，可以使用双冒号伪对象。
                                <br/></p>
                            <h2>一、伪对象选择器</h2>
                            <table>
                                <tbody>
                                    <tr class="firstRow">
                                        <td width="302" valign="top" style="word-break: break-all;">选择器</td>
                                        <td width="302" valign="top" style="word-break: break-all;">描述</td>
                                        <td width="302" valign="top" style="word-break: break-all;">版本</td></tr>
                                    <tr>
                                        <td width="302" valign="top" style="word-break: break-all;">:first-letter</td>
                                        <td width="302" valign="top" style="word-break: break-all;">向文本的第一个字母（英文或中文）添加样式</td>
                                        <td width="302" valign="top" style="word-break: break-all;">CSS1</td></tr>
                                    <tr>
                                        <td width="302" valign="top" style="word-break: break-all;">:first-line</td>
                                        <td width="302" valign="top" style="word-break: break-all;">向文本的首行添加样式，&nbsp;只能与块级元素关联</td>
                                        <td width="302" valign="top" style="word-break: break-all;">CSS1
                                            <br/></td></tr>
                                    <tr>
                                        <td width="302" valign="top" style="word-break: break-all;">:before</td>
                                        <td width="302" valign="top" style="word-break: break-all;">在元素内部所有子元素之前添加内容</td>
                                        <td width="302" valign="top" style="word-break: break-all;">CSS2</td></tr>
                                    <tr>
                                        <td width="302" valign="top" style="word-break: break-all;">:after</td>
                                        <td width="302" valign="top" style="word-break: break-all;">在元素内部所有子元素之后添加内容</td>
                                        <td width="302" valign="top" style="word-break: break-all;">CSS2</td></tr>
                                    <tr>
                                        <td width="302" valign="top" style="word-break: break-all;">::selection</td>
                                        <td width="302" valign="top" style="word-break: break-all;">选择被用户选取的元素部分。</td>
                                        <td width="302" valign="top" style="word-break: break-all;">CSS3</td></tr>
                                </tbody>
                            </table>
                            <p>关于:first-letter的应用，主要是用在首行首字上面，在上一课伪类选择器里面已有案例，这里就不多讲。
                                <br/></p>
                            <p>:first-line貌似真的很少用啊，只能用在块级文本对象上，比如p段落。</p>
                            <p>用的最多的，能够产生无穷想象力的就是:before和:after两个对象了，所以我说它们就是元素的左膀右臂，很多奇思妙想的效果都可以结合它们实现，而且还支持CSS3动画等。</p>
                            <p>当然用的最多的还是用来清除浮动造成的父元素高度塌陷的情况，实现父元素的高度自适应。</p>
                            <pre class="prism-highlight prism-language-css">.clearfix::after{ &nbsp;&nbsp;&nbsp;&nbsp;content:&quot;&quot;; &nbsp;&nbsp;&nbsp;&nbsp;display:block; &nbsp;&nbsp;&nbsp;&nbsp;clear:both;}</pre>
                            <h2>二、使用技巧</h2>
                            <p>:before/:after使用的时候必须有一个content属性才能起效。</p>
                            <p>比如：</p>
                            <pre class="prism-highlight prism-language-css">li:after{ &nbsp;&nbsp;&nbsp;&nbsp;content:&quot;new&quot;;&nbsp;/*必须要有的一个属性，表示产生一个内容对象，后面的样式都是为这个虚拟出来的对象设置的，而不是为li设置的。*/ &nbsp;&nbsp;&nbsp;&nbsp;color:#F60; &nbsp;&nbsp;&nbsp;&nbsp;font-size:0.875rem; }</pre>
                            <p>最后产生的这个after伪对象出现在&lt;li&gt;....:after&lt;/li&gt;，li的内部所有子元素的最后。</p>
                            <p>这里的content主要可以包含的内容有：</p>
                            <p>1、文本或者其他字符串。</p>
                            <p>2、图片，但是图片是原始尺寸，不太好控制，比如：content:url(images/1.jpg)。</p>
                            <p>3、当然可以为空。content:&quot;&quot;，产生一个空对象，特别适合设置为一个position:absolute的对象，然后就可以结合背景或者定位实现丰富的效果了。这是主流用法。</p>
                            <h2>三、典型案例参考</h2>
                            <p>1、增加装饰性，比如三角形，阴影等，这些都是具有装饰性的用法。
                                <br/></p>
                            <p data-height="372" data-theme-id="0" data-slug-hash="JpExde" data-default-tab="result" data-user="mrszhao" data-embed-version="2" data-pen-title="伪对象装饰性三角形" class="codepen">See the Pen
                                <a href="http://www.mrszhao.com/?urldecode=aHR0cHM6Ly9jb2RlcGVuLmlvL21yc3poYW8vcGVuL0pwRXhkZS8=">伪对象装饰性三角形</a>by zhaolanzhen (
                                <a href="http://www.mrszhao.com/?urldecode=aHR0cHM6Ly9jb2RlcGVuLmlvL21yc3poYW8=">@mrszhao</a>) on
                                <a href="http://www.mrszhao.com/?urldecode=aHR0cHM6Ly9jb2RlcGVuLmlv">CodePen</a>.</p>
                            <script async="" src="js/ei.js"></script>
                            <p>2、为图片增加装饰性效果。主要都是利用定位和背景的方式去完成，可以是背景颜色，图片，渐变等。</p>
                            <p data-height="390" data-theme-id="0" data-slug-hash="ddNLOe" data-default-tab="result" data-user="mrszhao" data-embed-version="2" data-pen-title="伪元素对图片的装饰" class="codepen">See the Pen
                                <a href="http://www.mrszhao.com/?urldecode=aHR0cHM6Ly9jb2RlcGVuLmlvL21yc3poYW8vcGVuL2RkTkxPZS8=">伪元素对图片的装饰</a>by zhaolanzhen (
                                <a href="http://www.mrszhao.com/?urldecode=aHR0cHM6Ly9jb2RlcGVuLmlvL21yc3poYW8=">@mrszhao</a>) on
                                <a href="http://www.mrszhao.com/?urldecode=aHR0cHM6Ly9jb2RlcGVuLmlv">CodePen</a>.</p>
                            <script async="" src="js/ei.js"></script>
                            <p>马上放假回家过年啦，估计要停更一下了。</p>
                            <p>狗年大吉，新的一年一定有更美好的事情发生！</p>
                        </div>
                    </main>
                    <div class="dianzan sf-praise-sdk" sfa='click' data-postid='110' data-value="1" data-ok='zijiqugemingzi'>
                        <span>
                            <i class="iconfont icon-dianzan"></i>
                        </span>
                        <br />（
                        <span class="sf-praise-sdk" sfa='num' data-value='1' data-postid='110'>16</span>）</div>
                    <div class="post-share">
                        <i class="iconfont icon-fenxiang"></i>保存到：
                        百度分享代码开始
                        <div class="bdsharebuttonbox">
                            <a href="#" class="bds_more" data-cmd="more"></a>
                            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                            <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                            <a href="#" class="bds_huaban" data-cmd="huaban" title="分享到花瓣"></a>
                            <a href="#" class="bds_youdao" data-cmd="youdao" title="分享到有道云笔记"></a>
                            <a href="#" class="bds_evernotecn" data-cmd="evernotecn" title="分享到印象笔记"></a>
                        </div>
                        <script>window._bd_share_config = {
                                "common": {
                                    "bdSnsKey": {},
                                    "bdText": "",
                                    "bdMini": "2",
                                    "bdMiniList": false,
                                    "bdPic": "",
                                    "bdStyle": "1",
                                    "bdSize": "24"
                                },
                                "share": {}
                            };
                            with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];</script>
                        百度分享代码结束</div>
                    <div class="post-tags-wrap">
                        <p>继续阅读与本文标签相同的文章</p>
                        <h5 class="post-tags">
                            <i class="iconfont icon-label_fill"></i>标签:
                            <a href="http://www.mrszhao.com/tags-4.html">css3</a>
                            <a href="http://www.mrszhao.com/tags-146.html">伪对象选择器</a></h5>
                    </div>
                    <div class="post-related">
                        <h3>相关文章</h3>
                        <nav>
                            <ul>
                                <li>
                                    <span class="title">
                                        <a href="http://www.mrszhao.com/post/109.html" title="CSS3第三课：伪类选择器，为什么有一个伪字？">CSS3第三课：伪类选择器，为什么有一个伪字？</a></span>
                                    <span class="time">02-08</span></li>
                                <li>
                                    <span class="title">
                                        <a href="http://www.mrszhao.com/post/59.html" title="CSS3教程：background-image之放射性渐变（radial-gradient）详解">CSS3教程：background-image之放射性渐变（radial-gradient）详解</a></span>
                                    <span class="time">08-05</span></li>
                                <li>
                                    <span class="title">
                                        <a href="http://www.mrszhao.com/post/58.html" title="CSS3教程：background-image之线性渐变（linear-gradient）最in版！">CSS3教程：background-image之线性渐变（linear-gradient）最in版！</a></span>
                                    <span class="time">08-02</span></li>
                                <li>
                                    <span class="title">
                                        <a href="http://www.mrszhao.com/post/57.html" title="CSS3教程：border-radius你以为就是个圆角边框吗？">CSS3教程：border-radius你以为就是个圆角边框吗？</a></span>
                                    <span class="time">08-01</span></li>
                                <li>
                                    <span class="title">
                                        <a href="http://www.mrszhao.com/post/56.html" title="CSS3教程：box-shadow盒阴影详解">CSS3教程：box-shadow盒阴影详解</a></span>
                                    <span class="time">07-28</span></li>
                                <li>
                                    <span class="title">
                                        <a href="http://www.mrszhao.com/post/51.html" title="CSS3教程：text-shadow文字阴影详解">CSS3教程：text-shadow文字阴影详解</a></span>
                                    <span class="time">07-09</span></li>
                                <li>
                                    <span class="title">
                                        <a href="http://www.mrszhao.com/post/31.html" title="CSS3教程：利用border的transparent特性完成面包屑导航">CSS3教程：利用border的transparent特性完成面包屑导航</a></span>
                                    <span class="time">05-26</span></li>
                                <li>
                                    <span class="title">
                                        <a href="http://www.mrszhao.com/post/28.html" title="CSS3教程：box-shadow完成盒阴影效果">CSS3教程：box-shadow完成盒阴影效果</a></span>
                                    <span class="time">05-20</span></li>
                                <li>
                                    <span class="title">
                                        <a href="http://www.mrszhao.com/post/26.html" title="CSS3教程：text-shadow制作文字阴影效果">CSS3教程：text-shadow制作文字阴影效果</a></span>
                                    <span class="time">05-18</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <aside class="post-single-aside">
                    <div class="divSidebar">
                        <div class="function" id="aboutmrszhao">
                            <h3 style="display:none;"></h3>
                            <div class="function_c">
                                <div class="mrszhaologo">
                                    <a href="http://www.mrszhao.com/aboutme.html" target="_blank">
                                        <span>web前端开发赵老师个人头像</span></a>
                                </div>
                                <h3>
                                    <a href="http://www.mrszhao.com/aboutme.html" target="_blank">web前端赵老师</a></h3>
                                <div class="contact">
                                    <span class="city">
                                        <i class="iconfont icon-location"></i>成都</span>
                                    <span class="mywx">
                                        <i class="iconfont icon-yingdaicon04"></i>
                                        <img src="picture/wx.png" alt="赵老师的个人微信" class="zlzwx" /></span>
                                    <span class="mrszhaoqq">
                                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=85169306&site=qq&menu=yes" title="点击QQ给我留言">
                                            <i class="iconfont icon-iconfont"></i>
                                        </a>
                                    </span>
                                </div>
                                <p>高中的时候梦想过成为一名作家，大学的时候梦想当动画导演，现在是一名偏设计的前端老师，梦想艺术与技术的结合。</p>
                            </div>
                        </div>
                        <div class="function" id="divSearchPanel">
                            <h3 class="function_t">站内搜索</h3>
                            <div class="function_c">
                                <form name="search" method="post" action="http://www.mrszhao.com/zb_system/cmd.php?act=search">
                                    <input type="text" name="q" size="11" placeholder="一定要学会用我！" />
                                    <input type="submit" value="搜索" /></form>
                            </div>
                        </div>
                        <div class="function" id="divPrevious">
                            <h3 class="function_t">CSS相关文章</h3>
                            <div class="function_c">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="http://www.mrszhao.com/post/110.html" class="picbox" rel="bookmark">
                                                <img src="picture/22.jpg" class="thumb" width="94" height="64" alt="CSS3第四课：伪元素选择器，::before和::after就是左膀右臂！" /></a>
                                            <h4 class="title">
                                                <a href="http://www.mrszhao.com/post/110.html" title="CSS3第四课：伪元素选择器，::before和::after就是左膀右臂！">CSS3第四课：伪元素选择器，::before和::after就是左膀右臂！</a></h4>
                                            <p class="postmeta">
                                                <span class="time">2018-02-09</span>
                                                <span class="eye">阅读（404）</span></p>
                                        </li>
                                        <li>
                                            <a href="http://www.mrszhao.com/post/109.html" class="picbox" rel="bookmark">
                                                <img src="picture/12.jpg" class="thumb" width="94" height="64" alt="CSS3第三课：伪类选择器，为什么有一个伪字？" /></a>
                                            <h4 class="title">
                                                <a href="http://www.mrszhao.com/post/109.html" title="CSS3第三课：伪类选择器，为什么有一个伪字？">CSS3第三课：伪类选择器，为什么有一个伪字？</a></h4>
                                            <p class="postmeta">
                                                <span class="time">2018-02-08</span>
                                                <span class="eye">阅读（261）</span></p>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="function" id="Tblogpublished">
                            <h3 class="function_t">猜你喜欢</h3>
                            <div class="function_c">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="http://www.mrszhao.com/post/153.html" class="picbox" rel="bookmark">
                                                <img src="picture/201712151513301019795496.jpg" class="thumb" width="94" height="64" alt="JavaScriptDOM编程艺术" /></a>
                                            <h4 class="title">
                                                <a href="http://www.mrszhao.com/post/153.html" title="JavaScriptDOM编程艺术">JavaScriptDOM编程艺术</a></h4>
                                            <p class="postmeta">
                                                <span class="time">2017-12-15</span>
                                                <span class="eye">阅读（193）</span></p>
                                        </li>
                                        <li>
                                            <a href="http://www.mrszhao.com/post/110.html" class="picbox" rel="bookmark">
                                                <img src="picture/11.jpg" class="thumb" width="94" height="64" alt="CSS3第四课：伪元素选择器，::before和::after就是左膀右臂！" /></a>
                                            <h4 class="title">
                                                <a href="http://www.mrszhao.com/post/110.html" title="CSS3第四课：伪元素选择器，::before和::after就是左膀右臂！">CSS3第四课：伪元素选择器，::before和::after就是左膀右臂！</a></h4>
                                            <p class="postmeta">
                                                <span class="time">2018-02-09</span>
                                                <span class="eye">阅读（404）</span></p>
                                        </li>
                                        <li>
                                            <a href="http://www.mrszhao.com/post/154.html" class="picbox" rel="bookmark">
                                                <img src="picture/201712151513318188585853.jpg" class="thumb" width="94" height="64" alt="css权威指南" /></a>
                                            <h4 class="title">
                                                <a href="http://www.mrszhao.com/post/154.html" title="css权威指南">css权威指南</a></h4>
                                            <p class="postmeta">
                                                <span class="time">2017-12-15</span>
                                                <span class="eye">阅读（222）</span></p>
                                        </li>
                                        <li>
                                            <a href="http://www.mrszhao.com/post/169.html" class="picbox" rel="bookmark">
                                                <img src="picture/201802071517993889136629.png" class="thumb" width="94" height="64" alt="如何把codepen上面的代码嵌入个人网站中？" /></a>
                                            <h4 class="title">
                                                <a href="http://www.mrszhao.com/post/169.html" title="如何把codepen上面的代码嵌入个人网站中？">如何把codepen上面的代码嵌入个人网站中？</a></h4>
                                            <p class="postmeta">
                                                <span class="time">2018-02-07</span>
                                                <span class="eye">阅读（207）</span></p>
                                        </li>
                                        <li>
                                            <a href="http://www.mrszhao.com/post/156.html" class="picbox" rel="bookmark">
                                                <img src="picture/201712181513585918126628.jpg" class="thumb" width="94" height="64" alt="为什么看了无数教程，还是抠不好长头发丝，关键步骤没告诉你！" /></a>
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
                    </div>
                </aside>
            </div>
            <div class="comment-all-wrap">
                 Changyan Comment JS 
                <div id="SOHUCS" sid="110"></div>
                <script charset="utf-8" type="text/javascript" src="js/changyan.js"></script>
                <script type="text/javascript">window.changyan.api.config({
                        appid: 'cyt8dVwaj',
                        conf: 'prod_78b0c0acb16d0dcad356f7f8e24f0b84'
                    });</script>
            </div>
        </div>
        </div>
@endsection