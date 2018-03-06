@extends('layouts.app')
@section('items_info')
    采集
@endsection
@section('content')
    <div class="col-xs-12 col-md-9 no-space" >
        @foreach($read_list as $v)
            <div class="col-md-12 grid-item">
                <article class="blog-grid">
                    <div class="blog-grid-box-shadow">
                        <div class="blog-grid-content">
                            <h2 class="blog-grid-title-md" id=""><a href=""></a></h2>
                            <p><span>{{$v->title}}</span></p>
                        </div>
                        <div class="blog-grid-supplemental">
                            <span class="blog-grid-supplemental-title">
                                <i class="fa fa-leaf"></i><a class="blog-grid-supplemental-category" href="">来自于：{{$v->source}}</a> - <i class="fa fa-clock-o"></i> <?php echo date('Y-m-d h:i:s',$v->read_time)?>
                            </span>
                            <span class="blog-grid-supplemental-title pull-right">
                                <i class="fa fa-fire"></i>11
                            </span>
                        </div>
                        
                    </div>
                </article>
            </div>
       @endforeach
    </div>
    <script type="text/javascript" src="/public/default/js/jquery-3.1.0.min.js"></script>
    
    
@endsection