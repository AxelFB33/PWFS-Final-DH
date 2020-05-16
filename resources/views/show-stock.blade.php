@extends('layout')

@section('titulo','Stock')

@section('contenido')
<section class="cart bgwhite p-t-70 p-b-100">
<div class="container">

    <form action="/show-stock" method="post">
    {{csrf_field()}}
            <div class="form-group">
                <label class="col-md-4 control-label">ID Producto a eliminar: </label>
                <div class="col-md-8 inputGroupContainer">
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="id" name="id" placeholder="ID" class="form-control" type="number"></div>
                <button type="submit" class="btn posicion_boton">Eliminar</button>
                </div>
            </div>
        </form>

<div class="container-table-cart pos-relative">
<div class="wrap-table-shopping-cart bgwhite">
    <table class="table-shopping-cart">
                    <tr class="table-head">
                        <th class="column-1">Id</th>
                        <th class="column-2">Imagen</th>
                        <th class="column-3">Producto</th>
                        <th class="column-4">Precio</th>
                        <th class="column-5">Descripcion</th>
                        <th class="column-6">Tipo</th>
                    </tr>

                    @if(isset($productos))

                        @foreach($productos as $producto)
                            <tr class="table-row">
                                <td class="column-1">{{ $producto->id }}</td>
                                <td class="column-2">
                                    <div class="cart-img-product b-rad-4 o-f-hidden">
                                        <img src="/img/{{ $producto->imagen }}" alt="IMG-PRODUCT">
                                    </div>
                                </td>
                                <td class="column-3">{{ $producto->nombre }}</td>
                                <td class="column-4">${{ $producto->precio }}</td>
                                <td class="column-5">{{ $producto->descripcion }}</td>
                                <td class="column-6">{{ $producto->tipo }}</td>
                            </tr>
                        @endforeach
                    @endif
                </table>
    </div>
    </div>
    </div>
</section>
@endsection