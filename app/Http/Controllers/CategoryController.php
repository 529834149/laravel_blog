<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cache;
use App\Model\Click_zan;
use App\Model\Article;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * 获取单个文章的访问量
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取列表信息
        $data = \DB::table('articles')
            ->leftJoin('categories', 'articles.cate_id', '=', 'categories.cate_id')
            ->where('articles.is_show',1)
            ->orderBy('articles.publish_time','DESC')
            ->paginate(10);

       return view('article.list',  compact('data','article'));
        
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
    public function show(Request $request,$aid)
    {
        //获取列表信息
        $data = \DB::table('articles')
            
            ->leftJoin('categories', 'articles.cate_id', '=', 'categories.cate_id')
            ->where('articles.is_show',1)
            ->where('categories.cate_id',$aid)
            ->orderBy('articles.publish_time','DESC')
            ->paginate(10);
       return view('article.list',  compact('data','article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
