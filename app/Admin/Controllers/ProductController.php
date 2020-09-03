<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Product;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class ProductController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Product(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('description');
            $grid->column('image');
            $grid->column('on_sale');
            $grid->column('price');
            $grid->column('rating');
            $grid->column('review_count');
            $grid->column('sold_count');
            $grid->column('title');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Product(), function (Show $show) {
            $show->field('id');
            $show->field('description');
            $show->field('image');
            $show->field('on_sale');
            $show->field('price');
            $show->field('rating');
            $show->field('review_count');
            $show->field('sold_count');
            $show->field('title');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Product(), function (Form $form) {
            $form->display('id');
            $form->text('description');
            $form->text('image');
            $form->text('on_sale');
            $form->text('price');
            $form->text('rating');
            $form->text('review_count');
            $form->text('sold_count');
            $form->text('title');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
