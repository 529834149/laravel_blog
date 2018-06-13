<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Country extends Model
{
    protected $connection = 'mysql';
    protected $table ='countries';
    protected $primaryKey = 'id';//定义主键
//    public $timestamps = false;//类似addtime updatetime  
    public $timestamps = false;
   
    public function posts()
    {
        return $this->hasManyThrough('App\Model\Post', 'App\Model\User','country_id','user_id','id');
    }
    
}
