<div class="function" id="Tblogpublished">
    <h3 class="function_t">排行榜</h3>
    <div class="function_c">
        <nav>
            <ul>
                @foreach($get_hot_article as $v)
                    <li>
                        <a href="article/{{$v->aid}}" class="picbox" rel="bookmark" onclick="read({{$v->aid}});">
                            <img src="/public/default/picture/201712151513320803698191.jpg" class="thumb" width="94" height="64" alt="{{$v->article_title}}" /></a>
                        <h4 class="title">
                            <a href="article/{{$v->aid}}" title="{{$v->article_title}}" onclick="read({{$v->aid}});">{{$v->article_title}}</a></h4>
                        <p class="postmeta">
                            <span class="time">{{date('Y-m-d',intval($v->publish_time))}}</span>
                            <span class="eye">阅读（<?php 
                                    $read_key = 'article_read_aid_'.$v->aid;
                                    echo \Cache::get($read_key) ?\Cache::get($read_key) :0;
                                    
                                    ?>）</span></p>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</div>