<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Role_users extends Model
{
    protected $connection = 'mysql';
    protected $table ='admin_role_users';
    protected $primaryKey = 'id';//定义主键
//    public $timestamps = false;//类似addtime updatetime  
    public $timestamps = false;
   
    
    
}
