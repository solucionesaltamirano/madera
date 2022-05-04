<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! Form::text('codigo', null, ['class' => 'form-control','maxlength' => 8,'maxlength' => 8]) !!}
</div>

<!-- Nombre Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_empresa', 'Nombre Empresa:') !!}
    {!! Form::text('nombre_empresa', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Fecha Registro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_registro', 'Fecha Registro:') !!}
    {!! Form::text('fecha_registro', null, ['class' => 'form-control','id'=>'fecha_registro']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_registro').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Fecha Vencimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_vencimiento', 'Fecha Vencimiento:') !!}
    {!! Form::text('fecha_vencimiento', null, ['class' => 'form-control','id'=>'fecha_vencimiento']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_vencimiento').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Nombre Representante Legal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_representante_legal', 'Nombre Representante Legal:') !!}
    {!! Form::text('nombre_representante_legal', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]) !!}
</div>