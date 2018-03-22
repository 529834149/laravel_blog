<div class="function" id="divCatalog">
                        <h3 class="function_t">网站分类</h3>
                        <div class="function_c">
                            <nav>
                                <ul>
                                    @foreach($menuAll as $k=>$v)
                                    <li class="li-cate">
                                        <a href="{{$v['url']}}" class="qianduan">
                                            <i class="iconfont icon-wenjian"></i> {{$v['title']}} 
                                            @if(!empty($v['children']))
                                            <i class="iconfont icon-add"></i>
                                            @endif
                                        </a>
                                        @if(!empty($v['children']))
                                        <ul class="ul-subcates">
                                            @foreach($v['children'] as $chil)
                                            <li class="li-subcate">
                                                <a href="{{$chil['url']}}">
                                                    <i class="iconfont icon-dot"></i> {{$chil['title']}}</a>
                                            </li>
                                             @endforeach
                                        </ul>
                                         @endif
                                    </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                    </div>