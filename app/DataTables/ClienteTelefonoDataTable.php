<?php

namespace App\DataTables;

use App\Models\ClienteTelefono;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class ClienteTelefonoDataTable extends DataTable
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
        return $dataTable->addColumn('action', function(ClienteTelefono $clienteTelefono){
            $id = $clienteTelefono->id;
            return view('admin.cliente_telefonos.datatables_actions',compact('clienteTelefono','id'))->render();
        })
        ->editColumn('id',function (ClienteTelefono $clienteTelefono){
            return $clienteTelefono->id;
                 //se debe crear la vista modal_detalles
                 //return view('cliente_telefonos.modal_detalles',compact('clienteTelefono'))->render();
        })
        ->rawColumns(['action','id']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ClienteTelefono $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ClienteTelefono $model)
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
            Column::make('cliente_id'),
            Column::make('telefono'),
            Column::make('nombre'),
            Column::make('puesto')
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'cliente_telefonos_datatable_' . time();
    }
}