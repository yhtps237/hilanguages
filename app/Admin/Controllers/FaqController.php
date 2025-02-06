<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Faq;

class FaqController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Faq';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Faq());

        $grid->column('id', __('Id'));
        $grid->column('type', __('admin.Type'));
        $grid->column('head_az', __('admin.Head_az'));
        $grid->column('head_en', __('admin.Head_en'));
        $grid->column('head_ru', __('admin.Head_ru'));
        // $grid->column('content_az', __('admin.Content_az'));
        // $grid->column('content_en', __('admin.Content_en'));
        $grid->column('created_at', __('admin.Created_at'));
        $grid->column('updated_at', __('admin.Updated_at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Faq::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('type', __('admin.Type'));
        $show->field('head_az', __('admin.Head_az'));
        $show->field('head_en', __('admin.Head_en'));
        $show->field('head_ru', __('admin.Head_ru'));
        $show->field('content_az', __('admin.Content_az'));
        $show->field('content_en', __('admin.Content_en'));
        $show->field('content_ru', __('admin.Content_ru'));
        $show->field('created_at', __('admin.Created_at'));
        $show->field('updated_at', __('admin.Updated_at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Faq());

        $form->select('type', __('admin.Type'))->options([
            'Ümumi suallar' => 'Ümumi suallar',
            'Ödənişlər' => 'Ödənişlər',
        ])->required();
        $form->textarea('head_az', __('admin.Head_az'));
        $form->textarea('head_en', __('admin.Head_en'));
        $form->textarea('head_ru', __('admin.Head_ru'))->required();
        $form->textarea('content_az', __('admin.Content_az'));
        $form->textarea('content_en', __('admin.Content_en'));
        $form->textarea('content_ru', __('admin.Content_ru'))->required();

        return $form;
    }
}
