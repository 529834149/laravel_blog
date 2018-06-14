@extends('layouts.app')

@section('title',' 归档文档')

@section('content')
    <div style="margin-top: 50px;"></div>
    <section id="main" class="col-md-8">
    <article class="well clearfix page" id="post">
        <header class="entry-header">
            <h1 class="entry-title">
                归档文章
            </h1>
        </header>
        <div id="archives" class="page-content">
            @foreach($newArray as $k=>$v)
            <h2>
                {{$k}}年
            </h2>
            <div class="panel-group" role="tablist">
                @foreach($v as $k1=>$item)
                        <div class="panel panel-specs">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title" id="-collapsible-list-group-">
                                    <a class="collapsed month" data-toggle="collapse" href="#coll-{{$k}}-{{$k1}}"
                                    aria-expanded="1" aria-controls="coll-{{$k}}-{{$k1}}" data-original-title="" title="">
                                       {{$k1}}月 
                                    </a>
                                </h4>
                            </div>
                            <div id="coll-{{$k}}-{{$k1}}" class="panel-collapse collapse in">
                                <ul class="list-group list-archives">
                                    @foreach($item as $k2=>$v2)
                                    <li class="list-group-item">
                                         {{$v2['day']}}日:
                                        <a href="/article/{{$v2['aid']}}/details" title=""
                                        data-original-title="{{$v2['title']}}">
                                            {{msubstr($v2['title'],0,25)}}
                                        </a>
                                         <span class="badge fa fa-clock-o" style="color: #C4C4C4;background-color: #FFFFFF">
                                            {{$k}}-{{$k1}}-{{$v2['day']}}
                                        </span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                          
                        </div>
                    
                @endforeach
            </div>
            @endforeach
            <p style="text-indent:2em;text-align:left;">
                之前一直想搭建一个自己的博客网站，现在终于如梦所愿。最早的想法是自己搭建一个小视频网站，然后给群里的单身bog们（包括自己）一点福利。后来发现这是不现实的，因为本人没资源嘻嘻
                给自己开个小站主要还是以后在工作上或者学习上遇到什么困难，学会了哪些知识点，大牛们分享的文章，放到站点中分享给大家，并且相当于一个小型的记事本功能，如有侵犯到各位大牛们权益的地方还多多包含，联系本人，尊重原版，打击盗版。
<!--                2016-09 刚开始使用织梦搭建的个人小博客,本小站开通了，主要记录了本人在学习中遇到的困难，及解决方法，方法大部分来源于网络，在文章最后都给出了来源网址，如有侵犯各位权益的地方，请于本人联系。-->
            </p>
            <p style="text-indent:2em;text-align:left;">
            </p>
        </div>
        <footer class="entry-footer">
            <!--评论模块-->
        </footer>
    </article>
</section>
@include('layouts._left_item')
@stop
