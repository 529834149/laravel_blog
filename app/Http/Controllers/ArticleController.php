<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Article;
use App\Model\Tag;
use App\Model\Categories;
use Cache;

class ArticleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,  Article $article)
    {
        $get_article = $article->get_article();
        
        return view('home.article.list',  compact('get_article'));
    }
    public function archived_posts(Request $request,  Article $article)
    {
        $select = \DB::table('articles')->select('*',\DB::raw('date_format(from_unixtime(publish_time),"%Y") as year'),\DB::raw('date_format(from_unixtime(publish_time),"%m") as month'),\DB::raw('date_format(from_unixtime(publish_time),"%d") as day'))->orderBy('publish_time','desc')->get();
        $newArray = [];
        foreach($select as $k=>$item){
            if (isset($newArray[$item->year])) {
                 $newArray[$item->year][$item->month][] = ['title'=>$item->article_title,'aid'=>$item->aid,'day'=>$item->day,'month'=>$item->month];
            } else {
                $newArray[$item->year] = [ $item->month => [['title'=>$item->article_title,'aid'=>$item->aid,'day'=>$item->day,'month'=>$item->month]]];
            }
        }
        return view('home.article.archived_posts',  compact('newArray'));
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
        $article_details = Article::get_one_article($aid);
        return view('home.article.details',compact('article_details'));
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
