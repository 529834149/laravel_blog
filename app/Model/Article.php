<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Article extends Model
{
    protected $connection = 'mysql';
    protected $table ='articles';
    protected $primaryKey = 'aid';//定义主键
//    public $timestamps = false;//类似addtime updatetime  
    public $timestamps = false;
    
}
