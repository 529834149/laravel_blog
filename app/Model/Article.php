<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Article extends Model
{
//    https://laravel-china.org/docs/laravel/5.4/pagination/1260
    protected $connection = 'mysql';
    protected $table ='articles';
    protected $primaryKey = 'aid';//定义主键
//    public $timestamps = false;//类似addtime updatetime  
    public $timestamps = false;
    public static function get_article()
    {
        $result = \DB::connection('mysql')
                ->table('articles')
                ->leftJoin('categories', 'categories.cate_id', '=', 'articles.cate_id') 
                ->leftJoin('tags', 'tags.tags_id', '=', 'articles.tags_id') 
                ->where('articles.is_show',1)
                ->paginate(20);
        return $result;
    }
//    获取单条文章
    public static function get_one_article($aid)
    {
        $result = \DB::connection('mysql')
                ->table('articles')
                ->leftJoin('categories', 'categories.cate_id', '=', 'articles.cate_id') 
                ->leftJoin('tags', 'tags.tags_id', '=', 'articles.tags_id') 
                ->where('articles.aid',$aid)
                ->where('articles.is_show',1)
                ->first();
        return $result;
    }
    //通过当前分类id获取下的所有文章
    public static function get_cate_article($cate_id)
    {
        $result = \DB::connection('mysql')
                ->table('articles')
                ->where('articles.cate_id',$cate_id)
                ->leftJoin('categories', 'categories.cate_id', '=', 'articles.cate_id') 
                ->leftJoin('tags', 'tags.tags_id', '=', 'articles.tags_id') 
                ->where('articles.is_show',1)
                ->paginate(20);
        return $result;
    }
}


