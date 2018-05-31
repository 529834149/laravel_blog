<div class="ui secondary segment">

        <div class="ui main container" style="">
           <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="ui raised black segment">
                            <div class="ui black ribbon label">最新文章</div>
                            @foreach($new_article as $v)
                            <div class="ui vertical segment">
                                <div class="row">
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                        <a href="article_deal?aid={{$v->id}}"><span style="color:red">top<i class="icon ion-arrow-up-c"></i></span>{{$v->title}}</a>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <small>所在栏目：{{$v->cate}}</small>
                                        <big>|</big>
                                        <small>浏览数：{{$v->access}}</small>
                                        <big>|</big>
                                        <small>发布时间：{{$v->publish_time}}</small>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                                
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>