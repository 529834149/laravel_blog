<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Combat_click extends Model
{
    protected $connection = 'mysql';
    protected $table ='combat';
    protected $primaryKey = 'id';//定义主键
//    public $timestamps = false;//类似addtime updatetime  
    public $timestamps = false;
   
    public function link($params = [])
    {
        return route('boutique.show', array_merge([$this->id, $this->slug], $params));
    }
}
