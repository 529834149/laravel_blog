<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Article;
use App\Model\Tag;
use App\Model\Categories;
use Cache;
use Carbon\Carbon;
class DocumentsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Article $article)
    {
        
      
        $year_month = Article::selectRaw('year(created_at)  year, monthname(created_at) month ,count(*) published')
                    ->groupBy('year','month')
                    ->orderByRaw('min(created_at) desc')
                    ->get();
        $archives = array();
        foreach($year_month as $value){
             $archives[$value['year']][] = $value['month'];
        }
        $finalArr = array();
        foreach($archives as $k=>$v){
            $finalArr[] = array(
                'year' => $k,
                'month' => $v,
            );
            
        }

        $posts = Article::select('article_title','aid','publish_time','created_at')->latest()->get();
        return view('documents.list',compact('posts','finalArr'));
    }
    function get_mon_yea(Request $request, Article $article)
    {
        dd($request->all());
//        $month = 'February';
//        $year = '2018';
//        if ($month) {
//            $res = $article->whereMonth('created_at',Carbon::parse($month)->month)->get();
//        }
//
//        if ($year) {
//            $article->whereYear('created_at',$year);
//        }
//        $article = $article->get();
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
    public function show(Request $request,$tid)
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
