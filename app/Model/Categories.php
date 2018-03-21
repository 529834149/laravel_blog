<?php

namespace App\Model;
use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;
class Categories extends Model
{
    use ModelTree, AdminBuilder;
    protected $connection = 'mysql';
    protected $table ='categories';
    protected $primaryKey = 'cate_id';//定义主键
//    public $timestamps = false;//类似addtime updatetime  
    public $timestamps = false;
   
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->setParentColumn('parent_id');
        $this->setOrderColumn('order');
        $this->setTitleColumn('title');
    }

}
