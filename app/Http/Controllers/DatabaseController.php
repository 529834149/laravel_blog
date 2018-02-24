<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Article;
use App\Model\Categories;
use DB;
class DatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article_list = \DB::connection('mysql')
                ->table('articles')
                ->select('tags.name as tage_name','tags.tid','articles.cate_id','articles.aid','articles.article_title','articles.desc','articles.publish_time','articles.sort_num','articles.tags_id','categories.cate_id','categories.title')
                ->leftJoin('categories','articles.cate_id','=','categories.cate_id')
                ->leftJoin('tags','tags.tid','=','articles.tags_id')
                ->where('articles.is_show',1)
                ->where('articles.cate_id',4)
                ->paginate(20);
//        dd($article_list);
//        return view('home.list', ['article_list' => $article_list]);
        return view('database_all.list', compact('article_list'));
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
    public function show($id)
    {
        //
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
