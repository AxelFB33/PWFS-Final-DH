@extends("layout")

@section("php")
<?php

	session_start();

?>

@endsection

@section("titulo","Contacto")

@section("contenido")

@if(isset($reclamo))
<br>
<h1 class="titulo">
{{ $reclamo }}
</h1>
<br>
@endif

<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">

				<div class="col-md-6 p-b-30">
					<form class="leave-comment" action="/contact" method="post">
					{{csrf_field()}}
						<h4 class="m-text26 p-b-36 p-t-15">
							Mandanos un mensaje
						</h4>

						<ul style="color:red;" class="alert">
                                 @foreach ($errors->all() as $error)
                              <li>
                                 {{$error}}
                              </li>
                                 @endforeach
                        </ul>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="nombrecompleto" placeholder="Nombre Completo">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="number" name="celular" placeholder="Numero de celular">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="email" name="email" placeholder="Email">
						</div>

						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="mensaje" placeholder="Mensaje"></textarea>

						<div class="w-size25">
							<!-- Button -->
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Enviar
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
    
@endsection