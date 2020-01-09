<?php

namespace App\Admin\Controllers;

use App\Produto;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Facades\Admin;

class ProdutosController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Produto';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Produto());

        $grid->column('id', __('Id'));
        $grid->column('nome', __('Nome'));
        $grid->column('descricao', __('Descricao'));
        $grid->column('valor', __('Valor'));
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
        $show = new Show(Produto::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nome', __('Nome'));
        $show->field('descricao', __('Descricao'));
        $show->field('valor', __('Valor'));
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
        $form = new Form(new Produto());

        $form->text('nome', __('Nome'));
        $form->textarea('descricao', __('Descricao'));
        $form->decimal('valor', __('Valor'));

        return $form;
    }
}
