<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Media extends Model
{
    protected $connection = 'mysql';
    protected $table ='media';
    protected $primaryKey = 'mid';//定义主键
//    public $timestamps = false;//类似addtime updatetime  
    public $timestamps = false;
    public static function https_request($url,$data = null)
    {
        
    }


}
