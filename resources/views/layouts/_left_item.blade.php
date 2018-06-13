  <aside id="side-bar" class="col-md-4">
                        <div id="sidebar" class="affix-top">
                            <aside id="specs_widget_tags-6" class="widget widget_specs_widget_tags panel panel-specs visible-lg visible-md clearfix">
                                <div class="panel-heading">
                                    <h2>
                                        <i class="fa fa-tags">
                                        </i>
                                        标签云
                                    </h2>
                                </div>
                                <div class="tag_clouds">
                                    @foreach($date as $v)
                                    <a href="#" class="tag-link-332 tag-link-position-1"
                                    title="" style="font-size: 14px;" data-original-title=" {{$v['count']}}个话题">
                                        {{$v['tags_name']}}
                                    </a>
                                    @endforeach
<!--                                   <a href="#" class="tag-link-9 tag-link-position-2"
                                    title="" style="font-size: 14px;" data-original-title="36个话题">
                                        WordPress
                                    </a>
                                   <a href="#" class="tag-link-408 tag-link-position-3"
                                    title="" style="font-size: 14px;" data-original-title="34个话题">
                                        PHP
                                    </a>
                                   <a href="#" class="tag-link-446 tag-link-position-4"
                                    title="" style="font-size: 14px;" data-original-title="29个话题">
                                        Laravel 5.3
                                    </a>
                                   <a href="#" class="tag-link-452 tag-link-position-5"
                                    title="" style="font-size: 14px;" data-original-title="19个话题">
                                        中文文档
                                    </a>
                                   <a href="#" class="tag-link-116 tag-link-position-6"
                                    title="" style="font-size: 14px;" data-original-title="15个话题">
                                        Jquery
                                    </a>
                                   <a href="#" class="tag-link-34 tag-link-position-7"
                                    title="" style="font-size: 14px;" data-original-title="12个话题">
                                        dedecms
                                    </a>
                                    <a href="#" class="tag-link-27 tag-link-position-8"
                                    title="" style="font-size: 14px;" data-original-title="11个话题">
                                        css
                                    </a>
                                   <a href="#" class="tag-link-41 tag-link-position-9"
                                    title="" style="font-size: 14px;" data-original-title="11个话题">
                                        微信
                                    </a>
                                    <a href="#" class="tag-link-45 tag-link-position-10"
                                    title="" style="font-size: 14px;" data-original-title="11个话题">
                                        程序员
                                    </a>
                                   <a href="#" class="tag-link-155 tag-link-position-11"
                                    title="" style="font-size: 14px;" data-original-title="11个话题">
                                        Javascript
                                    </a>
                                    <a href="#" class="tag-link-25 tag-link-position-12"
                                    title="" style="font-size: 14px;" data-original-title="9个话题">
                                        html
                                    </a>
                                   <a href="#" class="tag-link-409 tag-link-position-13"
                                    title="" style="font-size: 14px;" data-original-title="9个话题">
                                        Linux
                                    </a>
                                    <a href="#" class="tag-link-351 tag-link-position-14"
                                    title="" style="font-size: 14px;" data-original-title="9个话题">
                                        模型
                                    </a>
                                    <a href="#" class="tag-link-14 tag-link-position-15"
                                    title="" style="font-size: 14px;" data-original-title="9个话题">
                                        dede
                                    </a>
                                   <a href="#" class="tag-link-142 tag-link-position-16"
                                    title="" style="font-size: 14px;" data-original-title="8个话题">
                                        Bootstrap
                                    </a>
                                    <a href="#" class="tag-link-201 tag-link-position-17"
                                    title="" style="font-size: 14px;" data-original-title="8个话题">
                                        9iphp
                                    </a>
                                   <a href="#" class="tag-link-339 tag-link-position-18"
                                    title="" style="font-size: 14px;" data-original-title="8个话题">
                                        视图
                                    </a>
                                    <a href="#" class="tag-link-438 tag-link-position-19"
                                    title="" style="font-size: 14px;" data-original-title="8个话题">
                                        事件
                                    </a>
                                    <a href="#" class="tag-link-87 tag-link-position-20"
                                    title="" style="font-size: 14px;" data-original-title="7个话题">
                                        织梦
                                    </a>-->
                                </div>
                            </aside>
                            <aside id="specs_recommend-6" class="widget widget_specs_recommend panel panel-specs visible-lg visible-md clearfix">
                                <div class="panel-heading">
                                    <h2>
                                        <i class="fa fa-share-alt">
                                        </i>
                                        微信公众号
                                    </h2>
                                </div>
                                <div class="textwidget">
                                    <img src="/public/home/picture/weixin_code.jpg">
                                </div>
                            </aside>
                            <aside id="text-10" class="widget widget_text panel panel-specs visible-lg visible-md clearfix">
                                <div class="panel-heading">
                                    <h2>
                                        广告
                                    </h2>
                                </div>
                                <div class="textwidget">
                                    <div>
 
                                    </div>
                                </div>
                            </aside>
                            <aside id="specs_widget_recent_comments-13" class="widget widget_specs_widget_recent_comments panel panel-specs visible-lg visible-md clearfix">
                                <div class="panel-heading">
                                    <h2>
                                        <i class="fa fa-comments-o">
                                        </i>
                                        最新文章
                                    </h2>
                                </div>
                             
                                <ul class="list-group">
                                    @foreach($get_hot_article as $v)
                                    <a class="list-group-item clearfix comment_list" href="#"
                                    title="" data-original-title="{{$v->article_title}}">
                                        <div class="comment-avatar" data-url="https://secure.gravatar.com/avatar/db379dc772f649c5b8a4a2686aee8b41?s=40&amp;d=monsterid&amp;r=g">
                                        </div>
                                       {{$v->article_title}}
                                    </a>
                                    @endforeach
                                </ul>
                            </aside>
                            <aside id="text-11" class="widget widget_text panel panel-specs visible-lg visible-md clearfix">
                                <div class="panel-heading">
                                    <h2>
                                        广告
                                    </h2>
                                </div>
                                <div class="textwidget">
                                    <div>
                                        <!--<script type="text/javascript">var cpro_id = "u1906183";<script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>-->
                                        <!--<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">-->
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