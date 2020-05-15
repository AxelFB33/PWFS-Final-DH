@extends("layout")

@section("php")
<?php

	session_start();

?>
@endsection

@section("titulo", "Inicio")

@section("contenido")

@if(isset($nuevaVenta))
<br>
<h1 class="titulo">
{{ "Producto Guardado! Dirigase al carrito para pagar!" }}
</h1>
<br>
@endif

<!-- Banner -->
<div class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="/img/cat_iphone.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<button class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								CELULARES
							</button>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="/img/cat_macbook.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<button class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								NOTEBOOKS
							</button>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="/img/cat_smartwatch.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<button class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								SMARWATCHS
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Our product -->
	<section class="bgwhite p-t-45 p-b-58">
		<div class="container">
			<div class="sec-title p-b-22">
				<h3 class="m-text5 t-center">
					Nuestros Productos
				</h3>
			</div>

			<!-- Tab01 -->
			<div class="tab01">

				<!-- Tab panes -->
				<div class="tab-content p-t-35">
					<!-- - -->
					<div class="tab-pane fade show active" id="best-seller" role="tabpanel">
						<div class="row">
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="/img/iphone7_1.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<a href="/product-detail/1">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Ver Producto
												</button>
												</a>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<p class="block2-name dis-block s-text3 p-b-5">
											iPhone 7
										</p>

									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="/img/macbookpro1.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">

											<div class="block2-btn-addcart w-size1 trans-0-4">
											<a href="/product-detail/8">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Ver Producto
												</button>
											</a>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
									<p class="block2-name dis-block s-text3 p-b-5">
											MacBook Pro
										</p>

									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="/img/applewatch_3.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">

											<div class="block2-btn-addcart w-size1 trans-0-4">
											<a href="/product-detail/7">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Ver Producto
												</button>
											</a>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
									<p class="block2-name dis-block s-text3 p-b-5">
											Apple Watch Series 5
										</p>

									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
										<img src="/img/iphone7plus1.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">

											<div class="block2-btn-addcart w-size1 trans-0-4">
											<a href="/product-detail/2">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Ver Producto
												</button>
											</a>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
									<p class="block2-name dis-block s-text3 p-b-5">
											iPhone 7 Plus
										</p>

									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="/img/iphone8_1.png" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">

											<div class="block2-btn-addcart w-size1 trans-0-4">
											<a href="/product-detail/3">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Ver Producto
												</button>
											</a>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
									<p class="block2-name dis-block s-text3 p-b-5">
											iPhone 8
										</p>

									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
										<img src="/img/macbookair.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">

											<div class="block2-btn-addcart w-size1 trans-0-4">
											<a href="/product-detail/6">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Ver Producto
												</button>
											</a>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
									<p class="block2-name dis-block s-text3 p-b-5">
											MacBook Air
										</p>

									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="/img/applewatch_2.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">

											<div class="block2-btn-addcart w-size1 trans-0-4">
											<a href="/product-detail/9">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Ver Producto
												</button>
											</a>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
									<p class="block2-name dis-block s-text3 p-b-5">
											Apple Watch Series 3
										</p>

									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="/img/iphone8plus_1.png" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">

											<div class="block2-btn-addcart w-size1 trans-0-4">
											<a href="/product-detail/ 4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Ver Producto
												</button>
											</a>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
									<p class="block2-name dis-block s-text3 p-b-5">
											iPhone 8 Plus
										</p>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection