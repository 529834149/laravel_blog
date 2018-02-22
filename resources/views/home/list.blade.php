@extends('layouts.app')
@section('content')
    <div class="col-xs-12 col-md-9 no-space" >
        @foreach ($article_list as $index => $list)
            <div class="col-md-12 grid-item">
                <article class="blog-grid">
                    <div class="blog-grid-box-shadow">
                        <div class="blog-grid-content">
                            <h2 class="blog-grid-title-md" id="{{$list->aid}}" onclick="article_num(<?php echo $list->aid; ?>);return false;"><a href="{{ route('article.show', [$list->aid]) }}">{{ $list->article_title}}</a></h2>
                            <p><span>{{ $list->desc}}</span></p>
                        </div>
                        <div class="blog-grid-supplemental">
                            <span class="blog-grid-supplemental-title">
                                <i class="fa fa-leaf"></i><a class="blog-grid-supplemental-category" href="{{ route('article.show', [$list->aid]) }}"> {{ $list->title}}</a> - <i class="fa fa-clock-o"></i> 2017-08-04 15:36:32
                            </span>
                            <span class="blog-grid-supplemental-title pull-right">
                                <i class="fa fa-fire"></i> {{ $list->sort_num}}
                            </span>
                        </div>
                    </div>
                </article>
            </div>
       
        @endforeach 
        {{ $article_list->links() }}
    </div>
    <script type="text/javascript" src="/public/default/js/jquery-3.1.0.min.js"></script>
    <!--<script type="text/javascript" src="/public/default/js/default.js"></script>-->
    <script>
       function article_num(aid){
           var article_id = aid;
           $.ajax({
                type : "get",
                url: "/update_click",
                cache:false,//不缓存数据
                data:{
                   "aid":article_id,
                },
                dataType : "json",//数据类型为json
                success : function(root){
                    console.log(root);
                    return false;
                }
            });
       }
//           $.ajax({
//                type:'get',
//                url: 'update_click',
//                data:{
//                    aid:aid,
//                },
//                dataType:'json',
//                beforeSend:function(){
//                    
//                },
//                success:function(data){
//                    console.log(data)
//                }
//        }
    </script>
@endsection