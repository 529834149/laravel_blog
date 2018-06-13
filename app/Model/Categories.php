<?php

namespace App\Model;
use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;
class Categories extends Model
{
    use ModelTree, AdminBuilder;
    protected $connection = 'mysql';
    protected $table ='categories';
    protected $primaryKey = 'cate_id';//定义主键
//    public $timestamps = false;//类似addtime updatetime  
    public $timestamps = false;
    //当前分类下的所有文章
    public function getarticle()
    {
        return $this->hasMany('App\Model\Article', 'cate_id');
    }
    
    
}
