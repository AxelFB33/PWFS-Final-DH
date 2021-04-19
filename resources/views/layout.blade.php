@yield("php")

<!DOCTYPE html>
<html lang="es">
<head>
	<title>@yield("titulo")</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="stylesheet" href="/css/style.css">
<!--===============================================================================================-->

</head>
<body class="animsition">

	<!-- header fixed -->
	<div class="wrap_header fixed-header2 trans-0-4">
	<!-- Logo -->
	<a href="/index" class="logo">
		<h3 class="nombrePagina">FB33</h3>
	</a>

		<!-- Menu -->
		<div class="wrap_menu">
			<nav class="menu">
				<ul class="main_menu">
					<li>
						<a href="/index">Home</a>
					</li>

					<li>
						<a href="
						@if(session('nombrecompleto'))
						{{ "/cart"}}
						@else
						{{"/login"}}
						@endif
						">Carrito</a>
					</li>

					<li>
						<a href="/contact">Contacto</a>
					</li>
					<li>
						<a href="
						@if(session('nombrecompleto'))
						{{ "/profile"}}
						@else
						{{"/register"}}
						@endif
					">Registro</a>
                    </li>
                    <li>
					<a href="
						@if(session('nombrecompleto'))
						{{ "/profile"}}
						@else
						{{"/login"}}
						@endif
					">Iniciar Sesion</a>
					</li>
					@if(session('tipoUsuario_id')==1)
					<li class="p-b-9">
						<a href="/show-stock" class="s-text7">
							Productos
						</a>
					</li>
					@endif
				</ul>
			</nav>
		</div>

		<!-- Header Icon -->
		<div class="header-icons">
			<a href="
						@if(session('nombrecompleto'))
						{{ "/profile"}}
						@else
						{{"/login"}}
						@endif
					" class="header-wrapicon1 dis-block">
				<img src="/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
			</a>

			<span class="linedivide1"></span>

			<div class="header-wrapicon2">
				<img src="/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">

				<!-- Header cart noti -->
				<div class="header-cart header-dropdown">

					<div class="header-cart-buttons">
						<div class="header-cart-wrapbtn">
							<!-- Button -->
							<a href="
						@if(session('nombrecompleto'))
						{{ "/cart"}}
						@else
						{{"/login"}}
						@endif
					" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
								Ver Carrito
							</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Header -->
	<header class="header2">
		<!-- Header desktop -->
		<div class="container-menu-header-v2 p-t-26">
			<div class="topbar2">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<!-- Logo2 -->
				<a href="/index" class="logo2">
					<h3 class="nombrePagina">FB33</h3>
				</a>

				<div class="topbar-child2">
					<span class="topbar-email">
					@if (session('nombrecompleto'))
					{{ "Conectado" }}
					@else
					{{ "Desconectado" }}
					@endif
					</span>

					<!--  -->
					<a href="
						@if(session('nombrecompleto'))
						{{ "/profile"}}
						@else
						{{"/login"}}
						@endif
					" class="header-wrapicon1 dis-block m-l-30">
						<img src="/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2 m-r-13">
						<img src="/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="
						@if(session('nombrecompleto'))
						{{ "/cart"}}
						@else
						{{"/login"}}
						@endif
						" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Ver Carrito
									</a>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="wrap_header">

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="/index">Home</a>
							</li>

							<li>
								<a href="
						@if(session('nombrecompleto'))
						{{ "/cart"}}
						@else
						{{"/login"}}
						@endif
						">Carrito</a>
							</li>

							<li>
								<a href="/contact">Contacto</a>
							</li>
							<li>
							<a href="
						@if(session('nombrecompleto'))
						{{ "/profile"}}
						@else
						{{"/register"}}
						@endif
					">Registro</a>
							</li>
							<li>
							<a href="
						@if(session('nombrecompleto'))
						{{ "/profile"}}
						@else
						{{"/login"}}
						@endif
						">Iniciar Sesion</a>
							</li>
							@if(session('tipoUsuario_id')==1)
					<li class="p-b-9">
						<a href="/show-stock" class="s-text7">
							Productos
						</a>
					</li>
					@endif
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">

				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo -->
			<a href="/index" class="logo">
				<h3 class="nombrePagina">FB33</h3>
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="
						@if(session('nombrecompleto'))
						{{ "/profile"}}
						@else
						{{"/login"}}
						@endif
						" class="header-wrapicon1 dis-block">
						<img src="/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="
						@if(session('nombrecompleto'))
						{{ "/cart"}}
						@else
						{{"/login"}}
						@endif
						" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Ver Carrito
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
							@if (session('nombrecompleto'))
							{{ "Conectado" }}
							@else
							{{ "Desconectado" }}
							@endif
							</span>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="/index">Inicio</a>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="
						@if(session('nombrecompleto'))
						{{ "/cart"}}
						@else
						{{"/login"}}
						@endif
						">Carrito</a>
					</li>

					<li class="item-menu-mobile">
						<a href="/contact">Contacto</a>
					</li>
					<li>
					<a href="
						@if(session('nombrecompleto'))
						{{ "/profile"}}
						@else
						{{"/register"}}
						@endif
					">Registro</a>
                    </li>
                    <li>
					<a href="
						@if(session('nombrecompleto'))
						{{ "/profile"}}
						@else
						{{"/login"}}
						@endif
					">Iniciar Sesion</a>
					</li>
					@if(session('tipoUsuario_id')==1)
					<li class="p-b-9">
						<a href="/show-stock" class="s-text7">
							Productos
						</a>
					</li>
					@endif
				</ul>
			</nav>
		</div>
	</header>

	<!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1 div_portada">
				<div class="item-slick1 item1-slick1">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="fadeInUp">
							Bienvenido a FB33
						</h2>
					</div>
				</div>

				<div class="item-slick1 item2-slick1">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="rollIn">
							De todo en Apple
						</h2>
						<span style="color:white;">
							Encontrá celulares, tablets, notebooks, smartwatchs y mucho mas.
						</span>
					</div>
				</div>

				<div class="item-slick1 item3-slick1">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="rotateInDownLeft">
							Los mejores en el mercado
						</h2>
						<span style="color:white;">
							Toda la seguridad y responsabilidad que necesitas.
						</span>
					</div>
				</div>

			</div>
		</div>
	</section>

	@yield("contenido")

	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90 footer_">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					VEN A VERNOS
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Tienes alguna pregunta? Quieres contactarnos personalmente? <br> 
						Nos encontramos en Direccion Num, Ciudad. CP: Num. O llamanos Numero.
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="/contact" class="s-text7">
							Contactanos
						</a>
					</li>
					<li class="p-b-9">
						<a href="/contact" class="s-text7">
							Reclamos
						</a>
					</li>
					<li class="p-b-9">
						<a href="/faq" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Perfil
				</h4>

				<ul>
					<li class="p-b-9">
					<a class="s-text7" href="
						@if(session('nombrecompleto'))
						{{ "/profile"}}
						@else
						{{"/login"}}
						@endif
					">Mi Perfil</a>
					</li>
					<li class="p-b-9">
					<a class="s-text7" href="
						@if(session('nombrecompleto'))
						{{ "/profile"}}
						@else
						{{"/login"}}
						@endif
					">Iniciar Sesion</a>
					</li>
					<li class="p-b-9">
					<a class="s-text7" href="
						@if(session('nombrecompleto'))
						{{ "/profile"}}
						@else
						{{"/register"}}
						@endif
					">Registro</a>
					</li>
					<li class="p-b-9">
						<a href="
						@if(session('nombrecompleto'))
						{{ "/cart"}}
						@else
						{{"/login"}}
						@endif
						" class="s-text7">
							Carrito
						</a>
					</li>
				</ul>
			</div>

			@if(session('tipoUsuario_id') == 1)
			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Productos
				</h4>

				<ul>
					<li class="p-b-9">
					<a class="s-text7" href="/stock">Agregar Producto</a>
					</li>
					<li class="p-b-9">
					<a class="s-text7" href="/edit">Editar Producto</a>
					</li>
					<li class="p-b-9">
					<a class="s-text7" href="/show-stock">Eliminar Producto</a>
					</li>
					<li class="p-b-9">
					<a class="s-text7" href="/show-stock" >Mostrar Productos</a>
					</li>
				</ul>
			</div>
			@endif

		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="/images/icons/paypal.png" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="/images/icons/visa.png" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="/images/icons/mastercard.png" alt="IMG-MASTERCARD">
			</a>

			<a href="#">
				<img class="h-size2" src="/images/icons/express.png" alt="IMG-EXPRESS">
			</a>

			<div class="t-center s-text8 p-t-20">
				Copyright © 2020 All rights reserved. | This template is made with Axel Zabala.
			</div>
		</div>
	</footer>

<!--===============================================================================================-->
	<script type="text/javascript" src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="/vendor/sweetalert/sweetalert.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="/vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="/js/main.js"></script>

</body>
</html>
