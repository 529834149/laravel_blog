<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cache;
class CacheController extends Controller
{
    /**
     * Display a listing of the resource.
     * 获取单个文章的访问量
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $aid = $request->input('aid');
        $type = $request->input('type');
        if($type =='articles'){
            $read_key = 'article_read_aid_'.$aid;
            //当前key是否存在
            if (Cache::has($read_key)) {
    //            Cache::increment($read_key);
                $value = Cache::get($read_key);
                $nums = intval($value)+1;
                Cache::forever($read_key,$nums);
            }else{
                Cache::forever($read_key,1);
            }
            $value = Cache::get($read_key);
            return $this->returnCode(200,'',$value);
        }
        
        
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
