@extends("layout")

@section("php")

<?php

    session_start();

	/*
    if ($_POST) {

        $email = $_POST["email"];
        $ciudad = $_POST["ciudad"];
        $direccion = $_POST["direccion"];
        $celular = $_POST["celular"];

        $query = $bdd->prepare('SELECT * from usuarios');

		$query->execute();

        $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($usuarios as $usuario){

            if ($usuario["dni"] == $_SESSION["dni"]) {
                
                $query = $bdd->prepare("UPDATE usuarios SET `direccion` = :direccion");
                $query->bindValue(":direccion", $direccion);
                $query->execute();

                $query = $bdd->prepare("UPDATE usuarios SET `celular` = :celular");
                $query->bindValue(":celular", $celular);
                $query->execute();

                $query = $bdd->prepare("UPDATE usuarios SET `ciudad` = :ciudad");
                $query->bindValue(":ciudad", $ciudad);

                $query = $bdd->prepare("UPDATE usuarios SET `email` = :email");
                $query->bindValue(":email", $email);
                $query->execute();

                $_SESSION["email"] = $email;
                $_SESSION["ciudad"] = $ciudad;
                $_SESSION["direccion"] = $direccion;
                $_SESSION["celular"] = $celular;

                header("Location: profile.php");

            }

        }

    }
	*/
?>

@endsection

@section("titulo","Modificar Perfil")

@section("contenido")

<!-- MODIFICAR -->
	<div class="container emp-profile" style="background-color: lightgray;">
            <form method="post" action="/edit-profile" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="
                            @if(session('imagen'))
                            /storage/{{ session('imagen') }}
                            @else
                            /storage/{{ "traje.jpg" }}
                            @endif
                            "alt="imagen de perfil"/>
                            <div class="file btn btn-lg btn-primary">
                                Cambiar Foto
                                <input type="file" name="imagen"/>
                            </div>
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
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Links</p>
                            <a href="">Editar Perfil</a><br/>
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
                                                <p><input name="email" type="email" value="{{ session('email') }}"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Ciudad</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input name="ciudad" type="text" value="{{ session('ciudad') }}"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Direccion</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input name="direccion" type="text" value="{{ session('direccion') }}"></p>
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
                                            <p><input name="celular" type="number" value="{{ session('celular') }}"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6" style="text-align: center">
                                                <p><button type="submit" class="btn posicion_boton btn-lg">Modificar</button></p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

@endsection