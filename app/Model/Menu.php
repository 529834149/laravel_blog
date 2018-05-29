<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
class Menu extends Model
{
    protected $connection = 'mysql';
    protected $table ='menu';
    protected $primaryKey = 'menu_id';//定义主键
//    public $timestamps = false;//类似addtime updatetime  
    public $timestamps = false;
    
   
}


