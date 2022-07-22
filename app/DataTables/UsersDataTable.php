<?php

namespace App\DataTables;

use App\Models\User;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
{
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->editColumn('actions', function ($data) {
                $actions = " <a href=" . route('users.edit', $data->id) . " class='btn btn-success btn-sm'data-toggle='tooltip' data-placement='bottom' title='Edit'><i class='ti-pencil-alt'></i></a>";
                $actions .= "<button class='delete btn btn-danger btn-sm' onclick='deleteFunc(" . $data->id . ")' data-toggle='tooltip' data-placement='bottom' title='Delete'><i class='ti-trash'></i></button>";
                return $actions;
            })
            ->rawColumns(['actions', 'user.role']);
    }

    public function query(User $model)
    {
        return $model->applyScopes($model->query());
    }

    public function html()
    {
        return $this->builder()
            ->setTableId('usersdatatable-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->buttons(
                Button::make('create'),
                Button::make('export'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            );
    }

    protected function getColumns()
    {
        return [
            Column::computed('DT_RowIndex')
                ->title('No')
                ->width('3%'),
            Column::make('name'),
            Column::computed('actions')
                ->exportable(false)
                ->printable(false)
                ->width(200)
                ->addClass('text-center'),
        ];
    }

    protected function filename(): string
    {
        return 'Users_' . date('YmdHis');
    }
}
