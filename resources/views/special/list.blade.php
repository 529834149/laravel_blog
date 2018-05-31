@extends('special_app.app')
@section('carousel')
    @include('special_app.header_list')
@endsection
@section('content')
    <div class="ui container">
        <div class="ui section horizontal divider"><i class="icon ion-flag"></i>精品栏目</div><hr>
        <div class="ui grid">
            <div class="ui column tag labels">
                <!--<a class="ui teal label">全部</a>-->
                @foreach($menu as $v)
                    @if($v->is_publish == 'y')
                         @if($v->name == 'PHP')
                         <!--<a class="ui teal label">全部</a>-->
                         <a class="ui label menu_info  "onclick="items({{$v->menu_id}})" id="{{$v->menu_id}}" style="background-color: #00b5ad;"><i class="icon ion-star"></i>{{$v->name}}</a>
                         @else
                            <a class="ui label menu_info  "onclick="items({{$v->menu_id}})" id="{{$v->menu_id}}"><i class="icon ion-star"></i>{{$v->name}}</a>
                         @endif
                    @endif
                @endforeach
                <a class="ui label more">更多<i class="icon ion-chevron-down"></i></a>
            </div>
            
        </div>
        <div class="ui grid label_item" style="display:none">
            <div class="ui column tag labels" >
                @foreach($menu as $v)
                    @if($v->is_publish == 'n')
                    <a  class="ui label menu_info" onclick="items({{$v->menu_id}})" id="{{$v->menu_id}}"><i class="icon ion-star"></i>{{$v->name}}</a>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="ui three column stackable grid link cards date_list">
            @foreach($item_data as $v1)
            <div class="column">
                <div class="ui fluid card">
                    <a href="/documents/{{$v1->id}}?status=1" class="image"><img src="/public/upload/{{$v1->pic}}"></a>
                    <div class="content">
                        <a href="/documents/{{$v1->id}}?status=1" class="header">{{$v1->title}}</a>
                    </div>
                    <div class="extra content">
                        <div class="left floated author">
                            <img class="ui avatar image"  src="https://dn-phphub.qbox.me/uploads/images/201709/10/4430/xlAZ6z2HsW.png"> Chenbj
                        </div>
                        <span class="right floated">
                         <span class="like"><i class="icon ion-heart"></i> 喜欢({{$v1->like}})</span>
                        <span class="star"><i class="icon ion-ios-eye-outline"></i> 浏览({{$v1->access}}) </span>
                        <span class="like"><i class="icon ion-heart"></i> 发布于:{{mdate(strtotime($v1->publish_time))}}</span>
                    </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
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
                            html+='<a class="image"><img src="/public/upload/'+array[index]['pic']+'"></a>'
                            html+='<div class="content">'
                            html+='<a href="/documents/'+array[index]['id']+'?status=1" class="header">'+array[index]['title']+'</a>'
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
                        return false;
                    }
                }else{
                    $('.date_list').empty();
                    $('.date_list').html('暂无专栏');
                    return false;
                }
            }
        });
    }
</script>
@endsection