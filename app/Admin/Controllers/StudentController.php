<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Student;

class StudentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Student';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Student());

        $grid->column('id', __('Id'));
        $grid->column('name_az', __('admin.Name_az'));
        $grid->column('name_en', __('admin.Name_en'));
        $grid->column('name_ru', __('admin.Name_ru'));
        $grid->column('content_az', __('admin.Content_az'));
        $grid->column('content_en', __('admin.Content_en'));
        $grid->column('content_ru', __('admin.Content_ru'));
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
        $show = new Show(Student::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name_az', __('admin.Name_az'));
        $show->field('name_en', __('admin.Name_en'));
        $show->field('name_ru', __('admin.Name_ru'));
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
        $form = new Form(new Student());

        $form->text('name_az', __('admin.Name_az'));
        $form->text('name_en', __('admin.Name_en'));
        $form->text('name_ru', __('admin.Name_ru'));
        $form->ckeditor('content_az', __('admin.Content_az'));
        $form->ckeditor('content_en', __('admin.Content_en'));
        $form->ckeditor('content_ru', __('admin.Content_ru'));

        $form->hasMany('images', 'images', function (Form\NestedForm $form) {
            $form->image('image', __('admin.Image'))
                ->removable()
                ->rules(request()->isMethod('post') ? 'required|mimes:jpeg,png,jpg,gif,webp|max:500' : 'nullable|mimes:jpeg,png,jpg,gif,webp|max:500', [
                    'required' => 'Şəkil yükləmək məcburidir!',
                    'mimes' => 'Yalnız JPEG, PNG, JPG və GIF formatları qəbul edilir.',
                    'max' => 'Şəkil 500KB-dan böyük ola bilməz.',
                ]);
            $form->text('alternative', 'Alternative')->required();
        });

        return $form;
    }
}
