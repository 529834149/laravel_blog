@extends('layouts.app')

@section('title',' 互联网资讯')

@section('content')
    <section id="main" class="col-md-8">
        <div style="margin-top: 50px;"></div>
        <ul class="list-group list-archives">
            @foreach($internet as $v)
            <li class="list-group-item">
                <a href="/internet_information/{{$v->id}}/details" title="" data-original-title="{{$v->title}}">
                      {{msubstr($v->title,0,25)}}
                </a>
                <span class="badge fa fa-clock-o" style="background-color: #ccc">
                    {{date('Y-m-d',$v->read_time)}}
                </span>
            </li>
           @endforeach
           {{ $internet->links() }}
        </ul>
    </section>
@include('layouts._left_item')
@stop
