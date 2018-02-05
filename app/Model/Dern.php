<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Moloquent as Eloquent;
class Dern extends Eloquent
{
    protected $connection = 'mongodb';
    protected $table = 'dern';
    protected $primaryKey = 'did';//定义主键
    public $timestamps = false;
    protected $guarded = [];
    protected $hidden = ['_id'];
   
    
}
