<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Article;
use App\Model\Tag;
use App\Model\Menu;
use App\Model\Menu_special;
use App\Model\Menu_special_article;
use App\Model\Categories;
use Cache;
use Carbon\Carbon;
class SpecialController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = \DB::table('menu_special')
                ->where('menu_special.is_del','n')
                ->where('menu_special.is_publish','y')
                ->leftJoin('menu','menu.menu_id','=','menu_special.menu_id')
                ->orderBy('menu_special.publish_time','desc')
                ->take(2)
                ->get();
         $item_data = \DB::table('menu_special')
                ->where('menu_special.is_del','n')
                ->leftJoin('menu','menu.menu_id','=','menu_special.menu_id')
                ->orderBy('menu_special.publish_time','desc')
                ->take(6)
                ->get();
        // 获取当前
        $menu = Menu::where('is_del','n')->get();
        return view('special.list',  compact('menu','data','item_data'));
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
    public function store(Request $request)
    {
        //
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
