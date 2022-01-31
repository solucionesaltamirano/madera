<?php

namespace App\DataTables;

use App\Models\User;
use App\Models\Role;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class UserDataTable extends DataTable
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
        return $dataTable->addColumn('action', function(User $user){
            $id = $user->id;
            return view('admin.users.datatables_actions',compact('user','id'))->render();
        })
        ->editColumn('id',function (User $user){
            return $user->id;
            //se debe crear la vista modal_detalles
            //return view('users.modal_detalles',compact('user'))->render();
        })
        ->editColumn('profile_photo_path',function (User $user){
            $img = $user->profile_photo_path ? $user->profile_photo_path : 'https://ui-avatars.com/api/?name='. $user->name ;
            return 
                '<div class="d-flex justify-content-center w-100">
                    <img src="'.$img .'" width="40px" height="40px" class="rounded-circle">
                </div>';
        })
        ->rawColumns(['action','id','profile_photo_path']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        $role_id = auth()->user()->roles->min('id') ?? Role::all()->max('id') + 1;

        if($role_id <= 2){
            $minRole = $role_id;
        }else{
            $minRole = $role_id ;
        }

        $roles = Role::where('id','<=',$minRole)->pluck('name')->toArray(); 

        if($minRole <= 2){
            return $model->newQuery()->withTrashed();
        }else{
            return $model->newQuery();
        }
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
            Column::make('id'),
            Column::make('name'),
            Column::make('email'),
            Column::make('username'),
            Column::make('phone'),
            Column::make('profile_photo_path'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'users_datatable_' . time();
    }
}