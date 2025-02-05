<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Certificate;

class CertificateController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Certificate';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Certificate());
        $grid->model()->orderBy('created_at', 'desc');

        $grid->column('id', __('Id'));
        $grid->column('ourTeam.name_az', __('Name az'));
        $grid->column('ourTeam.position_az', __('Position az'));
        // $grid->column('image', __('Image'));
        $grid->column('image', __('admin.Image'))->display(function ($image) {
            $imageUrl = asset('storage/' . $image);
            $html = '<div style="text-align: center;">
                    <a href="' . $imageUrl . '" target="_blank">
                        <img src="' . $imageUrl . '" style="max-width: 10%; height: auto;" />
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
        $show = new Show(Certificate::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('ourTeam.name_az', __('Name az'));
        $show->field('ourTeam.name_en', __('Name en'));
        $show->field('ourTeam.position_az', __('Position az'));
        $show->field('ourTeam.position_en', __('Position en'));
        $show->field('image', __('admin.Image'))->unescape()->as(function ($image) {
            $imageUrl = asset('storage/' . $image);
            $html = '<a href="' . $imageUrl . '" target="_blank">
                        <img src="' . $imageUrl . '" style="max-width: 60%; height: auto;" />
                    </a>';
            return htmlspecialchars_decode($html);
        });
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
        $form = new Form(new Certificate());
        $form->select('our_team_id', __('admin.name_az'))
            ->options(\App\Models\OurTeam::pluck('name_az', 'id'))
            ->required();
        // $form->text('name_az', __('Name az'));
        // $form->text('name_en', __('Name en'));
        // $form->text('position_az', __('Position az'));
        // $form->text('position_en', __('Position en'));
        // $form->image('image', __('Image'));
        $form->image('image', __('admin.Image'))
            ->removable()
            ->rules(request()->isMethod('post') ? 'required|mimes:jpeg,png,jpg,gif,webp|max:500' : 'nullable|mimes:jpeg,png,jpg,gif,webp|max:500', [
                'required' => 'Şəkil yükləmək məcburidir!',
                'mimes' => 'Yalnız JPEG, PNG, JPG və GIF formatları qəbul edilir.',
                'max' => 'Şəkil 500KB-dan böyük ola bilməz.',
            ]);
        $form->text('alternative', __('Alternative'))->required();

        return $form;
    }
}
