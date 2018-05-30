@extends('special_app.app')
@section('carousel')
@endsection
@section('content')
    <div class="container margin-top100">
        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="ui card">
                    <div class="image">
                        <img src="/public/upload/{{$menu_special->pic}}">
                    </div>
                    <div class="content">
                        <div class="header">
                            {{$menu_special->title}}
                        </div>
                        <p class="meta">
                           

                            <a href="https://github.com/DestinyLuo" target="_blank">
                               <i class="icon ion-person"></i> {{$menu_special->author}}
                            </a>
                        </p>
                        <div class="description">未来的你一定会感谢现在努力的自己</div>
                    </div>
                    <div class="extra content">
                       <i class="icon ion-location"></i>现居住地:北京海淀区
                    </div>
                    <div class="extra content">
                       <i class="icon ion-link"></i> <a href="http://www.bodys.top" target="_blank">www.bodys.top</a>
                    </div>
                    <div class="extra content">
                        <i class="icon ion-ios-home"></i>祖籍: 赤峰
                    </div>
                </div>
            </div>
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <div class="ui raised black segment">
                    <div class="ui black ribbon label"><i class="icon ion-ios-list"></i> 所有文章</div>
                    @foreach($sp_article_list as $v)
                    <div class="ui vertical segment">
                        <div class="row">
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                <a href="#">{{$v->title}}</a>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <small>发布时间：{{$v->publish_time}}</small>
                            </div>
                        </div>
                    </div>
                    @endforeach
<!--                    <div class="ui vertical segment">
                        <div class="row">
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                <a href="#">VPN 看看新世界</a>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <small>发布时间：2018年01月04日</small>
                            </div>
                        </div>
                    </div>
                    <div class="ui vertical segment">
                        <div class="row">
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                <a href="#">VPN 看看新世界</a>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <small>发布时间：2018年01月04日</small>
                            </div>
                        </div>
                    </div>
                    <div class="ui vertical segment">
                        <div class="row">
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                <a href="#">VPN 看看新世界</a>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <small>发布时间：2018年01月04日</small>
                            </div>
                        </div>
                    </div>
                    <div class="ui vertical segment">
                        <div class="row">
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                <a href="#">VPN 看看新世界</a>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <small>发布时间：2018年01月04日</small>
                            </div>
                        </div>
                    </div>
                    <div class="ui vertical segment">
                        <div class="row">
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                <a href="#">VPN 看看新世界</a>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <small>发布时间：2018年01月04日</small>
                            </div>
                        </div>
                    </div>
                    <div class="ui vertical segment">
                        <div class="row">
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                <a href="#">VPN 看看新世界</a>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <small>发布时间：2018年01月04日</small>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
@endsection