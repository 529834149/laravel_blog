<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Common extends Model
{
    protected $connection = 'mysql';
    protected $table ='common';
    public $timestamps = false;
    protected $guarded = [];//忽略那些字段被插入 
    protected $primaryKey = 'id';//定义主键  
   
    
}


