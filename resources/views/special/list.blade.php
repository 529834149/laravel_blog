@extends('special_app.app')
@section('carousel')
    @include('special_app.carousel')
@endsection
@section('content')
    <div class="ui container">
        <div class="ui two column stackable grid link cards">
            @foreach($data as $v)
            <div class="column">
                <div class="ui fluid card">
                    <div class="ui fluid image">
                        <div class="ui black ribbon label"><i class="icon ion-ios-star"></i> PHP专题精选</div>
                        <a class="image"></a>
                    </div>
                    <div class="content">
                        <a class="header">{{$v->title}}</a>
                    </div>
                    <div class="extra content">
                        <div class="left floated author">
                            <img class="ui avatar image"
                                 src="https://dn-phphub.qbox.me/uploads/images/201709/10/4430/xlAZ6z2HsW.png"> Matt
                        </div>
                        <span class="right floated">
                        <span class="like"><i class="icon ion-heart"></i> 喜欢({{$v->like}})</span>
                        <span class="star"><i class="icon ion-ios-eye-outline"></i> 浏览({{$v->access}}) </span>
                        <span class="wait"><i class="icon ion-ios-timer-outline"></i>发布时间:{{date('Y-m-d',$v->publish_time)}} </span>
                    </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <hr><div class="ui section horizontal divider"><i class="icon ion-flag"></i>精品栏目</div><hr>
        <div class="ui grid">
            <div class="ui column tag labels">
                <a class="ui teal label">全部</a>
                @foreach($menu as $v)
                @if($v->is_publish == 'y')
                <a class="ui label menu_info "onclick="items({{$v->menu_id}})" id="{{$v->menu_id}}"><i class="icon ion-star"></i>{{$v->name}}</a>
                @endif
                @endforeach
                <a class="ui label more">更多<i class="icon ion-chevron-down"></i></a>
            </div>
            
        </div>
        <div class="ui grid label_item" style="display:none">
            <div class="ui column tag labels" >
                @foreach($menu as $v)
                    @if($v->is_publish == 'n')
                        <a class="ui label menu_info" onclick="items({{$v->menu_id}})" id="{{$v->menu_id}}"><i class="icon ion-star"></i>{{$v->name}}</a>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="ui three column stackable grid link cards date_list">
            @foreach($item_data as $v1)
            <div class="column">
                <div class="ui fluid card">
                    <a class="image"></a>
                    <div class="content">
                        <a class="header">{{$v1->title}}</a>
                    </div>
                    <div class="extra content">
                        <div class="left floated author">
                            <img class="ui avatar image"
                                 src="https://dn-phphub.qbox.me/uploads/images/201709/10/4430/xlAZ6z2HsW.png"> Matt
                        </div>
                        <span class="right floated">
                         <span class="like"><i class="icon ion-heart"></i> 喜欢({{$v1->like}})</span>
                        <span class="star"><i class="icon ion-ios-eye-outline"></i> 浏览({{$v1->access}}) </span>
                        <!--<span class="wait"><i class="icon ion-ios-timer-outline"></i>发布时间:{{date('Y-m-d',$v1->publish_time)}} </span>-->
                    </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection