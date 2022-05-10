<?php

namespace App\DataTables;

use App\Models\Cliente;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class ClienteDataTable extends DataTable
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
        return $dataTable->addColumn('Opciones', function(Cliente $cliente){
            $id = $cliente->id;
            return view('admin.clientes.datatables_actions',compact('cliente','id'))->render();
        })
        ->editColumn('id',function (Cliente $cliente){
            return $cliente->id;
                 //se debe crear la vista modal_detalles
                 //return view('clientes.modal_detalles',compact('cliente'))->render();
        })
        ->editColumn('fecha_registro',function (Cliente $cliente){
            return $cliente->fecha_registro->format('d/m/Y');
                 //se debe crear la vista modal_detalles
                 //return view('clientes.modal_detalles',compact('cliente'))->render();
        })
        ->editColumn('fecha_vencimiento',function (Cliente $cliente){
            return $cliente->fecha_vencimiento->format('d/m/Y');
                 //se debe crear la vista modal_detalles
                 //return view('clientes.modal_detalles',compact('cliente'))->render();
        })
        ->rawColumns(['Opciones','id', 'usuario']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Cliente $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Cliente $model)
    {
        return $model->newQuery()->where('user_id', '!=', auth()->user()->id)->with('user');
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
            // ->addAction(['width' => '120px', 'printable' => false])
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
                'buttons' => [
                    [
                        'extend' => 'collection',
                        'className' => 'btn btn-default btn-sm',
                        'text' => '<i class="fal fa-download"></i> Exportar',
                        'buttons' => [
                            [ 
                                'extend' => 'excel', 
                                'text' =>'<span class="btn btn-outline-success btn-block btn-sm">Excel <i class="fad fa-file-csv"></i></span>',
                                'exportOptions' => [
                                    'columns'=> ":visible:not(.not-export-col)",
                                ],
                                'orientation' => 'landscape',
                                'pageSize' => 'LETTER',
                            ],
                            [
                                'extend' => 'pdf',
                                'text' =>'<span class="btn btn-outline-danger btn-block btn-sm ">PDF <i class="fad fa-file-csv"></i></span>',
                                'exportOptions' => [
                                    'columns' => ":visible:not(.not-export-col)",
                                ],
                                'orientation' => 'landscape',
                                'pageSize' => 'LETTER',
                                'messageTop' => 'Generado por ' . auth()->user()->name . ' el ' . today()->format('d/m/Y'),
                                'messageBottom' => '',
                                'footer' => true
                            ],
                        ]
                    ],
                    [
                        'extend' => 'print', 
                        'className' => 'btn btn-default btn-sm no-corner', 
                        'text' => '<i class="fal fa-print"></i> Imprimir',

                        'exportOptions' => [
                            'columns' => ':visible:not(.not-export-col)',
                        ],
                        'orientation' => 'landscape',
                        'pageSize' => 'LETTER',
                        'messageTop' => 'Creado por ' . auth()->user()->name . ' el ' . today()->format('d/M/Y H:i:s'),
                    ],
                    [
                        'extend' => 'reset', 
                        'className' => 'btn btn-default btn-sm no-corner', 
                        'text' => '<i class="fal fa-undo"></i> Reiniciar'
                    ],
                    [
                        'extend' => 'colvis', 
                        'className' => 'btn btn-default btn-sm no-corner', 
                        'text' => '<i class="fal fa-sync"></i> Columnas'
                    ],
                ],
                'language' => [
                    "url" => "//cdn.datatables.net/plug-ins/1.11.4/i18n/es_es.json"
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
            Column::make('usuario')
            ->data('user.name')
            ->name('user.name'),
            Column::make('codigo'),
            Column::make('nombre_empresa'),
            Column::make('direccion'),
            Column::make('fecha_registro'),
            Column::make('fecha_vencimiento'),
            Column::make('nombre_representante_legal'),
            Column::make('Opciones', )->title('Opciones')->orderable(false)->searchable(false)->printable(false)->exportable(false)->width('120px'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'clientes_datatable_' . time();
    }
}