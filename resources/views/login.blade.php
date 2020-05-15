@extends("layout")

@section("php")

<?php

   session_start();

   $email = Cookie::get('email');
   $contrasenha = Cookie::get('contrasenha');

   $cookieUsuario["email"] = $email;
   $cookieUsuario["contrasenha"] = $contrasenha;
					
?>

@endsection

@section("titulo", "Login")

@section("contenido")
<!-- LOOOGGIN -->
    <div class="container espacio">
        <table class="table table-striped">
           <tbody>
              <tr>
                 <td colspan="1">
                    <form class="well form-horizontal" action="/login" method="post">
                     {{ csrf_field() }}
                       <fieldset>
                        <div class="form-group">
                            <div class="col-md-8 inputGroupContainer">
                                <h2 class="cfg_titulo_form">Log In</h2>
                            </div>
                        </div>
                        <ul style="color:red;" class="alert">
                                 @if(isset($error))
                              <li>
                                 {{$error}}
                              </li>
                                 @endif
                        </ul>
						<div class="form-group">
							<label class="col-md-4 control-label">Email: </label>
							<div class="col-md-8 inputGroupContainer">
							   <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Email" class="form-control" value="@if(isset($cookieUsuario)){{$cookieUsuario["email"]}}@endif" required="true" type="text"></div>
							</div>
						 </div>
						 <div class="form-group">
                            <label class="col-md-4 control-label">Contraseña: </label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><input id="contrasenha" name="contrasenha" placeholder="Contraseña" value="@if(isset($cookieUsuario)){{$cookieUsuario["contrasenha"]}}@endif" class="form-control" required="true" value="" type="password"></div>
                            </div>
                         </div>
						 <br>
						 <div class="form-group">
						 	<p style="text-align: center;">
							 ¿Recordar usuario y contraseña? - <span style="color: blue;">Recordar.</span> <input style="margin-right: 2px;" type="checkbox" value="si" name="checkbox"><br>
							 ¿Olvidaste tu contraseña? <a href="/remember" style="color: blue;">Recuperar.</a> <br>
							 ¿No tienes una cuenta? <a href="/register" style="color: blue;">Crear cuenta.</a> 
							</p> 
						 </div>
                         <div class="form-group">
                            <div class="col-md inputGroupContainer" style="text-align: right;">
                                <button type="submit" class="btn posicion_boton btn-lg">Iniciar Sesion</button>
                            </div>
                         </div>
                       </fieldset>
                    </form>
                 </td>
              </tr>
           </tbody>
        </table>
     </div>
    
@endsection