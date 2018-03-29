<?php

namespace App\Admin\Controllers;

use App\Model\CaseList;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class CaseListController extends Controller
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
        return Admin::grid(CaseList::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->title('标题');
            $grid->lead_image_url()->image('http://www.bodys.top/public/upload/',100,100);
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(CaseList::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title','精选标题')->rules('required');
            $form->image('lead_image_url','首图')->uniqueName();
            $form->editor('content','文章内容')->attribute(['rows' => '20']);
            $form->select('type','选择类型')->options([1 => 'PHP', 2 => 'WEB',3=>'服务器',4=>'python']);
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
