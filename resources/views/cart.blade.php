@extends("layout")

@section("php")
<?php

    session_start();

?>
@endsection

@section("titulo", "Carrito")

@section("contenido")

<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
    <div class="container">
        <!-- Cart item -->
        <div class="container-table-cart pos-relative">
            <div class="wrap-table-shopping-cart bgwhite">
                <table class="table-shopping-cart">
                    <tr class="table-head">
                        <th class="column-1">Imagen</th>
                        <th class="column-2">Producto</th>
                        <th class="column-3">Precio</th>
                        <th class="column-3">Cantidad</th>
                        <th class="column-5">Total</th>
                    </tr>

                    @if(isset($ventasRegistradas))

                        <?php $totalPagar = 0; ?>

                        @foreach($ventasRegistradas as $venta => $ventaUsuario)
                            <tr class="table-row">
                                <td class="column-1">
                                    <div class="cart-img-product b-rad-4 o-f-hidden">
                                        <img src="/img/{{ $ventaUsuario->items->producto->imagen }}" alt="IMG-PRODUCT">
                                    </div>
                                </td>
                                <td class="column-3">{{ $ventaUsuario->items->producto->nombre }}</td>
                                <td class="column-3">${{ $ventaUsuario->items->precio }}</td>
                                <td class="column-4">{{ $ventaUsuario->items->cantidad }}</td>
                                <td class="column-5">
                                    <?php $total = $ventaUsuario->items->precio * $ventaUsuario->items->cantidad?>
                                    {{ $total }}
                                    <?php $totalPagar = $totalPagar + $total?>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
        </div>

        <!-- Total -->
        <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
            <h5 class="m-text20 p-b-24">
                TOTAL CARRITO
            </h5>

            <!--  -->
            <div class="flex-w flex-sb-m p-t-26 p-b-30">
                <span class="m-text22 w-size19 w-full-sm">
                    Total:
                </span>
                @if (isset($ventasRegistradas))
                <span class="m-text21 w-size20 w-full-sm">
                    ${{ $totalPagar }}
                </span>
                @endif
            </div>

            <div class="size15 trans-0-4">
                <!-- Button -->
                <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                    PAGAR
                </button>
            </div>
        </div>
    </div>
</section>
    
@endsection