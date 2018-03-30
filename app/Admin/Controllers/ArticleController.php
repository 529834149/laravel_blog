<?php

namespace App\Admin\Controllers;

use App\Model\Article;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

use App\Model\Categories;
use Encore\Admin\Widgets\Table;
use Illuminate\Support\MessageBag;
use Encore\Admin\Grid\Tools\BatchActions as BatchActions;
use Encore\Admin\Auth\Permission;
use Encore\Admin\Grid\Column;
class ArticleController extends Controller
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
        return Admin::grid(Article::class, function (Grid $grid) {

            $grid->aid('ID')->sortable();
            $grid->article_title('文章标题')->sortable();
            $grid->cate_id('所在分类')->sortable();
            $grid->sort_num('浏览数')->sortable()->display(function($sort_num){
                return '浏览'.$sort_num.'次';
            });
            
            $grid->publish_time('发表时间')->sortable();

        });
    }
    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Article::class, function (Form $form) {

            $form->display('aid', 'ID');
            $form->text('motto', '文章详情页名人名言');
            $form->text('article_title', '文章标题');
            $form->select('cate_id','所在分类')->options(Categories::selectOptions());
            $form->textarea('desc','文章简述')->rules('required');
            $form->select('is_show','是否显示')->options([1 => '显示', 2 => '不显示']); 
            $form->editor('content')->attribute(['rows' => '20']);
            $form->saved(function (Form $form) {
                $aid = $form->model()->aid;
                $time =time();
                Article::where('aid',intval($aid))->update(['publish_time'=>intval($time),'time_infomation'=>intval($time)]);
            });
        });
    }
}
