<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        $content
            ->title('主控台')
            ->description('Description...')
            ->breadcrumb(
                ['text' => '首頁', 'url' => '/admin'],
                ['text' => '用戶管理', 'url' => '/users'],
                ['text' => '编辑用戶'])
            ->body('hello world')
            ->body('foo bar')
            ->row('hello world')
        ;

        return $content;

        // return $content
        //     ->title('Dashboard')
        //     ->description('Description...')
        //     ->row(Dashboard::title())
        //     ->row(function (Row $row) {

        //         $row->column(4, function (Column $column) {
        //             $column->append(Dashboard::environment());
        //         });

        //         $row->column(4, function (Column $column) {
        //             $column->append(Dashboard::extensions());
        //         });

        //         $row->column(4, function (Column $column) {
        //             $column->append(Dashboard::dependencies());
        //         });
        //     });
    }
}
