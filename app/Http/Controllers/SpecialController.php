<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Article;
use App\Model\Tag;
use App\Model\Menu;
use App\Model\Menu_special;
use App\Model\Menu_special_article;
use App\Model\Categories;
use App\Model\Comment;
use Cache;
use Carbon\Carbon;
use EndaEditor;
class SpecialController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      //获取网站各个数量数据栏目数:15 |文章数:50|分类数:50|评论数:50|总浏览数:50|喜欢数:50
      $param['cate_num'] = Menu::where('is_del','n')->count();
      $param['lanmu_num'] = Menu_special::where('is_del','n')->count();
      $param['article_num'] = Menu_special_article::where('is_show','y')->count();
        //最新文章最新文章top
        //最新文章最新文章top
        $new_article = \DB::table('menu_special_article')
                ->leftJoin('menu_special','menu_special.id','=','menu_special_article.menu_special_id')
                ->select('menu_special_article.title','menu_special_article.publish_time','menu_special_article.id','menu_special_article.access','menu_special.title as cate')
                ->orderBy('menu_special_article.publish_time','desc')
                ->take(10)
                ->get();
        
        $data = \DB::table('menu_special')
                ->where('menu_special.is_del','n')
                ->where('menu_special.is_publish','y')
                ->leftJoin('menu','menu.menu_id','=','menu_special.menu_id')
                ->orderBy('menu_special.publish_time','desc')
                ->take(2)
                ->get();
         $item_data = \DB::table('menu_special')
                ->where('menu_special.is_del','n')
                ->where('menu_special.menu_id',1)
                ->leftJoin('menu','menu.menu_id','=','menu_special.menu_id')
                ->orderBy('menu_special.publish_time','desc')
                ->take(6)
                ->get();
//        dd($new_article);
        // 获取当前
        $menu = Menu::where('is_del','n')->get();
        return view('special.list',  compact('menu','data','item_data','new_article','param'));
    }
    public function details(Request $request)
    { 
       
        $aid = $request->input('aid');
        \DB::table('menu_special_article')->where('id',intval($aid))->increment('access');
        $date = Menu_special_article::where('id',intval($aid))->first();
        return view('special.article_apecial',  compact('date'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function insertInfo(Request $request)
    {
        $param['id'] = intval($request->input('aid'));
        $param['content'] = $request->input('content');
        $param['date'] = date('Y-m-d H:i:s',time());
        $param['reply_id'] = intval($request->input('reply_id'));
        $param['uid'] = intval($request->input('uid'));
        $comont = Comment::insert($param);
        if($comont){
            return $this->returnCode(200,'',$param);
        }else{
           return $this->returnCode(400); 
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $status = isset($request->status) ? 1 :0;
        if($status){
            //增加一次访问次数
            \DB::table('menu_special')->where('id',intval($id))->increment('access');
            $menu_special = Menu_special::where('id',intval($id))->first();
            $sp_article_list = Menu_special_article::where('menu_special_id',intval($id))->get();
//            $sp_article_list = \DB::table('menu_special_article')
//                ->leftJoin('menu_special','menu_special.id','=','menu_special_article.menu_special_id')
//                ->get();
            return view('special.details',  compact('sp_article_list','menu_special'));
        }else{
            $list = Menu_special::where('menu_id',intval($id))->where('is_del','n')->take(6)->orderBy('publish_time','desc')->get();
            return $this->returnCode(200,'',$list);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
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
