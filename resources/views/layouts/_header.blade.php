<nav id="nav" class="navbar navbar-default container-fluid" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="fa fa-bars">
                            </span>
                        </button>
                        <a class="navbar-brand visible-xs" href="https://9iphp.com/" style='padding:2px 10px'>
                            <img src="/public/home/picture/logo_mini.png" width="150px" height="50px" alt="Specs&#039; Blog-就爱PHP">
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li id="menu-item-6" class="menu-item menu-item-type-custom menu-item-object-custom active">
                                <a href="/">
                                    <i class="fa fa-home">
                                    </i>
                                    首页
                                </a>
                            </li>
                            <li id="menu-item-880" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown">
                                    <i class='fa fa-th'>
                                    </i>
                                    技术分类
                                    <b class="caret">
                                    </b>
                                    <i class="icon-angle-down">
                                    </i>
                                </a>
                                <ul class="dropdown-menu">
                                    @foreach($getCate as $v)
                                        @foreach($v as $v1)
                                        <li id="menu-item-74" class="menu-item menu-item-type-taxonomy menu-item-object-category">
                                            <a href="/bodys/{{$v1->alias}}/cate?cid={{$v1->cate_id}}">
                                                <i class='fa fa-html5'>
                                                </i>
                                                {{$v1->title}}
                                            </a>
                                        </li>
                                        @endforeach
                                        <li id="menu-item-1301" class="divider menu-item menu-item-type-custom menu-item-object-custom">
                                            <a>
                                                分割线
                                            </a>
                                        </li>
                                    @endforeach
<!--                                    <li id="menu-item-8" class="menu-item menu-item-type-taxonomy menu-item-object-category">
                                         <a href="#">
                                            <i class='fa fa-code'>
                                            </i>
                                            PHP
                                        </a>
                                    </li>
                                    <li id="menu-item-75" class="menu-item menu-item-type-taxonomy menu-item-object-category">
                                        <a href="#">
                                            <i class='fa fa-database'>
                                            </i>
                                            Database
                                        </a>
                                    </li>
                                    <li id="menu-item-77" class="menu-item menu-item-type-taxonomy menu-item-object-category">
                                         <a href="#">
                                            <i class='fa fa-edit'>
                                            </i>
                                            JS/jQuery
                                        </a>
                                    </li>
                                    <li id="menu-item-1301" class="divider menu-item menu-item-type-custom menu-item-object-custom">
                                        <a>
                                            分割线
                                        </a>
                                    </li>
                                    <li id="menu-item-44" class="menu-item menu-item-type-taxonomy menu-item-object-category">
                                       <a href="#">
                                            <i class='fa fa-folder'>
                                            </i>
                                            DEDE
                                        </a>
                                    </li>
                                    <li id="menu-item-9" class="menu-item menu-item-type-taxonomy menu-item-object-category">
                                         <a href="#">
                                            <i class='fa fa-wordpress'>
                                            </i>
                                            WordPress
                                        </a>
                                    </li>
                                    <li id="menu-item-1584" class="menu-item menu-item-type-taxonomy menu-item-object-category">
                                         <a href="#">
                                            <i class='fa fa-gbp'>
                                            </i>
                                            Laravel
                                        </a>
                                    </li>
                                    <li id="menu-item-1003" class="menu-item menu-item-type-taxonomy menu-item-object-category">
                                         <a href="#">
                                            <i class='fa fa-bookmark'>
                                            </i>
                                            ThinkPHP
                                        </a>
                                    </li>
                                    <li id="menu-item-1302" class="divider menu-item menu-item-type-custom menu-item-object-custom">
                                        <a>
                                            分割线
                                        </a>
                                    </li>
                                    <li id="menu-item-125" class="menu-item menu-item-type-taxonomy menu-item-object-category">
                                         <a href="#">
                                            <i class='fa fa-linux'>
                                            </i>
                                            Linux
                                        </a>
                                    </li>
                                    <li id="menu-item-299" class="menu-item menu-item-type-taxonomy menu-item-object-category">
                                         <a href="#">
                                            <i class='fa fa-info-circle'>
                                            </i>
                                            虾扯蛋
                                        </a>
                                    </li>-->
                                    <!--.dropdown-->
                                </ul>
                            </li>
                            <li id="menu-item-1634" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item ">
                                <a  onclick="alert('开发中...')">
                                    <!--/topic-->
                                    <i class='fa fa-folder-open'>
                                    </i>
                                    专题
                                </a>
                            </li>
                            <li id="menu-item-840" class="menu-item menu-item-type-post_type menu-item-object-page">
                                <a href="/archived_posts">
                                    <i class='fa fa-archive'>
                                    </i>
                                    归档文章
                                </a>
                            </li>
                            <li id="menu-item-881" class="menu-item menu-item-type-post_type menu-item-object-page">
                                 <a href="/internet_information">
                                    <i class='fa fa-tags'>
                                    </i>
                                    互联网资讯
                                </a>
                            </li>
                            <li id="menu-item-882" class="menu-item menu-item-type-post_type menu-item-object-page">
                                <a href="#">
                                    <i class='fa fa-comments-o'>
                                    </i>
                                    留言板
                                </a>
                            </li>
                            <li id="menu-item-891" class="menu-item menu-item-type-post_type menu-item-object-page">
                                <a href="#">
                                    <i class='fa fa-user'>
                                    </i>
                                    关于
                                </a>
                            </li>
                            <li id="menu-item-1147" class="menu-item menu-item-type-post_type menu-item-object-page">
                                <a href="#">
                                    <i class='fa fa-font'>
                                    </i>
                                    字体图标
                                </a>
                            </li>
                            <li id="menu-item-1493" class="menu-item menu-item-type-custom menu-item-object-custom">
                                 <a href="#">
                                    <i class="fa fa-link">
                                    </i>
                                    PHP资源网站
                                </a>
                            </li>
                        </ul>
                        <form action="https://9iphp.com/" method="get" id="searchform" class="navbar-form navbar-right visible-lg"
                        role="search">
                            <div class="form-group">
                                <input type="text" name='s' id='s' class="form-control" placeholder="这里有你想要的"
                                x-webkit-speech>
                                <button class="btn btn-danger" type="submit">
                                    <i class="fa fa-search">
                                    </i>
                                </button>
                            </div>
                            <!--<button type="submit" class="btn btn-primary">Submit</button>-->
                        </form>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>