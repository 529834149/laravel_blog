@extends('special_app.app')
@section('carousel')
@endsection
@section('content')
    <div class="container margin-top100">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="ui raised black segment">
                    <div class="ui black ribbon label"><i class="icon ion-ios-list"></i> 精华文章</div>
                    <div class="ui vertical segment">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><center><h2>{{$date->title}}</h2></center></div>
                            <hr style="margin-top: 50px;">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding: 20px;">
                                <blockquote>
                                    <span style="font-style: normal; color: rgb(153, 153, 153);">
                                        {{$date->desc}}
                                    </span>
                                </blockquote>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding: 20px;color: #555555">
                                  {!!$date->content!!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection