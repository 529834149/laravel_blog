@extends('special_app.app')
@section('carousel')
@endsection
@section('content')

<div class="content-wrapper">
        <div class="container margin-top100">
        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="ui fluid shadowless vertical pointing menu">
                    <div class="item bg-gray header"><i class="icon setting"></i> 账号设置</div>
                    <a href="/settings" class="item active">
                        <i class="icon browser"></i> 基本信息
                    </a>
                    <a href="#" class="item ">
                        <i class="icon lock"></i> 修改密码
                    </a>
                    <a href="#" class="item ">
                        <i class="icon image"></i> 修改头像
                    </a>
                </div>
            </div>
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <div class="ui raised black segment">
                        <h1>
        <small><i class="icon browser"></i> 基本资料</small>
    </h1>
    <div class="ui divider"></div>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">昵称</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="如：Destiny">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">邮箱</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="如：example@qq.com">
            </div>
        </div>
        <div class="form-group">
            <label for="signature" class="col-sm-2 control-label">签名</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="signature" rows="3" placeholder="如：将来的你一定会感谢现在努力的自己！"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="company" class="col-sm-2 control-label">公司</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="company" placeholder="如：优帆远扬">
            </div>
        </div>
        <div class="form-group">
            <label for="blog" class="col-sm-2 control-label">博客</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="blog" placeholder="如：https://aabvip.com">
            </div>
        </div>
        <div class="form-group">
            <label for="address" class="col-sm-2 control-label">所在地</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="address" placeholder="如：北京">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="ui black  button"><i class="icon save"></i> 保存</button>
            </div>
        </div>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
