<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Posts extends Model
{
    protected $connection = 'mysql';
    protected $table ='posts';
    protected $primaryKey = 'id';//定义主键
//    public $timestamps = false;//类似addtime updatetime  
    public $timestamps = false;
   
    
}
