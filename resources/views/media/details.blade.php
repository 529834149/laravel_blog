@extends('layouts.app')
<!--@section('titles')
  
@endsection-->
@section('items_info')
    文章详情页
@endsection

@section('content')
<div class=" col-xs-12 col-md-9 no-space">
    <div class="post-single-title w1200">
        <h1 class="post-title" style="font-size:24px;text-align: center;">如何把codepen上面的代码嵌入个人网站中？</h1>
        <small class="post-footer" >
            <span ><i class="glyphicon glyphicon-calendar" ></i><?php echo date('Y-m-d h:i:s',$media->add_time)?></span><span><i class="glyphicon glyphicon-comment"></i>  203 </span>
        </small>
    </div>
    <hr>
    <main>{!!$media->body!!}</main>
</div>
@endsection