<?php

namespace App\Admin\Controllers;

use App\Model\Menu;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class MenuController extends Controller
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
        return Admin::grid(Menu::class, function (Grid $grid) {

            $grid->menu_id('专栏ID')->sortable();
            $grid->name('专题名')->sortable();
            $grid->sort('排序')->sortable();
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
        return Admin::form(Menu::class, function (Form $form) {
            $form->display('menu_id', 'ID');
            $form->text('name', '专题名');
            $form->number('sort', '排序');
            $form->select('is_publish','是否推荐')->options(['n' => '不推荐', 'y' => '推荐']); 
              
        });
    }
}
