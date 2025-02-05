<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Blog;

class BlogController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Blog';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Blog());
        $grid->model()->orderBy('created_at', 'desc');


        $grid->column('id', __('Id'));
        $grid->column('head_az', __('admin.Head_az'));
        $grid->column('head_en', __('admin.Head_en'));
        $grid->column('content_az', __('admin.Content_az'));
        $grid->column('content_en', __('admin.Content_en'));
        $grid->column('image', __('admin.Image'))->display(function ($image) {
            $imageUrl = asset('storage/' . $image);
            $html = '<div style="text-align: center;">
                    <a href="' . $imageUrl . '" target="_blank">
                        <img src="' . $imageUrl . '" style="max-width: 30%; height: auto;" />
                    </a>
                  </div>';
            return htmlspecialchars_decode($html);
        });

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
        $show = new Show(Blog::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('head_az', __('admin.Head_az'));
        $show->field('head_en', __('admin.Head_en'));
        $show->field('content_az', __('admin.Content_az'));
        $show->field('content_en', __('admin.Content_en'));
        $show->field('image', __('admin.Image'))->unescape()->as(function ($image) {
            $imageUrl = asset('storage/' . $image);
            $html = '<a href="' . $imageUrl . '" target="_blank">
                        <img src="' . $imageUrl . '" style="max-width: 60%; height: auto;" />
                    </a>';
            return htmlspecialchars_decode($html);
        });
        $show->field('description_az', __('admin.Description_az'));
        $show->field('description_en', __('admin.Description_en'));
        $show->field('keyword', __('admin.Keyword'));
        $show->field('date', __('admin.Date'));
        $show->field('slug_az', __('admin.Slug_az'));
        $show->field('slug_en', __('admin.Slug_en'));
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
        $form = new Form(new Blog());

        $form->text('head_az', __('admin.Head_az'))->required();
        $form->text('head_en', __('admin.Head_en'))->required();
        $form->ckeditor('content_az', __('admin.Content_az'))->required();
        $form->ckeditor('content_en', __('admin.Content_en'))->required();
        $form->image('image', __('admin.Image'))
            ->removable()
            ->rules(request()->isMethod('post') ? 'required|mimes:jpeg,png,jpg,gif,webp|max:500' : 'nullable|mimes:jpeg,png,jpg,gif,webp|max:500', [
                'required' => 'Şəkil yükləmək məcburidir!',
                'mimes' => 'Yalnız JPEG, PNG, JPG və GIF formatları qəbul edilir.',
                'max' => 'Şəkil 500KB-dan böyük ola bilməz.',
            ]);
        $form->text('description_az', __('admin.Description_az'))->required();
        $form->text('description_en', __('admin.Description_en'))->required();
        $form->text('keyword', __('admin.Keyword'))->required();
        $form->date('date', __('admin.Date'))->default(date('Y-m-d'))->required();

        return $form;
    }
}
