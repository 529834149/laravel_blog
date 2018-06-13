<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Tag extends Model
{
    protected $connection = 'mysql';
    protected $table ='tags';
    protected $primaryKey = 'tags_id';//定义主键
//    public $timestamps = false;//类似addtime updatetime  
    public $timestamps = false;
    
    public function get_article()
    {
        return $this->hasMany('App\Model\Article','tags_id');
    }

}
