<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Tag;
use App\Model\Categories;
use Cache;
use App\Model\Combat;
use App\Model\Article;
class RebilityController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Combat $combat)
    {
       $internat = $_SERVER['SERVER_NAME'];  
       $caseList_info =Combat::orderBy('created_at','desc')->paginate(10);;
       return view("boutique/list",  compact('caseList','caseList_info','internat'));
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
    public function show(Request $request,$id)
    {
       //才你喜欢的
       /*
        * 1、根据当前文章id获取当前文章分类
        * 2、根据分类查找当前分类下的感觉不错的文章推荐给用户
        */
       $article_uid_love_article = Article::orderBy('publish_time','DESC')->take(3)->get();
       
       //相关文章当前文章的往后10条数据
       $article_uid_labout_article = Article::orderBy('publish_time','ASC')->take(10)->get();
      
       
       //最新文章  当前分类下的时间最新的2篇
       $article_uid_new_article = Article::orderBy('publish_time','desc')->take(2)->get();
//       Categories
        //获取当前aid详细内容
//        return view('article.details',  compact('article','article_uid_love_article','article_uid_labout_article','article_uid_new_article'));
        
        
        

        $list = Combat::where('id',intval($id))->first();
        return view('boutique.details',  compact('list','article_uid_love_article','article_uid_labout_article','article_uid_new_article'));
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
