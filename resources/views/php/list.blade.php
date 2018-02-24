@extends('layouts.app')
@section('items_info')
    PHP
@endsection
@section('content')
    <div class="col-xs-12 col-md-9 no-space" >
        @if(count($article_list))
            @foreach ($article_list as $index => $list)
                <div class="col-md-12 grid-item">
                    <article class="blog-grid">
                        <div class="blog-grid-box-shadow">
                            <div class="blog-grid-content">
                                <h2 class="blog-grid-title-md" onclick="onclicks({{$list->aid}});" id="{{$list->aid}}"><a href="{{ route('article.show', [$list->aid]) }}">{{ $list->article_title}}</a></h2>
                                <p><span>{{ $list->desc}}</span></p>
                            </div>
                            <div class="blog-grid-supplemental">
                                <span class="blog-grid-supplemental-title">
                                    <i class="fa fa-leaf"></i><a class="blog-grid-supplemental-category" href="{{ route('article.show', [$list->aid]) }}"> {{ $list->tage_name}}</a> - <i class="fa fa-clock-o"></i> <?php echo date('Y-m-d h:i:s',$list->publish_time)?>
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
        @else
        暂无数据
        @endif
        
    </div>
    <script type="text/javascript" src="/public/default/js/jquery-3.1.0.min.js"></script>
    <script>
        function onclicks(aid){
            $.ajax({
                url:'update_click/',
                data:{'aid':aid},
                type: "get",
                dataType: "json",
                success: function(result){
                    if(result.code == 200){
                        console.log('redis +1');
                    }
                }
            });
        }
    </script>
    
@endsection