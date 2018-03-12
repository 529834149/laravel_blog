@extends('layouts.app')
@section('items_info')
    采集
@endsection
@section('content')

    <div class="col-xs-12 col-md-9 no-space" >
       
        <ul class="list-group" style="margin-bottom:0px;" id="data_list">
             @foreach($data as $k=>$v)
            <li class="list-group-item" >
                <span class="badge" style="color:#ccc;background-color: #fff"><i class="fa fa-book"></i>{{$v->read_num}}</span>
                <span class="badge" style="color:#ccc;background-color: #fff">发布时间：2018-07-08</span>
                <a href="readbility_list/{{$v->id}}" style="color:#4f4f4f" onclick="onclicks({{$v->id}});"> {{$v->title}}</a>
            </li>
             @endforeach
        </ul>
      
       <div class="panel-footer">
                <nav style="text-align:center;">
                        <ul class="pagination">
                                @for($i=1;$i<=$page;$i++)
                                        <li><a href="javascript:;" onclick="page(this,{{$i}})">{{$i}}</a></li>
                                @endfor
                                <!-- <li><a href="#">&laquo;</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&raquo;</a></li> -->
                        </ul>
                </nav>

        </div>
    </div>
    <script type="text/javascript" src="/public/default/js/jquery-3.1.0.min.js"></script>
     <script type="text/javascript" src="/public/default/js/jquery-3.1.0.min.js"></script>
    <script>
        //无刷新的分页
        function page(obj,page)
        {
           //发送ajax分页请求
           $.ajax({
                url:'readbility_list/',
                data:{'page':page},
                type: "get",
                dataType: "json",
                success: function(result){
                    if(result.meta.code ==200){
                        var data = result.data;
                        var html = '';
                      
                        for(var i=0;i<data.length;i++){
                                html +='<li class="list-group-item" >';
                                html+= '<span class="badge" style="color:#ccc;background-color: #fff"><i class="fa fa-book"></i>'+data[i].read_num+'</span>';
                                html+='<span class="badge" style="color:#ccc;background-color: #fff">发布时间：'+data[i].read_time+'</span>';
                                html+='<a href="readbility_list/'+data[i].id+'" style="color:#4f4f4f" onclick="onclicks('+data[i].id+');">'+data[i].title+'</a>';
                                html +='</li>'
			}
                        $("#data_list").empty();
                        $("#data_list").append(html);
                        
                    }else{
                        console.log('查询失败');
                    }
                }
           })
        }
        function onclicks(id){
            $.ajax({
                url:'read_num/',
                data:{'id':id},
                type: "get",
                dataType: "json",
                success: function(result){
                   console.log(result);
                }
            });
        }
    </script>
    
@endsection