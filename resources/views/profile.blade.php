@extends("layout")

@section("titulo","Perfil")

@section("contenido")
<!-- Content -->
	<div class="container emp-profile" style="background-color: lightgray;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="@if(session('imagen'))
                            /storage/{{session('imagen')}}
                            @else
                            /storage/{{ "traje.jpg" }}
                            @endif
                            "alt="imagen de perfil"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h3>
                                        Mi Perfil
									</h3>
									<h4>
                                    {{ session('nombrecompleto') }}
									</h4>
                            <ul class="nav nav-tabs" id="myTab" role="tablist" style="padding-top: 40px;">
                                <li class="nav-item">
                                    <a class="nav-link active" style="background-color: lightgray; border-top: 1px black solid;" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home">Mis Datos</a>
                                </li>
                            </ul>
                               @if(session('tipoUsuario_id') == 1)
                                  <h2 style="color: blue; font-weight: bold;">{{ "Administrador" }}</h2>
                               @else
                                    <h2 style="color: blue;">{{ "Cliente" }}</h2><br>
                                @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Links</p>
                            <a href="/edit-profile">Editar Perfil</a><br/>
                            <a href="/cart">Mi Carrito<br/>
                            <a href="/cerrarsession">Cerrar Sesion</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
												<p>{{ session('email') }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Ciudad</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ session('ciudad') }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Direccion</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ session('direccion') }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Dni</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ session('dni') }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Celular</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ session('celular') }}</p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>         
        </div>
@endsection