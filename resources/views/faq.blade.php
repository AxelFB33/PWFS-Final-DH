@extends("layout")

@section("titulo","FAQs")


@section("contenido")
<div class="container" style="padding-top: 20px; margin-top: 13px; margin-bottom: 13px;">
        <ul class="list-group">
            <li class="list-group-item"><h2 class="cfg_titulo_form" style="text-align: center;">Preguntas Frecuentes</h2></li>
            <li class="list-group-item" style="font-size:x-large">
                <span style="font-weight: bold; text-decoration: underline;">¿Que metodos de pago aceptamos?:</span>
                Todos los metodos de pago. Tarjeta de credito, tarjeta de debito, rapipago, pagofacil, mercado pago, efectivo, transferencia bancaria, etc.
            </li>
            <li class="list-group-item" style="font-size:x-large">
                <span style="font-weight: bold; text-decoration: underline;">¿Hacemos envio?:</span>
                Si, a cualquier parte del mundo. A traves de mercado envios, correo argentino, oca, adreani, ocasa, etc.
            </li>
            <li class="list-group-item" style="font-size:x-large">
                <span style="font-weight: bold; text-decoration: underline;">¿Debo consultar el stock antes de realizar una compra?:</span>
                No, si el producto está publicado, significa que hay disponibilidad.
            </li>
            <!-- 
            <li class="list-group-item">
               //Mas preguntas. 
            </li>
            -->
        </ul>
</div>
@endsection