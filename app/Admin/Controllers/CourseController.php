<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Course;

class CourseController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Course';


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Course());
        $grid->model()->orderBy('created_at', 'desc');

        $grid->column('id', __('Id'));
        // $grid->column('image1', __('admin.Image1'));
        // $grid->column('image2', __('admin.Image2'));
        $grid->column('head_az', __('admin.Head_az'));
        $grid->column('head_en', __('admin.Head_en'));
        $grid->column('head_ru', __('admin.Head_ru'));
        $grid->column('image1', __('admin.Image1'))->display(function ($image) {
            $imageUrl = asset('storage/' . $image);
            $html = '<div style="text-align: center;">
                    <a href="' . $imageUrl . '" target="_blank">
                        <img src="' . $imageUrl . '" style="max-width: 30%; height: auto;" />
                    </a>
                  </div>';
            return htmlspecialchars_decode($html);
        });
        $grid->column('image2', __('admin.Image2'))->display(function ($image) {
            $imageUrl = asset('storage/' . $image);
            $html = '<div style="text-align: center;">
                    <a href="' . $imageUrl . '" target="_blank">
                        <img src="' . $imageUrl . '" style="max-width: 30%; height: auto;" />
                    </a>
                  </div>';
            return htmlspecialchars_decode($html);
        });
        $grid->column('help_text_az', __('admin.Help_text_az'));
        $grid->column('help_text_en', __('admin.Help_text_en'));
        $grid->column('help_text_ru', __('admin.Help_text_ru'));
        $grid->column('description_az', __('admin.Description_az'));
        $grid->column('description_en', __('admin.Description_en'));
        $grid->column('description_ru', __('admin.Description_ru'));
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
        $show = new Show(Course::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('head_az', __('admin.Head_az'));
        $show->field('head_en', __('admin.Head_en'));
        $show->field('head_ru', __('admin.Head_ru'));
        $show->field('help_text_az', __('admin.Help_text_az'));
        $show->field('help_text_en', __('admin.Help_text_en'));
        $show->field('help_text_ru', __('admin.Help_text_ru'));
        $show->field('image1', __('admin.Image1'))->unescape()->as(function ($image) {
            $imageUrl = asset('storage/' . $image);
            $html = '<a href="' . $imageUrl . '" target="_blank">
                        <img src="' . $imageUrl . '" style="max-width: 60%; height: auto;" />
                    </a>';
            return htmlspecialchars_decode($html);
        });
        $show->field('image2', __('admin.Image2'))->unescape()->as(function ($image) {
            $imageUrl = asset('storage/' . $image);
            $html = '<a href="' . $imageUrl . '" target="_blank">
                        <img src="' . $imageUrl . '" style="max-width: 60%; height: auto;" />
                    </a>';
            return htmlspecialchars_decode($html);
        });
        $show->field('content_az', __('admin.Content_az'));
        $show->field('content_en', __('admin.Content_en'));
        $show->field('content_ru', __('admin.Content_ru'));
        $show->field('description_az', __('admin.Description_az'));
        $show->field('description_en', __('admin.Description_en'));
        $show->field('description_ru', __('admin.Description_ru'));
        $show->field('slug_az', __('admin.Slug_az'));
        $show->field('slug_en', __('admin.Slug_en'));
        $show->field('slug_ru', __('admin.Slug_ru'));
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
        $form = new Form(new Course());

        // $form->text('image1', __('Image1'));
        // $form->text('image2', __('Image2'));
        $form->text('head_az', __('admin.Head_az'))->required();
        $form->text('head_en', __('admin.Head_en'))->required();
        $form->text('head_ru', __('admin.Head_ru'))->required();
        $form->text('help_text_az', __('admin.Help_text_az'))->required();
        $form->text('help_text_en', __('admin.Help_text_en'))->required();
        $form->text('help_text_ru', __('admin.Help_text_ru'))->required();
        $form->ckeditor('content_az', __('admin.Content_az'))->required();
        $form->ckeditor('content_en', __('admin.Content_en'))->required();
        $form->ckeditor('content_ru', __('admin.Content_ru'))->required();
        $form->image('image1', __('admin.Image1'))
            ->removable()
            ->rules(request()->isMethod('post') ? 'required|mimes:jpeg,png,jpg,gif,webp|max:500' : 'nullable|mimes:jpeg,png,jpg,gif,webp|max:500', [
                'required' => 'Şəkil yükləmək məcburidir!',
                'mimes' => 'Yalnız JPEG, PNG, JPG və GIF formatları qəbul edilir.',
                'max' => 'Şəkil 500KB-dan böyük ola bilməz.',
            ]);
        $form->image('image2', __('admin.Image2'))
            ->removable()
            ->rules(request()->isMethod('post') ? 'required|mimes:jpeg,png,jpg,gif,webp|max:500' : 'nullable|mimes:jpeg,png,jpg,gif,webp|max:500', [
                'required' => 'Şəkil yükləmək məcburidir!',
                'mimes' => 'Yalnız JPEG, PNG, JPG və GIF formatları qəbul edilir.',
                'max' => 'Şəkil 500KB-dan böyük ola bilməz.',
            ]);
        $form->text('description_az', __('admin.Description_az'))->required();
        $form->text('description_en', __('admin.Description_en'))->required();
        $form->text('description_ru', __('admin.Description_ru'))->required();
        // $form->text('slug_az', __('Slug az'));
        // $form->text('slug_en', __('Slug en'));
        // $form->text('slug_ru', __('Slug ru'));

        return $form;
    }
}
