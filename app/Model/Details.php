<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Details extends Model
{
    protected $connection = 'mysql';
    protected $table ='details';
    protected $primaryKey = 'did';//定义主键
//    public $timestamps = false;//类似addtime updatetime  
    public $timestamps = false;
   
    
}
