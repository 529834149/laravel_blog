<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Moloquent as Eloquent;
class BekeeTitle extends Eloquent
{
    protected $connection = 'mongodb';
    protected $table = 'n_blog';
    protected $primaryKey = '_id';//定义主键
    public $timestamps = false;
}



