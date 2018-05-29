<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
class Menu_special extends Model
{
    protected $connection = 'mysql';
    protected $table ='menu_special';
    protected $primaryKey = 'id';//定义主键
//    public $timestamps = false;//类似addtime updatetime  
    public $timestamps = false;
   
}


