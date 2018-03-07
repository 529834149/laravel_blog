<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use andreskrey\Readability\Configuration;
use andreskrey\Readability\ParseException;
use andreskrey\Readability\Readability;
use App\Model\Article;
use App\Model\Categories;
use App\Model\Collection;
class ReadabilityController extends Controller
{
    public function read_list()
    {
          $read_list = \DB::connection('mysql')
                ->table('collection')
                ->get();
        return view('readability.list',  compact('read_list'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $article_list = \DB::connection('mysql')
//                ->table('articles')
//                ->select('tags.name as tage_name','tags.tid','articles.cate_id','articles.aid','articles.article_title','articles.desc','articles.publish_time','articles.sort_num','articles.tags_id','categories.cate_id','categories.title')
//                ->leftJoin('categories','articles.cate_id','=','categories.cate_id')
//                ->leftJoin('tags','tags.tid','=','articles.tags_id')
//                ->where('articles.is_show',1)
//                ->where('articles.cate_id',2)
//                ->paginate(20);
//        return view('home.list', ['article_list' => $article_list]);
        return view('read.list');
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
     * collection放在抓取表中
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * composer require andreskrey/readability.php
     */
    public function store(Request $request)
    {
        $url = $request->input('url');
        $author = $request->input('author');
        $source = $request->input('source');
        $validator = \Validator::make($request->all(), [
            'url' => 'required',
            'author' => 'required',
            'source' => 'required',
        ]);

        if ($validator->fails()) {
             return back()->withInput()->with('danger', '参数错误！');
        }
        $readability = new Readability(new Configuration());
//        $html = file_get_contents($url);
        $html = Article::https_request($url);
        try {
            $arr = [];
            $readability->parse($html);
            $arr['title'] = $readability->getTitle() ? $readability->getTitle() :'' ;//获取文章标题
//            $arr['author'] = $readability->getAuthor() ? $readability->getAuthor() :'' ;//获取文章作者
            $arr['author'] = $author ? $author :'' ;//当前谁操作的
            $arr['content'] = $readability->getContent() ? $readability->getContent() :'' ;//获取文章内容
            //匹配文章中的第一场图片
            $arr['title'] = $this->replace_diffNotes($arr['title']);
            $arr['is_show'] = 1;
            $arr['read_time'] = 0;
            $arr['click_num'] = time();
            $arr['source'] = $source;
            
            $coll = Collection::insert($arr);
            if($coll){
                return back()->withInput()->with('success', '抓取成功！');
            }else{
                return back()->withInput()->with('danger', '采集失败！');
            }
        } catch (ParseException $e) {
            return '';
        }
        
        
       
    }
     public function replace_diffNotes($title)
    {
        $content = preg_replace('/\n/' , '' , $title);
        return $content;
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
