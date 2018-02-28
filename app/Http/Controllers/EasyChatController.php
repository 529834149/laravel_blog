<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Article;
use App\Model\Categories;
use DB;
use Log;
use EasyWeChat\Factory;
class EasyChatController extends Controller
{
    public function wx(Request $request)
    {
       Log::info('request arrived.'); # 注意：Log 为 Laravel 组件，所以它记的日志去 Laravel 日志看，而不是 EasyWeChat 日志

        $app = app('wechat.official_account');
        $app->server->push(function($message){
            return "欢迎关注 overtrue！";
        });

        return $app->server->serve();
    }
    public function wxtest(Request $request)
    {
        $config = [
            'app_id'=>'wxd984f6acfdde0f54',
            'secret'=>'8f7d6e98269c068681fc00070979d922'
        ];
        $app = Factory::officialAccount($config);
        $response = $app->user->list();
        $result = $app->qrcode->temporary('foo', 6 * 24 * 3600);
//        gQGo7zwAAAAAAAAAAS5odHRwOi8vd2VpeGluLnFxLmNvbS9xLzAyUFFaTmRhNXdkajIxd1FadU5xY3UAAgQ0VJZaAwQA6QcA
        $url = $app->qrcode->url('gQGo7zwAAAAAAAAAAS5odHRwOi8vd2VpeGluLnFxLmNvbS9xLzAyUFFaTmRhNXdkajIxd1FadU5xY3UAAgQ0VJZaAwQA6QcA');
        dd($url);
    }
    /**
     * 以下方法主要处理分类信息
     */
    public function  index(Request $request)
    {
        dd($request->all());
    }
    public function show(Request $request,$id)
    {
       dd($request->all());
    }
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd($request->all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
