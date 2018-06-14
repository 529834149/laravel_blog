<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Article;
use App\Model\Collection;
use App\Model\Tag;
use App\Model\Categories;
use Cache;
/**
 * Combat 最新资讯新闻
 */
class InternetController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,  Article $article)
    {
        $internet = Collection::where('is_show',1)->paginate(30);
        return view('home.internet.list',compact('internet'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     * @搜索功能
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
       
        $aid = intval($id);
        if(!$aid){
            return $this->returnCode(400,'没传必要参数');
        }
        //获取当前文章详情信息
        $internet_details = \DB::connection('mysql')
                ->table('collection')
                ->where('id',intval($aid))
                ->where('is_show',1)
                ->first();
        return view('home.internet.details',compact('internet_details'));
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
