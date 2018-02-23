<div class="col-xs-12 col-md-3">
<div class="blog-sidebar margin-b-30">
    <div class="blog-sidebar-heading">
        <i class="blog-sidebar-heading-icon fa fa-fire"></i>
        <h4 class="blog-sidebar-heading-title">热门文章</h4>
    </div>
    <div class="blog-sidebar-content">
        <ul class="timeline-v2">
            @foreach ($left_item as $index => $list)
                <li class="timeline-v2-list-item">
                    <i class="timeline-v2-badge-icon radius-circle fa fa-calendar"></i>
                    <small class="timeline-v2-news-date"><?php echo date('Y-m-d h:i:s',$list->publish_time)?></small>
                    <h5 class="timeline-v2-news-title"><a href="{{ route('article.show', [$list->aid]) }}">{{$list->article_title}}</a></h5>
                </li>  
            @endforeach 
            <li class="clearfix" style="float: none;"></li>
        </ul>
    </div>
</div>  