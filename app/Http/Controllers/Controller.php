<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Article;
use App\Model\Categories;
use Illuminate\Support\Facades\View;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * @return 主要处理所有页面上的导航页面
     */
    public function  __construct()
    {
        $navList = Categories::orderBy('order','asc')
                ->where('is_show',1)
                ->take(7)
                ->get();
        //当前左侧用户信息
        $left_item = Article::where('is_show',1)->take(4)->get();
        View::share(['navList'=>$navList,'left_item'=>$left_item]);//首页导航页面共享
    }  
    public function returnCode($code,$message='',$data='')
    {
        switch ($code) {
            case 200:
                $msg = 'OK';
                break;
            case 400:
                $msg = 'Bad Request';
                break;
            case 401:
                $msg = 'Unauthorized';
                break;
            case 404:
                $msg = 'Not Found';
                break;
            case 408:
                $msg = 'Request Time-out';
                break;
            case 409:
                $msg = 'Conflict';
                break;
            case 500:
                $msg = 'Internal Server Error';
                break;
            case 503:
                $msg = 'Service Unavailable';
                break;
           	case 700:
                $msg = 'Prohibition of frequent logon';
                break;
            default:
                break;
        }
        if($message != '') {
            $message = $msg.':'.$message;
        } else {
            $message = $msg;
        }

        $result = [
            'meta'=>[
                'code'=>$code,
                'message'=>$message,
            ],
            
        ];
        if($data !='') {
            $result = array_add($result,'data',$data);
        }
        return $result;     

    }
}
