<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cache;
use App\Model\Click_zan;
use App\Model\Article;
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
            
        }else if($type == 'click_zan'){
           //获取当前用户点赞哪篇文章 一个Ip一天只能点击一次
            $param = [
                'ip'=>$_SERVER['REMOTE_ADDR'],
                'click_time'=>time(),
                'aid'=>$aid
            ];
            //判断今天是否被点击过
            $today =  date('Y-m-d');
            //获取当前ip时间
            $is_ex_ip = Click_zan::where('ip',$param['ip'])->where('aid',$aid)->first();
            
            
            if($is_ex_ip){
                if($today == date('Y-m-d',intval($is_ex_ip['click_time']))){
                    return $this->returnCode('400','今天已经点击过该文章了','');
                }else{
                    \DB::table('articles')->where('aid',$aid)->increment('click');
                    Click_zan::where('ip',$param['ip'])->where('aid',$aid)->update(['click_time'=>$param['click_time']]);
                    $click_num = Article::where('aid',$aid)->first();
                    return $this->returnCode('200','谢谢参与',$click_num['click']);
                }
            }else{
                //我的di
                \DB::table('articles')->where('aid',$aid)->increment('click');
                Click_zan::insert($param);
                $click_num = Article::where('aid',$aid)->first();
                return $this->returnCode('200','谢谢参与，帅爆了',$click_num['click']);
            }
            //获取当前文章下的所有文章信息
           
        }else{
            
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
