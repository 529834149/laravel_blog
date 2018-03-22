<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Categories;
use App\Model\Article;
use Illuminate\Http\Request;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     *  导航数据共享
     */
    public function __construct(Request $request) {
        $this->init($request);
    }
    /**
     * 初始化函数
     */
    private function init(Request $request) {
        $this->getCategory($request);
        $this->get_More_Article($request);//获取更多当前点击量最多的文章
        
    }
    /**
     * 
     * @return 实现获取分类方法
     */
    public function getCategory()
    {
        $get_cate = Categories::where('is_show',1)->orderBy('order','asc')->get()->toArray();
        $menuAll = $this->get_cate_recursion($get_cate);
        \View::share('menuAll',$menuAll);
    }
    /**
     * 获取最新的两篇文章
     */
    public function get_More_Article()
    {
        $get_hot_article = Article::where('is_show',1)->orderBy('publish_time','desc')->take(2)->get();
        \View::share('get_hot_article',$get_hot_article);
    }
    /**
     * 
     * @param type $action
     * @param type $parent_id
     * @return array 递归拼接
     */
    public function get_cate_recursion($action, $parent_id = 0)
    {
        $tmp = [];
        foreach ($action as $k => $v) {
            if ($v['parent_id'] == $parent_id) {
                $tmp[] = $v;
               
                unset($action[$k]);
            }
        }
        
        if (!empty($action)) {
            foreach ($tmp as $k => $v) {
                $children = $this->get_cate_recursion($action, $v['cate_id']);
                if (!empty($children)) {
                    $tmp[$k]['children'] = $children;
                }else{
                     $tmp[$k]['children'] = [];
                }
            }
        }
        return $tmp;
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
