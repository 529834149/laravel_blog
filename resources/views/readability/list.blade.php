@extends('layouts.app')
@section('items_info')
    采集
@endsection
@section('content')
    <div class="col-xs-12 col-md-9 no-space" >
        @foreach($read_list as $k=>$v)
        <ul class="list-group" style="margin-bottom:0px;">
            <li class="list-group-item">
              <span class="badge">14</span>
              <a href="readbility_list/{{$v->id}}"> {{$v->title}}</a>
              </li>
        </ul>
       @endforeach
    {{ $read_list->links() }}
    </div>
    <script type="text/javascript" src="/public/default/js/jquery-3.1.0.min.js"></script>
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