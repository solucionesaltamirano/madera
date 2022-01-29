<?php

namespace App\DataTables;

use App\Models\Role;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class RoleDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);
        return $dataTable->addColumn('action', function(Role $role){
            $id = $role->id;
            return view('admin.roles.datatables_actions',compact('role','id'))->render();
        })
        ->editColumn('id',function (Role $role){
            return $role->id;
                 //se debe crear la vista modal_detalles
                 //return view('roles.modal_detalles',compact('role'))->render();
        })
        ->rawColumns(['action','id']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Role $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Role $model)
    {
        $role_id = auth()->user()->roles->min('id') ?? Role::all()->max('id') + 1;

        if($role_id <= 2){
            $minRole = $role_id;
        }else{
            $minRole = $role_id + 1;
        }

        return $model->newQuery()->where('id','>=',$minRole);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'responsive' => true,
                'dom'       => '
                    <"row mb-2"
                        <"col-sm-12 col-md-6" B>
                        <"col-sm-12 col-md-6" f>
                    >
                    rt
                    <"row "
                        <"col-sm-6   pt-2  " l>
                        <"col-sm-6   text-right" i>
                        <"col-sm-12  " p>
                    >',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    //['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('name'),
            Column::make('guard_name')
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'roles_datatable_' . time();
    }
}