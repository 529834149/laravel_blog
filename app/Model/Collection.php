<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Collection extends Model
{
    protected $connection = 'mysql';
    protected $table ='collection';
    protected $primaryKey = 'id';//定义主键
//    public $timestamps = false;//类似addtime updatetime  
    public $timestamps = false;
    
}
