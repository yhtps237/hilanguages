<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Contact;

class ContactController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Contact';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Contact());

        $grid->column('id', __('Id'));
        $grid->column('address', __('Address'));
        $grid->column('phone_number', __('Phone number'));
        $grid->column('phone_number2', __('Phone number2'));
        $grid->column('wp_phone_number', __('Wp phone number'));
        $grid->column('email', __('Email'));
        $grid->column('email2', __('Email2'));
        $grid->column('map', __('Map'));
        $grid->column('instagram_url', __('Instagram url'));
        $grid->column('x_url', __('X url'));
        $grid->column('linkedin_url', __('Linkedin url'));
        $grid->column('facebook_url', __('Facebook url'));
        $grid->column('youtube_url', __('Youtube url'));
        $grid->column('tiktok_url', __('Tiktok url'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Contact::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('address', __('Address'));
        $show->field('phone_number', __('Phone number'));
        $show->field('phone_number2', __('Phone number2'));
        $show->field('wp_phone_number', __('Wp phone number'));
        $show->field('email', __('Email'));
        $show->field('email2', __('Email2'));
        $show->field('map', __('Map'));
        $show->field('instagram_url', __('Instagram url'));
        $show->field('x_url', __('X url'));
        $show->field('linkedin_url', __('Linkedin url'));
        $show->field('facebook_url', __('Facebook url'));
        $show->field('youtube_url', __('Youtube url'));
        $show->field('tiktok_url', __('Tiktok url'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Contact());

        $form->textarea('address', __('Address'));
        $form->text('phone_number', __('Phone number'));
        $form->text('phone_number2', __('Phone number2'));
        $form->text('wp_phone_number', __('Wp phone number'));
        $form->email('email', __('Email'));
        $form->text('email2', __('Email2'));
        $form->textarea('map', __('Map'));
        $form->text('instagram_url', __('Instagram url'));
        $form->text('x_url', __('X url'));
        $form->text('linkedin_url', __('Linkedin url'));
        $form->text('facebook_url', __('Facebook url'));
        $form->text('youtube_url', __('Youtube url'));
        $form->text('tiktok_url', __('Tiktok url'));

        return $form;
    }
}
