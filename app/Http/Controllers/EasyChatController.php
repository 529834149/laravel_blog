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
        $result = $app->qrcode->forever(56);
        
        $content = file_get_contents($url); // 得到二进制图片内容
        file_put_contents(__DIR__ . '/code.jpg', $content); // 写入文件
    }
  
    
}
