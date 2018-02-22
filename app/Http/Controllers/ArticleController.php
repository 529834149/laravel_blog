<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Article;
use App\Model\Categories;
use DB;
class ArticleController extends Controller
{
    /**
     * 
     * @param type $aid 文章id
     * @return 文章浏览次数
     */
    public function update_click(Request $request)
    {
        $aid = intval($request->input('aid'));
        
        $res = DB::table('articles')->where('aid',$aid)->increment('sort_num');
        $sort_num = Article::select('sort_num')->where('aid',$aid)->first();
        return $sort_num['sort_num'];
        
    }
    /**
     * 
     * @return type 主要默认home 为首页数据
     */
    public function homes()
    {
        $article_list = \DB::connection('mysql')
                ->table('articles')
                ->select('tags.name as tage_name','tags.tid','articles.cate_id','articles.aid','articles.article_title','articles.desc','articles.publish_time','articles.sort_num','articles.tags_id','categories.cate_id','categories.title')
                ->leftJoin('categories','articles.cate_id','=','categories.cate_id')
                ->leftJoin('tags','tags.tid','=','articles.tags_id')
                ->where('articles.is_show',1)
                ->paginate(2);
//        return view('home.list', ['article_list' => $article_list]);
        return view('home.list', compact('article_list'));
    }
    /**
     * 以下方法主要处理分类信息
     */
    public function  index()
    {
        
    }
    /**
     * 
     * @param type $aid 文章id
     * @return 当用户点击文章列表时，对当前数量进行+1
     */
    public function click_number($aid)
    {
        Article::where('aid',intval($aid))->update(['']);
    }
    public function show(Request $request,$id)
    {
        $where = array(
          'is_show'=>1,
        );
        $details = Article::where($where)->first()->toarray();
        //获取上一条和下一条
        return view('home.details', compact('details'));
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
