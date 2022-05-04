<?php

namespace App\DataTables;

use App\Models\ExternalAuth;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class ExternalAuthDataTable extends DataTable
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
        return $dataTable->addColumn('action', function(ExternalAuth $externalAuth){
            $id = $externalAuth->id;
            return view('admin.external_auths.datatables_actions',compact('externalAuth','id'))->render();
        })
        ->editColumn('id',function (ExternalAuth $externalAuth){
            return $externalAuth->id;
        })
        ->editColumn('external_avatar',function (ExternalAuth $externalAuth){
            $img = $externalAuth->external_avatar ? $externalAuth->external_avatar : 'https://ui-avatars.com/api/?name='. $externalAuth->external_name ;
            return '<div class="d-flex justify-content-center w-100"><img src="'.$img.'" width="40px" height="40px" class="rounded-circle"></div>';
        })
        ->rawColumns(['action','id','external_avatar']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ExternalAuth $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ExternalAuth $model)
    {
        return $model->newQuery();
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
            Column::make('user_id'),
            Column::make('external_auth'),
            Column::make('external_id'),
            Column::make('external_email'),
            Column::make('external_avatar')
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'external_auths_datatable_' . time();
    }
}