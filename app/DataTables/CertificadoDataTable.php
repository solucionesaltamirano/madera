<?php

namespace App\DataTables;

use App\Models\Certificado;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class CertificadoDataTable extends DataTable
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
        return $dataTable->addColumn('Opciones', function(Certificado $certificado){
            $id = $certificado->id;
            return view('admin.certificados.datatables_actions',compact('certificado','id'))->render();
        })
        ->editColumn('id',function (Certificado $certificado){
            return $certificado->id;
        })
        ->editColumn('fecha',function (Certificado $certificado){
            return $certificado->fecha->format('d/m/Y');
        })
        ->editColumn('inicio',function (Certificado $certificado){
            return $certificado->fecha_inicio->format('d/m/Y') . ' - ' . $certificado->hora_inicio;
        })
        ->editColumn('fin',function (Certificado $certificado){
            return $certificado->fecha_fin->format('d/m/Y') . ' - ' . $certificado->hora_fin;
        })
        ->rawColumns(['Opciones','id',  'inicio', 'fin']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Certificado $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Certificado $model)
    {
        if(auth()->user()->hasRole('ADMIN')){
            return $model->newQuery()->with(['cliente','empresa']);
        }else{
            return $model->newQuery()->with(['empresa'])
            ->where('cliente_id',auth()->user()->empresa()->first()->id);
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
        if(auth()->user()->hasRole('ADMIN')){
            return [
                Column::make('id'),
                Column::make('secuencial'),
                Column::make('cliente')
                    ->name('cliente.nombre_empresa')
                    ->data('cliente.nombre_empresa'),
                Column::make('empresas')
                    ->name('empresa.nombre')
                    ->data('empresa.nombre'),
                Column::make('fecha'),
                Column::make('descripcion'),
                Column::make('cantidad'),
                Column::make('humedad'),
                Column::make('inicio'),
                Column::make('fin'),
                Column::make('temperatura_inicio'),
                Column::make('temperatura_fin'),
                Column::make('Opciones', )->title('Opciones')->orderable(false)->searchable(false)->printable(false)->exportable(false)->width('120px'),
            ];
        }else{
            return [
                Column::make('id'),
                Column::make('secuencial'),
                Column::make('empresas')
                    ->name('empresa.nombre')
                    ->data('empresa.nombre'),
                Column::make('fecha'),
                Column::make('descripcion'),
                Column::make('cantidad'),
                Column::make('humedad'),
                Column::make('inicio'),
                Column::make('fin'),
                Column::make('temperatura_inicio'),
                Column::make('temperatura_fin'),
                Column::make('Opciones', )->title('Opciones')->orderable(false)->searchable(false)->printable(false)->exportable(false)->width('120px'),
            ];
        }
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'certificados_datatable_' . time();
    }
}