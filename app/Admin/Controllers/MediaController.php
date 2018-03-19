<?php

namespace App\Admin\Controllers;

use App\Model\Media;
use App\Model\Categories;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class MediaController extends Controller
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
        return Admin::grid(Media::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->body('内容')->sortable();
            $grid->excerpt('描述');
            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Media::class, function (Form $form) {
            $form->display('mid', 'ID');
            $form->text('title', '自媒体标题');
            $form->select('cate_id','所在分类')->options(Categories::selectOptions());
            $form->select('is_show','是否显示')->options([1 => '显示', 2 => '不显示']); 
            $form->editor('body')->attribute(['rows' => '20']);
            $form->display('excerpt','摘要');
            $form->text('tags_id','标签');//,多个已,分开
            $form->saving(function (Form $form) {
                $form->model()->excerpt  = make_excerpt($form->body);
                $form->model()->add_time  = time();
                
            });
            
        });
    }
}
