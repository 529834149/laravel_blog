<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Moloquent as Eloquent;
class Article extends Eloquent
{
    protected $connection = 'mongodb';
    protected $table = 'article';
    protected $primaryKey = 'aid';//定义主键
    public $timestamps = false;
    protected $guarded = [];
    protected $hidden = ['_id'];

    
}
