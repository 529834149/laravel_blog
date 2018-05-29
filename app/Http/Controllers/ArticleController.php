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
    public function index(Request $request, Article $article)
    {
       //获取列表信息
        $data = \DB::table('articles')
            ->leftJoin('categories', 'articles.cate_id', '=', 'categories.cate_id')
            ->where('articles.is_show',1)
            ->orderBy('articles.publish_time','DESC')
            ->paginate(10);
        dd($data);
       return view('article.list',  compact('data','article'));
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
    public function show(Request $request, Article $article)
    {
         // URL 矫正
        if ( ! empty($article->slug) && $article->slug != $request->slug) {
            return redirect($article->link(), 301);
        }
        //获取当前分类信息和tag标签信息
       $aid = $article['aid'];
       $article['tag_info'] = Tag::where('tid',intval($article['tags_id']))->get()->toarray();
       $re = Categories::where('cate_id',intval($article['cate_id']))->first();
       if($re['parent_id']){
           $re['parent_name'] = Categories::where('parent_id',intval($re['parent_id']))->first();
       }else{
            $re['parent_name'] = '';
       }   
       $article['cate_info'] = $re;
       //才你喜欢的
       /*
        * 1、根据当前文章id获取当前文章分类
        * 2、根据分类查找当前分类下的感觉不错的文章推荐给用户
        */
       $aid_get_cate = Article::where('aid',intval($aid))->first();//获取文章分类
       $article_uid_love_article = Article::where('cate_id',intval($aid_get_cate['cate_id']))->take(3)->get();
       
       //相关文章当前文章的往后10条数据
       $article_uid_labout_article = Article::where('cate_id',intval($aid_get_cate['cate_id']))->take(10)->get();
       //最新文章  当前分类下的时间最新的2篇
       $article_uid_new_article = Article::where('cate_id',intval($aid_get_cate['cate_id']))->orderBy('publish_time','desc')->take(2)->get();
//       Categories
        //获取当前aid详细内容
        return view('article.details',  compact('article','article_uid_love_article','article_uid_labout_article','article_uid_new_article'));
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
