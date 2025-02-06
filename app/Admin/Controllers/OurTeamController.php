<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\OurTeam;

class OurTeamController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'OurTeam';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new OurTeam());
        $grid->model()->orderBy('created_at', 'desc');

        $grid->column('id', __('Id'));
        $grid->column('name_az', __('admin.Name_az'));
        $grid->column('name_en', __('admin.Name_en'));
        $grid->column('name_ru', __('admin.Name_ru'));
        $grid->column('position_az', __('admin.Position_az'));
        $grid->column('position_en', __('admin.Position_en'));
        $grid->column('position_ru', __('admin.Position_ru'));
        // $grid->column('image', __('Image'));
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
        $show = new Show(OurTeam::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name_az', __('admin.Name_az'));
        $show->field('name_en', __('admin.Name_en'));
        $show->field('name_ru', __('admin.Name_ru'));
        $show->field('position_az', __('Position_az'));
        $show->field('position_en', __('Position_en'));
        $show->field('position_ru', __('Position_ru'));
        $show->field('image', __('admin.Image'))->unescape()->as(function ($image) {
            $imageUrl = asset('storage/' . $image);
            $html = '<a href="' . $imageUrl . '" target="_blank">
                        <img src="' . $imageUrl . '" style="max-width: 60%; height: auto;" />
                    </a>';
            return htmlspecialchars_decode($html);
        });
        $show->field('about_az', __('admin.About_az'));
        $show->field('about_en', __('admin.About_en'));
        $show->field('about_ru', __('admin.About_ru'));
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
        $form = new Form(new OurTeam());

        $form->text('name_az', __('admin.Name_az'))->required();
        $form->text('name_en', __('admin.Name_en'))->required();
        $form->text('name_ru', __('admin.Name_ru'))->required();
        $form->text('position_az', __('admin.Position_az'))->required();
        $form->text('position_en', __('admin.Position_en'))->required();
        $form->text('position_ru', __('admin.Position_ru'))->required();
        $form->image('image', __('admin.Image'))
            ->removable()
            ->rules(request()->isMethod('post') ? 'required|mimes:jpeg,png,jpg,gif,webp|max:500' : 'nullable|mimes:jpeg,png,jpg,gif,webp|max:500', [
                'required' => 'Şəkil yükləmək məcburidir!',
                'mimes' => 'Yalnız JPEG, PNG, JPG və GIF formatları qəbul edilir.',
                'max' => 'Şəkil 500KB-dan böyük ola bilməz.',
            ]);
        $form->ckeditor('about_az', __('About_az'))->required();
        $form->ckeditor('about_en', __('About_en'))->required();
        $form->ckeditor('about_ru', __('About_ru'))->required();

        $form->hasMany('certificates', 'certificates', function (Form\NestedForm $form) {
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
