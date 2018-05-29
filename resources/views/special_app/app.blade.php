<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="_token" content="ir5yoi0GDipK8RGb151VwfwNf8zjSWllWOE6unMC">
    <meta name="csrf-token" content="ir5yoi0GDipK8RGb151VwfwNf8zjSWllWOE6unMC">
    <title></title>
    <link rel="stylesheet" href="/public/special/css/app.css">
    <link rel="stylesheet" href="/public/special/css/main.css">
    <link href="/public/special/css/semantic.min.css" rel="stylesheet">
    <script src="/public/special/js/jquery.min.js"></script>
    <script src="/public/special/js/semantic.min.js"></script>
    <link href="/public/special/css/swiper.min.css" rel="stylesheet">
    <link href="//at.alicdn.com/t/font_597522_al1b2ouz6m3g14i.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
   
    <style>
        body {
            background-color: #FFFFFF;
        }

        .ui.menu .item img.logo {
            margin-right: 1.5em;
        }

        .main.container {
            margin-top: 7em;
        }

        .wireframe {
            margin-top: 2em;
        }

        .ui.footer.segment {
            margin: 5em 0em 0em;
            padding: 5em 0em;
        }

        .swiper-container {
            width: 100%;
            height: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img:hover {
            cursor: pointer;
        }

        .fluid.card .image {
            height: 250px;
            background-image: url('/public/special/picture/xlaz6z2hsw.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        /*.swiper-pagination-bullet-active {
            background-color: #009c95;!important;
        }*/
    </style>
    </head>
<body>
@include('special_app.header')
<div class="content-wrapper">
    @yield('carousel')
    @yield('content')
   
</div>
<div class="ui inverted vertical footer segment">
    <div class="ui center aligned container">
        <div class="ui stackable inverted divided grid">
            <div class="three wide column">
                <h4 class="ui inverted header">首页</h4>
                <div class="ui inverted link list">
                    <a href="#" class="item">前段技术</a>
                    <a href="#" class="item">PHP</a>
                    <a href="#" class="item">linex</a>
                    <a href="#" class="item">版本控制器</a>
                </div>
            </div>
            <div class="three wide column">
                <h4 class="ui inverted header">个人履历</h4>
                <div class="ui inverted link list">
                    <a href="#" class="item">个人简历</a>
         
                </div>
            </div>
            <div class="three wide column">
                <h4 class="ui inverted header">案例</h4>
                <div class="ui inverted link list">
                    <a href="#" class="item">案例精品</a>
                    <a href="#" class="item">专题</a>
                </div>
            </div>
            <div class="seven wide column">
                <h4 class="ui inverted header">Footer Header</h4>
                <p>生活没有眼前的苟且，还有诗和远方。</p>
            </div>
        </div>
        <div class="ui inverted section divider"></div>
        <img src="/public/default/images/logo.png" class="ui centered mini image">
        <div class="ui horizontal inverted small divided link list">
            <a class="item" href="http://www.blogchina.com/">博客中国</a>
            <a class="item" href="http://www.bokee.com/">博客网</a>
            <a class="item" href="http://hiveapi.blogchina.com/app_download">蜂巢学园</a>
            <a class="item" href="http://sr.blogchina.com/api/appversion">智慧阅读</a>
            <a class="item" href="http://app.mi.com/details?id=com.blogchina.poetry&from=groupmessage">全民诵读</a>
        </div>
    </div>
</div>
</body>
<script src="/public/special/js/swiper.min.js"></script>
<!--<script src="/public/special/js/app.js"></script>-->
<script src="/public/special/js/main.js"></script>
<!-- Initialize Swiper -->
<script>
    var divShow = true;  
    $(".more").click(function(){  
        if(divShow){
            $('.more i').removeClass('ion-chevron-down');
            $('.more i').addClass('ion-chevron-up');
            $(".label_item").fadeIn(300);
            divShow = false;  
        }else{
            $('.more i').removeClass('ion-chevron-up');
            $('.more i').addClass('ion-chevron-down');
            $(".label_item").fadeOut(300);
            divShow = true;  
        }
    })
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        effect: 'fade',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true,
        autoplay: 2500,
    });
    function RiQi(sj){
       var now = new Date(sj*1000);
       var   year=now.getFullYear();    
         var   month=now.getMonth()+1;    
         var   date=now.getDate();    
         var   hour=now.getHours();    
         var   minute=now.getMinutes();    
         var   second=now.getSeconds();  
         if(month<10){
             month = '0'+month;
         }
        return   year+"-"+month+"-"+date; 
//         return   year+"-"+month+"-"+date+"   "+hour+":"+minute+":"+second;    
        
   }
    function items(id){
        $('.menu_info').css('background-color','')
        $('#'+id).css('background-color','#00b5ad')
        $.ajax({
            type:'get',
            url: '/documents/'+id,
            data:{
                
            },
            dataType:'json',
           beforeSend:function(){
               
           },
            success:function(data){
                var html='';
                if(data.meta.code == 200){
                    var list = data.data;
                    if(list.length){
                        list.forEach(function(value, index, array) {
//                        console.log(array[index]['title']);return false;
                            html+='<div class="column">'
                            html+='<div class="ui fluid card">'
                            html+='<a class="image"></a>'
                            html+='<div class="content">'
                            html+='<a class="header">'+array[index]['title']+'</a>'
                            html+='</div>'
                            html+='<div class="extra content">'
                            html+='<div class="left floated author">'
                            html+='<img class="ui avatar image"'
                            html+='src="https://dn-phphub.qbox.me/uploads/images/201709/10/4430/xlAZ6z2HsW.png"> Matt'
                            html+='</div>'
                            html+='<span class="right floated">'
                            html+='<span class="like"><i class="icon ion-heart"></i> 喜欢('+array[index]['like']+')</span>'
                            html+='<span class="star"><i class="icon ion-ios-eye-outline"></i> 浏览('+array[index]['access']+') </span>'
//                            html+='<span class="wait"><i class="icon ion-ios-timer-outline"></i>发布时间:'+RiQi(array[index]['publish_time'])+' </span>'
                            html+='</span>'
                            html+='</div>'
                            html+='</div>'
                            html+='</div>'
                        });
                        $('.date_list').empty();
                        $('.date_list').html(html);
                        return false;
                    }else{
                        $('.date_list').empty();
                        $('.date_list').html('暂无专栏');
                    }
                }else{
                    $('.date_list').empty();
                    $('.date_list').html('暂无专栏');
                }
            }
        });
    }
</script>
</html>