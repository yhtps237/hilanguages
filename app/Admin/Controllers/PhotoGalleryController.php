<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\PhotoGallery;

class PhotoGalleryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'PhotoGallery';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PhotoGallery());
        $grid->model()->orderBy('created_at', 'desc');


        $grid->column('id', __('Id'));
        $grid->column('head_az', __('admin.Head_az'));
        $grid->column('head_en', __('admin.Head_en'));
        $grid->column('head_ru', __('admin.Head_ru'));
        $grid->column('image', __('admin.Image'))->display(function ($image) {
            $imageUrl = asset('storage/' . $image);
            $html = '<div style="text-align: center;">
                    <a href="' . $imageUrl . '" target="_blank">
                        <img src="' . $imageUrl . '" style="max-width: 30%; height: auto;" />
                    </a>
                  </div>';
            return htmlspecialchars_decode($html);
        });
        $grid->column('alternative', __('Alternative'));
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
        $show = new Show(PhotoGallery::findOrFail($id));

        $show->field('id', __('Id'));
        $show->column('head_az', __('admin.Head_az'));
        $show->column('head_en', __('admin.Head_en'));
        $show->column('head_ru', __('admin.Head_ru'));
        $show->field('image', __('admin.Image'))->unescape()->as(function ($image) {
            $imageUrl = asset('storage/' . $image);
            $html = '<a href="' . $imageUrl . '" target="_blank">
                        <img src="' . $imageUrl . '" style="max-width: 60%; height: auto;" />
                    </a>';
            return htmlspecialchars_decode($html);
        });
        $show->field('alternative', __('Alternative'));
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
        $form = new Form(new PhotoGallery());

        $form->text('head_az', __('admin.Head_az'));
        $form->text('head_en', __('admin.Head_en'));
        $form->text('head_ru', __('admin.Head_ru'));
        $form->image('image', __('admin.Image'))
            ->removable()
            ->rules(request()->isMethod('post') ? 'required|mimes:jpeg,png,jpg,gif,webp|max:500' : 'nullable|mimes:jpeg,png,jpg,gif,webp|max:500', [
                'required' => 'Şəkil yükləmək məcburidir!',
                'mimes' => 'Yalnız JPEG, PNG, JPG və GIF formatları qəbul edilir.',
                'max' => 'Şəkil 500KB-dan böyük ola bilməz.',
            ]);
        $form->text('alternative', __('Alternative'))->required();

        $form->hasMany('photos', 'photos', function (Form\NestedForm $form) {
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
