<header class="header-transparent header-transparent-bb navbar-fixed-top header-sticky">
<!-- 导航分类 -->
<nav class="navbar mega-menu" role="navigation">
    <div class="container">
        <div class="menu-container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="toggle-icon"></span>
            </button>
            <div class="navbar-actions">
                <div class="navbar-actions-shrink search-fullscreen search-fullscreen-trigger-white">
                    <div class="search-fullscreen-trigger">
                        <i class="search-fullscreen-trigger-icon fa fa-search"></i>
                    </div>
                    <div class="search-fullscreen-overlay">
                        <form action="http://blog.iwanli.me/search" method="post">
                            <input type="hidden" name="_token" value="WRAEOgj6LBnDYSALDTEITdIiSijtwIgc9KXhRPYd">
                            <div class="search-fullscreen-overlay-content">
                                <div class="search-fullscreen-input-group">
                                    <input type="text" class="form-control search-fullscreen-input" name="q" placeholder="Search for ...">
                                    <button class="search-fullscreen-search" type="submit"><i class="search-fullscreen-search-icon fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="search-fullscreen-bg-overlay">
                        <div class="search-fullscreen-close">×</div>
                    </div>
                </div>
            </div>

            <div class="navbar-logo">
                <a class="navbar-logo-wrap" href="/">
                    <img class="navbar-logo-img navbar-logo-img-white" src="/public/default/picture/logo-white.png" alt="晚黎">
                    <img class="navbar-logo-img navbar-logo-img-dark" src="/public/default/picture/logo-dark.png" alt="晚黎">
                </a>
            </div>
        </div>

        <div class="collapse navbar-collapse nav-collapse">
            <div class="menu-container">
                <ul class="nav navbar-nav">
                @foreach ($navList as $n)
                       <!--<li class="lis  {{$n->name}} "><a href="/{{$n->url}}/{{$n->cate_id}}">{{$n->name}}</a></li>-->
                    <li class="nav-item">
                        <a class="nav-item-child radius-3" target="_blank" href="{{$n->url}}">
                            <i class="fa fa-home"></i> {{$n->title}}
                        </a>
                    </li>  
                @endforeach
                    <li class="nav-item">
                        <a class="nav-item-child radius-3" target="_blank" href="">
                            <i class="fa fa-home"></i> 文章抓取
                        </a>
                    </li>  
<!--                <li class="nav-item">
                    <a class="nav-item-child radius-3" target="_blank" href="http://blog.iwanli.me">
                        <i class="fa fa-home"></i> Home
                    </a>
                </li>                    <li class="nav-item dropdown">
                    <a class="nav-item-child dropdown-toggle radius-3" href="javascript:void(0);" data-toggle="dropdown">
                        <i class="fa fa-diamond"></i> PHP
                    </a>
                    <ul class="dropdown-menu">            <li class="dropdown-menu-item"><a class="dropdown-menu-item-child"  href="http://blog.iwanli.me/category/KpAVO3xg.html">Laravel</a></li>            <li class="dropdown-menu-item"><a class="dropdown-menu-item-child"  href="http://blog.iwanli.me/category/B19QWAlk.html">Mysql</a></li></ul>
                </li>                    <li class="nav-item">
                    <a class="nav-item-child radius-3"  href="http://blog.iwanli.me/category/gvAzQNlb.html">
                        JavaScript
                    </a>
                </li>                    <li class="nav-item">
                    <a class="nav-item-child radius-3"  href="http://blog.iwanli.me/category/EP3B0Nlb.html">
                        Python
                    </a>
                </li>                    <li class="nav-item">
                    <a class="nav-item-child radius-3"  href="http://blog.iwanli.me/category/JeNXJ3Vj.html">
                        随笔
                    </a>
                </li>                    <li class="nav-item">
                    <a class="nav-item-child radius-3" target="_blank" href="https://github.com/lanceWan">
                        <i class="fa fa-github"></i> Github
                    </a>
                </li>                    <li class="nav-item">
                    <a class="nav-item-child radius-3" target="_blank" href="http://coding.iwanli.me">
                        <i class="fa fa-free-code-camp"></i> Laravel学院
                    </a>
                </li>-->
                </ul>
            </div>
        </div>
    </div>
</nav>
</header>
<section class="breadcrumbs-v5">
<div class="container">
    <h2 class="breadcrumbs-v5-title">@yield('titles','I am ChenBaoJin')</h2>
    <span class="breadcrumbs-v5-subtitle">@yield('desc','I am a slow walker, but I never walk backwards...')</span>
</div>
</section>
<section class="breadcrumbs-v1">
<div class="container">
    <h2 class="breadcrumbs-v1-title"> @yield('items','首页')</h2>
    <ol class="breadcrumbs-v1-links">
        <li><a href="http://blog.iwanli.me">@yield('items','首页')</a></li>
        <li class="active">@yield('items_info','栏目')</li>
    </ol>
</div>
</section>