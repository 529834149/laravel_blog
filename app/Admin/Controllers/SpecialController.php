<?php

namespace App\Admin\Controllers;

use App\Model\Menu_special;
use App\Model\Menu;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class SpecialController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('header');
            $content->description('description');
            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Menu_special::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->title('专栏题目')->sortable();
            $grid->author('作者')->sortable();
            $grid->publish_time('推荐时间')->sortable();
            $grid->image('专栏图片')->sortable();
            $grid->access('浏览数')->sortable();
            $grid->like('喜欢数')->sortable();
            $grid->is_del('是否删除')->sortable()->display(function($is_del){
                if($is_del == 'y'){
                    return '<span style="color:red">删除</span>';
                }else{
                     return '<span style="color:green">正常</span>';
                }
            });
            $grid->is_publish('是否推荐')->sortable()->display(function($is_publish){
                if($is_publish == 'y'){
                    return '<span style="color:red">推荐</span>';
                }else{
                     return '<span style="color:green">不推荐</span>';
                }
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Menu_special::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title','专栏题目');
            $form->text('author','作者');
            $form->date('publish_time','发布时间');
            $form->image('pic','封页图片');
            $form->select('is_publish','是否推荐')->options(['n' => '不推荐', 'y' => '推荐']); 
            $form->select('is_del','是否删除')->options(['n' => '正常', 'y' => '删除']); 
            $form->select('menu_id','所在栏目分类')->options(function ($did) {
                $menu = Menu::where('menu_id', intval($did))->first();
                if ($menu) {
                    return [$menu->menu_id => $menu->name];
                }
            })->ajax('/admin/zhuanlan','menu_id','name')->rules('required');
            
        });
    }
    public function info(\Request $request){
      $q = \Request::input('q'); 
      return Menu::where('name', 'like', "%$q%")->paginate(10, ['menu_id', 'name']);
      
    }
}
