<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Rooms;

class RoomsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Rooms';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Rooms());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('image') ->image();
        $grid->column('description', __('Description'));
        $grid->column('price', __('Price'));
        $grid->column('max', __('Max'));
        $grid->column('size', __('Size'));
        $grid->column('bed', __('Bed'));
        $grid->column('post_date', __('Post date'));
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
        $show = new Show(Rooms::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('image') -> image();
        $show->field('description', __('Description'));
        $show->field('price', __('Price'));
        $show->field('max', __('Max'));
        $show->field('size', __('Size'));
        $show->field('bed', __('Bed'));
        $show->field('post_date', __('Post date'));
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
        $form = new Form(new Rooms());

        $form->text('name', __('Name'));
        $form->image('image', __('Image'));
        $form->textarea('description', __('Description'));
        $form->number('price', __('Price'));
        $form->number('max', __('Max'));
        $form->number('size', __('Size'));
        $form->number('bed', __('Bed'));
        $form->date('post_date', __('Post date'))->default(date('Y-m-d'));

        return $form;
    }
}
