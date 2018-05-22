<div class="function" id="Tblogpublished" >
    <h3 class="function_t">最新发表文章</h3>
    <div class="function_c">
        <nav>
            <ul style="color:#FFFFFF;background-color: "  >
                @foreach($get_hot_article as $k=>$v)
                    <li class="list-group-item" style="padding-bottom:5px;border-bottom: 2px solid #F2F2F2;">
                        <a href="article/{{$v->aid }}" rel="bookmark" title=" {{$v['article_title']}}" style="overflow: hidden;text-overflow: ellipsis;white-space: nowrap; width:150px;">
                            @if($k == 0)
                            <span class='c-index  c-index-hot1 c-gap-icon-right-small' style="display: inline-block;padding:1px 0;color:#FFFFFF;width:14px;line-height:100%;font-size:12px;text-align:center;background-color: red;">{{$k+1}}</span>&nbsp;&nbsp;&nbsp;&nbsp;{{$v['article_title']}}
                            @elseif($k ==1)
                            <span class='c-index  c-index-hot1 c-gap-icon-right-small' style="display: inline-block;padding:1px 0;color:#FFFFFF;width:14px;line-height:100%;font-size:12px;text-align:center;background-color: #FF8547;">{{$k+1}}</span>&nbsp;&nbsp;&nbsp;&nbsp;{{$v['article_title']}}
                             @elseif($k ==2)
                            <span class='c-index  c-index-hot1 c-gap-icon-right-small' style="display: inline-block;padding:1px 0;color:#FFFFFF;width:14px;line-height:100%;font-size:12px;text-align:center;background-color: #FFAC38;">{{$k+1}}</span>&nbsp;&nbsp;&nbsp;&nbsp;{{$v['article_title']}}
                            @else
                            <span class='c-index  c-index-hot1 c-gap-icon-right-small' style="display: inline-block;padding:1px 0;color:#FFFFFF;width:14px;line-height:100%;font-size:12px;text-align:center;background-color: #8eb9f5;">{{$k+1}}</span>&nbsp;&nbsp;&nbsp;&nbsp;{{$v['article_title']}}
                            @endif
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</div>
