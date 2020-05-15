@extends("layout")

@section("php")

<?php

	session_start();

?>

@endsection

@section("titulo", "Producto")

@section("contenido")

    <!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<img src="/img/<?php echo $producto["imagen"]; ?>" class="slick3" alt="Imagen Producto">
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					<?php echo $producto["nombre"]; ?>
				</h4>

				<span class="m-text17">
				$<?php echo $producto["precio"]; ?>
				</span>

				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content" style="margin-top: 35px">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Descripcion
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
						<?php echo $producto["descripcion"]; ?>
						</p>
					</div>
				</div>
		
				<form action="/product-detail" method="post">
				{{csrf_field()}}

				<div class="p-t-33 p-b-60">

					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>
								<!-- Cantidad de productos -->
								<input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">

								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>

							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Id producto -->
								<input name="id" value="<?php echo $producto["id"]?>" type="hidden">
								<!-- Id Usuario Logueado -->
								<input name="id_usuario" value="{{ session("id") }}" type="hidden">
								<!-- Button -->
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									Comprar
								</button>
							
							</div>
						</div>
					</div>
				</div>

				</form>

				<!-- <div class="p-b-45">
					<span class="s-text8">Categoria: <?php $producto["tipo"]; ?></span>
				</div> -->
			</div>
		</div>
	</div>
    
@endsection