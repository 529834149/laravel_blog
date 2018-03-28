<header class="header-wrap cd-auto-hide-header">
    <div class="divTop w1200 clearfix">
        <div class="logo fl">
            <h1 class="BlogTitle">
                <a href="">
                    <span>
                        PHPer-陈宝金博客
                    </span>
                </a>
            </h1>
            <h3 class="BlogSubTitle">
                技术博客
            </h3>
        </div>
        <nav class="fr">
            <div class="divNavBar">
                <ul class="clearfix">
                    <li id="nvabar-item-index">
                        <a href="/category">
                            首页
                        </a>
                    </li>
                    @foreach($menuAll as $k=>$v)
                    <li id="navbar-category-{{$k+1}}">
                        <a href="{{$v['url']}}">
                            {{$v['title']}} 
                            @if(!empty($v['children']))
                             <i class="iconfont icon-add1"></i>
                            @endif
                        </a>
                       
                        @if(!empty($v['children']))
                        <ul>
                            @foreach($v['children'] as $chil)
                            <li id="navbar-category-15">
                                <a href="{{$chil['url']}}">
                                    {{$chil['title']}}
                                </a>
                            </li>
                            @endforeach
                           
                        </ul>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="baidusearch">
                <script type="text/javascript">
                    (function() {
                        document.write(unescape('%3Cdiv id="bdcs"%3E%3C/div%3E'));
                        var bdcs = document.createElement('script');
                        bdcs.type = 'text/javascript';
                        bdcs.async = true;
                        bdcs.src = 'http://znsv.baidu.com/customer_search/api/js?sid=7615059306179460688' + '&plate_url=' + encodeURIComponent(window.location.href) + '&t=' + Math.ceil(new Date() / 3600000);
                        var s = document.getElementsByTagName('script')[0];
                        s.parentNode.insertBefore(bdcs, s);
                    })();
                </script>
            </div>
            <div class="mobile-menu">
                <span>
                    导航菜单
                </span>
            </div>
            <div class="mobile-divNavBar">
                <ul>
                    <li id="nvabar-item-index">
                        <a href="/category">
                            首页
                        </a>
                    </li>
                    @foreach($menuAll as $k=>$v)
                    <li id="navbar-category-{{$k+1}}">
                        <a href="{{$v['url']}}">
                            {{$v['title']}} 
                            @if(!empty($v['children']))
                            @endif
                        </a>
                       
                        @if(!empty($v['children']))
                        <ul>
                            @foreach($v['children'] as $chil)
                            <li id="navbar-category-15">
                                <a href="{{$chil['url']}}">
                                    {{$chil['title']}}
                                </a>
                            </li>
                            @endforeach
                           
                        </ul>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
</header>