@extends('layouts.app')
<!--@section('titles')
  
@endsection-->
@section('items_info')
    文章详情页
@endsection

@section('content')
<div class=" col-xs-12 col-md-9 no-space">
    <article class="blog-grid">
        
        <div class="blog-grid-content article margin-b-30">
             <h3>{{$media->title}}</h3>
             <p>
                <small class="post-footer fr">
                   <span><i class="glyphicon glyphicon-calendar"></i><?php echo date('Y-m-d h:i:s',$media->add_time)?></span><span><i class="glyphicon glyphicon-comment"></i>  667 </span>
                </small>
             </p>
             <hr>
             {!!$media->body!!}
            <p></p>
            <div class="social-share" data-mobile-sites="weibo,qq,qzone,tencent" data-disabled="google,twitter,facebook"  data-weibo-title="Body博客致力于提供优质学习资源,分享个人笔记,工作遇见的问题和比较好的文章进行分享的平台" data-qq-title="{{$media->title}}">分享:</div>
            <hr>
        </div>
    </article>
</div>
@endsection