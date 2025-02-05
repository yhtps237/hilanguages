<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\VideoGallery;

class VideoGalleryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'VideoGallery';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new VideoGallery());

        $grid->column('id', __('Id'));
        $grid->column('url', __('Url'));
        $grid->column('head_az', __('admin.Head_az'));
        $grid->column('head_en', __('admin.Head_en'));
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
        $show = new Show(VideoGallery::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('url', __('Url'));
        $show->field('head_az', __('admin.Head_az'));
        $show->field('head_en', __('admin.Head_en'));
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
        $form = new Form(new VideoGallery());

        $form->text('url', __('Url'));
        $form->text('head_az', __('Head az'));
        $form->text('head_en', __('admin.Head_en'));

        return $form;
    }
}
