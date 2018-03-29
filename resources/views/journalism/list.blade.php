@extends('layouts.app')
@section('carousel')
<div class="catalog-bg note">
    <h2>talking is cheap,show me your code.</h2>
</div>
@endsection
@section('content')
<!--列表页-->
<style>
    
    
</style>
<div class="divMiddle w1200 mt20 clearfix" >
            <div class="divMain fl">
                <h4 class="cata-nav">
                    <a href="article">首页</a>
                    <!--<a href="http://www.mrszhao.com/">首页</a>>杂谈-->
                </h4>
                <section id="main"  style="position:relative;">
                    <ul id="list_box" class="loading">
                    </ul>
                   
                </section>
            </div>
            <aside class="fr">
                <div class="divSidebar ">
                    <div class="function" id="divSearchPanel">
                        <h3 class="function_t">站内搜索</h3>
                        <div class="function_c">
                            <form name="search" method="post" action="/search">
                                <input type="text" name="content" size="11" placeholder="一定要学会用我！" />
                                <input type="submit" value="搜索" /></form>
                        </div>
                    </div>
                    @include('layouts._category',['cateInfo' => $menuAll])
                    <!--设计文章-->
                    @include('layouts._hot',['get_hot_article'=>$get_hot_article])
                    <!--标签tag-->
                    @include('layouts._tag')
                    <div class="function" id="Tblogpublished">
                        <h3 class="function_t">案例集精选</h3>
                        <div class="function_c">
                        @include('layouts._case')
                        

                        </div>
                    </div>
                </div>
            </aside>
        </div>
<!--        <div class="loadgif" style="width:66px;height:66px;position:absolute;top:50%;left:50%;display:none">-->
          
       <!--</div>-->
<script src="/public/default/js/jquery-1.8.3.min.js"></script>
<script>
 var page = 1, //分页码
    off_on = false, //分页开关(滚动加载方法 1 中用的)
    timers = null; //定时器(滚动加载方法 2 中用的)
    load_status = true;//true 还有数据 在加载   false已经没有数据了
//加载数据
var LoadingDataFn = function() {
    //page分页
    $.ajax({  
        url: '/load',
        data:{'num':page},
        type: "GET",
        dataType: "json",
        beforeSend: function () {
            if(load_status ==false){
                return false;
            }else{
                var load = '<img id="loa"  style="display:none;margin-left:50%;margin-top:30%"  alt="加载中..." src="http://img.lanrentuku.com/img/allimg/1212/5-121204193R0-50.gif"/>';
                $('.loading').append(load);
                $('#loa').show();
            }
           

        },
        success: function(result){
            if (result.meta.code == 400) {
                var html = '<div class="downs" style="color:red;text-align: center;">已经加载到底了</div>';
                $('.downs').remove();
                $('#list_box').append(html);
                off_on = true;
                load_status = false;
                return false;
            }
            if (result.meta.code == 200) {
              
                var html = '';
                var date = result.data;
                var dom = '';
                for(list of date){
                    dom+='<section>';
                    dom+='<div class="post multi">';
                    dom+='<header>';
                    dom+='<h4 class="post-category">';
                    dom+='<a href="" target="_blank" onclick="">'+list['source']+'</a></h4>';
                    dom+='<h2 class="post-title">';
                    dom+='<a href="" target="_blank" >'+list['title']+'</a></h2>';
                    dom+='</header>';
                    dom+='<div class="post-body clearfix">';
                    dom+='<div class="post-intro1">'+list['desc']+'</div>';
                    dom+='<small class="post-footer fr">';
                    dom+='<span>';
                    dom+='<i class="iconfont icon-shijian"></i>2018-04-05</span>';
                    dom+='<span>';
                    dom+='<i class="iconfont icon-eye2"></i>';
                    dom+='</span>';
                    dom+='</small>';
                    dom+='</div>';
                    dom+='</div>';
                    dom+='</section>';
                }
                load_status = true;
                $('#list_box').append(dom);
                
                off_on = false; //[重要]这是使用了 {滚动加载方法1}  时 用到的 ！！！[如果用  滚动加载方法1 时：off_on 在这里不设 true的话， 下次就没法加载了哦！]
            }
            
        },
        complete:function () {
//           $('#loa').remove();
           $('#loa').hide();
        },
    
    });
};

//初始化， 第一次加载
$(document).ready(function() {
    LoadingDataFn();
});

//底部切换
$(document.body).on('click', '#footer div', function() {
    $(this).addClass('active').siblings().removeClass('active');
});

//滚动加载方法1
$('#main').scroll(function() {
    
    //当时滚动条离底部60px时开始加载下一页的内容
    if (($(this)[0].scrollTop + $(this).height() + 60) >= $(this)[0].scrollHeight) {
        //这里用 [ off_on ] 来控制是否加载 （这样就解决了 当上页的条件满足时，一下子加载多次的问题啦）
        if (off_on) {
            //off_on = false;
            //page++;
            //console.log("第"+page+"页");
            //LoadingDataFn();  //调用执行上面的加载方法
        }
    }
});

//滚动加载方法2
$('#main').scroll(function() {
    //当时滚动条离底部60px时开始加载下一页的内容
    if (($(this)[0].scrollTop + $(this).height() + 60) >= $(this)[0].scrollHeight) {
        clearTimeout(timers);
        //这里还可以用 [ 延时执行 ] 来控制是否加载 （这样就解决了 当上页的条件满足时，一下子加载多次的问题啦）
        timers = setTimeout(function() {
            page++;
//            console.log("第" + page + "页");
            LoadingDataFn(); //调用执行上面的加载方法
        }, 300);
    }
});

//还可以基window窗口（body）来添加滚动事件, (因为布局不同,所以在这里没效果，因为[上面是基于body中的某个元素来添加滚动事的])
$(window).scroll(function() {
    //当时滚动条离底部60px时开始加载下一页的内容
    if (($(window).height() + $(window).scrollTop() + 100) >= $(document).height()) {
        clearTimeout(timers);
        timers = setTimeout(function() {
            page++;
//            console.log("第" + page + "页");
            LoadingDataFn();
        }, 300);
    }
});
</script>
@endsection

