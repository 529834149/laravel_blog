@extends('layouts.app')
@section('items_info')
       自媒体
@endsection
@section('content')
  
    <div class="col-xs-12 col-md-9 no-space" >
        <h4 class="cata-nav"><a href="http://www.mrszhao.com/"><span class="glyphicon glyphicon-cloud-upload"></span>采集</a></h4>
        @foreach($media as $v)
        <section>
            <div class="post multi">
                <header>
                    <h4 class="post-category"><a href="/media/{{$v->mid}}/{{$v->slug}}" target="_blank">自媒体</a></h4>
                    <h2 class="post-title"><a href="/media/{{$v->mid}}/{{$v->slug}}" target="_blank">{{$v->title}}</a></h2>
                </header>
                <div class="post-body clearfix">
                    <div class="post-intro1">
                         {!!$v->excerpt!!}
                    </div>
                    <small class="post-footer fr">
                        <span><i class="glyphicon glyphicon-calendar"></i><?php echo date('Y-m-d h:i:s',$v->add_time)?></span><span><i class="glyphicon glyphicon-comment"></i>  667 </span>
                    </small>
                    
              </div>

            </div>
        </section>
        @endforeach
    </div>
    
    <script type="text/javascript" src="/public/default/js/jquery-3.1.0.min.js"></script>
@endsection