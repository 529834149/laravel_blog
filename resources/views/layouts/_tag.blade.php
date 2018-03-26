 <div class="function" id="divTags">
    <h3 class="function_t">标签列表</h3>
    <div class="function_c">
        <nav>
            <ul>
                @foreach($tag as $v)
                
                <li>
                    @if($v->count)
                    <a href="/article/tag/{{$v->tid}}">{{$v->name}}
                        <span class="tag-count">({{$v->count}})</span>
                    </a>
                    @else
                    <a href="javascript:void(0)">{{$v->name}}
                        <span class="tag-count">({{$v->count}})</span>
                    </a>
                    @endif
                </li>
               @endforeach 
            </ul>
        </nav>
    </div>
</div>