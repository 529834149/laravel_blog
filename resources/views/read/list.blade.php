@extends('layouts.app')
@section('items_info')
       每日资讯
@endsection
@section('items')
       每日资讯
@endsection
@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('message') }}
        </div>
    @endif

    @if (Session::has('success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('success') }}
        </div>
    @endif

    @if (Session::has('danger'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('danger') }}
        </div>
    @endif
    <div class="col-xs-12 col-md-9 no-space" >
        <span style="color:red">说明:
            <p>1、如果感觉哪篇文章写得不错点开当前文章链接(只支持详情页)</p>
            <p>2、当抓取成功后台管理人员会进行审核，如果有违规与例如(涉黄、涉毒等非法内容第一时间通过合法手段进行维权)</p>
            <p>3、在网站抓取时，本功能支持所有网站详情页。抓取的内容会先审核，如果通过第一时间在首页显示(1个工作日内)</p>
            <p>4、本网站主要是针对关于php、web前端、js、服务器、数据库、互联网行业新闻等相关内容的网站</p>
        </span>
        <hr>
<!--           <div class="search-fullscreen-input-group">
                <input type="text" class="form-control search-fullscreen-input" name="q" placeholder="文章详情页链接，例如:http://bokekeji.blogchina.com/515602479.html">
           </div>-->
            <form method="post" action="/readability" accept-charset="UTF-8">
                <div class="form-group" action>
                  <label for="exampleInputEmail1">文章详情页链接</label>
                  <input type="url" id="url" name="url" class="form-control" placeholder="文章详情页链接，例如:http://bokekeji.blogchina.com/515602479.html">
                </div>
                <div class="form-group" action>
                  <label for="exampleInputEmail1">文章作者</label>
                  <input type="text"  name="author" class="form-control" placeholder="非原文作者,当前谁操作的,必填">
                </div>
                <div class="form-group" action>
                  <label for="exampleInputEmail1">来源于:</label>
                  <input type="text"  name="source" class="form-control" placeholder="来源于哪个网站,必填">
                </div>
                <button type="submit" id="submit" class="btn btn-default">采集</button>
            </form>
    </div>
<script>
    var submitBtn = document.getElementById("submit");
    submitBtn.onclick = function (event) {
          var inputValue = document.getElementById("url").value;
            if(!inputValue){
                alert('要按套路出牌呀,小心我黑掉你的电脑')
                return false;
            }else{
                return true;
            }
     };
</script>
    
@endsection