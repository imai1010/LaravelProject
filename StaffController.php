<?php

use Encore\Admin\Facades\Admin;

function grid()
{
    $grid = Admin::grid(Staff::class, function (Grid $grid) {

        $grid->id('ID')->sortable();
        $grid->column('name')->sortable();
        $grid->actions(function ($actions) {
             $actions->disableDelete(); // 削除無効
             $actions->disableEdit(); // 編集無効
            $actions->disableView(); // 詳細表示無効
        });
    });

    return $grid;
}