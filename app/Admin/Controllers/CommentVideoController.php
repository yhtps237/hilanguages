<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\CommentVideo;

class CommentVideoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CommentVideo';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CommentVideo());

        $grid->column('id', __('Id'));
        $grid->column('url', __('Url'))->display(function ($url) {
            $html = '<div>
                        <div style="width:150px">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal1">
                                <img src="https://img.youtube.com/vi/' . $url . '/hqdefault.jpg"
                                    alt="Video Thumbnail" style="width:100%">
                            </a>
                        </div>
                    </div>

                    <!-- Modal 1 -->
                    <div class="modal fade" id="videoModal1" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="ratio ratio-16x9">
                                        <iframe id="video1" src="https://www.youtube.com/embed/' . $url . '"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                  ';
            return htmlspecialchars_decode($html);
        });
        $grid->column('head_az', __('admin.Head_az'));
        $grid->column('head_en', __('admin.Head_en'));
        $grid->column('head_ru', __('admin.Head_ru'));
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
        $show = new Show(CommentVideo::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('url', __('Url'));
        $show->field('head_az', __('admin.Head_az'));
        $show->field('head_en', __('admin.Head_en'));
        $show->field('head_ru', __('admin.Head_ru'));
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
        $form = new Form(new CommentVideo());

        $form->text('url', __('Url'));
        $form->text('head_az', __('admin.Head_az'));
        $form->text('head_en', __('admin.Head_en'));
        $form->text('head_ru', __('admin.Head_ru'));

        return $form;
    }
}
