<div class="col-12">
    <div>
        <h4 class="float-left">Telefonos de contacto</h4>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered dataTable no-footer table-sm table-hover">
            <thead class="" >
                <tr class="">
                    <th class="" width="20%">Numero</th>
                    <th class="" width="65%">Nombre Contacto</th>
                    <th class="" width="5%">principal</th>
                    <th class="" width="10%">Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $index => $item)
                    <tr>
                        <td>
                            <input name="item[{{$index}}][numero]"
                                    wire:model="list.{{$index}}.numero"
                                    class="form-control "
                                    type="number"
                                    value="0"
                                    >
                            </input>
                        </td>
                        <td>
                            <input name="item[{{$index}}][nombre]"
                                    wire:model="list.{{$index}}.nombre"
                                    class="form-control "
                                    type="number"
                                    value="0"
                                    >
                            </input>
                        </td>
                        <td class="pt-2 px-4">
                            <input type="radio" name="principal" id="{{ $index }}" value="{{ $index }}" >
                        </td>
                        <td>
                            <div wire:click="removeItem({{$index}})" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i>
                            </div>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="4">
                        <div class="">
                            <button class="btn btn-outline-success btn-sm float-right mr-3" 
                                    wire:click.prevent="addItem">
                                    <i class="fal fa-layer-plus"></i>
                                    Nuevo
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
