<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use andreskrey\Readability\Configuration;
use andreskrey\Readability\ParseException;
use andreskrey\Readability\Readability;
use App\Model\Article;
use App\Model\Categories;
use App\Model\Collection;
use Illuminate\Support\Facades\Cache;
class ReadabilityController extends Controller
{
    /**
     * 实现点击标题 阅读数量+1
     */
    public function read_num(Request $request)
    {
       $id = $request->input('id');
       $key = 'file_read_'.intval($id);
       //判断key是否存在，存在+1
       if(Cache::has($key)){
           $get_key = Cache::get($key);
           $num = intval($get_key) +1;
           Cache::forever($key,$num);
           
       }else{
           Cache::forever($key,'1');
       }
       return $this->returnCode(200);
       
    }
    public function read_list(Request $request)
    {
        //1、计算数据总条数
        $tot = Collection::where('is_show',1)->count();
        //每页展示几条数据
        $length = 35;
        //2、计算总页数
        $page = ceil($tot/$length);
        //3、判断地址栏的参数是否存在
        if($request->input('page')){
           $page = $request->input('page')?$request->input('page'):1;
           $offset = ($page-1)*$length;
           //sql数据查询
            $data = Collection::where('is_show',1)
                ->orderBy('read_time','DESC')
                ->skip($offset)
                ->take($length)
                ->get();
            foreach($data as $k=>$v){
               $key = 'file_read_'.intval($v->id);
               $read_num = Cache::get($key);
               if(!$read_num){
                   $read_num = 0;
               }
               $data[$k]->read_num =$read_num;
            }
            if($data){
                 return $this->returnCode(200,'',$data);
            }else{
                 return $this->returnCode(400);
            }
           
            return $data;
        }
        //4、查询数据库获取数据
        $data = Collection::where('is_show',1)
                ->orderBy('read_time','DESC')
                ->take($length)
                ->get();
          foreach($data as $k=>$v){
               $key = 'file_read_'.intval($v->id);
               $read_num = Cache::get($key);
               if(!$read_num){
                   $read_num = 0;
               }
               $data[$k]->read_num =$read_num;
          }
        return view('readability.list',  compact('data','page'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('readability.create');
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
            $arr['read_time'] = time();
            $arr['click_num'] = 0;
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
        $id = intval($id);
        $details = Collection::where('id',$id)->where('is_show',1)->first();
        return view('readability.details',  compact('details'));
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
