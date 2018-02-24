@extends('layouts.app')
@section('items_info')
    PHP
@endsection
@section('content')
    @if(count($article_list))
            @foreach ($article_list as $index => $list)
                <div class="col-md-12 grid-item">
                    <article class="blog-grid">
                        <div class="blog-grid-box-shadow">
                            <div class="blog-grid-content">
                                <h2 class="blog-grid-title-md" id="{{$list->aid}}"><a href="{{ route('article.show', [$list->aid]) }}">{{ $list->article_title}}</a></h2>
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
        <div class="msg_desc">
            暂无数据
            <!--<img style="max-width:100%;overflow:hidden;" src="/public/default/picture/c8c56961fecdc8b2db89fd1153dc387a.gif" alt="">-->
        </div>
        @endif
    <script type="text/javascript" src="/public/default/js/jquery-3.1.0.min.js"></script>
    <!--<script type="text/javascript" src="/public/default/js/default.js"></script>-->
    
@endsection