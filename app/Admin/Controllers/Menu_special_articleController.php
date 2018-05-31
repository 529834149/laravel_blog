<?php

namespace App\Admin\Controllers;

use App\Model\Menu_special_article;
use App\Model\Menu_special;
use App\Admin\Extensions\Form\CKEditor;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
 Form::extend('ckeditor', CKEditor::class);
class Menu_special_articleController extends Controller
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
        return Admin::grid(Menu_special_article::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->title('文章标题')->sortable();
            $grid->author('文章作者')->sortable();
            $grid->originate('源于')->sortable();
            $grid->menu_special_id('所在专栏')->sortable();
            $grid->access('浏览数')->sortable();
            $grid->publish_time('发表时间')->sortable();
            $grid->is_show('是否展示')->sortable()->display(function($is_show){
                if($is_show == 'n'){
                    return '<span style="color:red">隐藏</span>';
                }else{
                     return '<span style="color:green">正常</span>';
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
       
        return Admin::form(Menu_special_article::class, function (Form $form) {
            
            
            $form->display('id', 'ID');
            $form->text('title','文章标题');
            $form->text('author','文章作者');
            $form->text('originate','源于')->placeholder('版权所有,原创或文章源于P9阿里工程师');
            $form->textarea('desc','简述标题')->rows(10);
            $form->select('menu_special_id','所在栏目分类')->options(function ($did) {
                $menu_special = Menu_special::where('id', intval($did))->first();
                if ($menu_special) {
                    return [$menu_special->id => $menu_special->title];
                }
            })->ajax('/admin/zhuanlan_special','id','title')->rules('required');
            $form->datetime('publish_time','发布时间')->format('YYYY-MM-DD HH:mm:ss');
            $form->select('is_show','是否展示')->options(['n' => '隐藏', 'y' => '展示']); 
            $form->number('access', '浏览数');
            $form->editor('content','文章内容');
            
        });
    }
    public function info(\Request $request){
      $q = \Request::input('q'); 
      return Menu_special::where('title', 'like', "%$q%")->paginate(10, ['id', 'title']);
    }
}
