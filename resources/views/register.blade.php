@extends("layout")

@section("php")

<?php

	

?>

@endsection

@section("titulo", "Registro")

@section("contenido")
<!-- content -->
    <div class="container espacio">
        <table class="table table-striped">
           <tbody>
              <tr>
                 <td colspan="1">
                    <form class="well form-horizontal" method="post" action="/register" enctype="multipart/form-data">
                    {{csrf_field()}}
                       <fieldset>
                        <div class="form-group">
                            <div class="col-md-8 inputGroupContainer">
                                <h2 class="cfg_titulo_form">Crear Cuenta</h2>
                            </div>
                           <ul style="color:red;" class="alert">
                                 @foreach ($errors->all() as $error)
                              <li>
                                 {{$error}}
                              </li>
                                 @endforeach
                           </ul>
                        </div>
                          <div class="form-group">
                             <label class="col-md-4 control-label">Nombre Completo: </label>
                             <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="nombrecompleto" name="nombrecompleto" placeholder="Nombre Completo" class="form-control" required="true" value="{{old("nombrecompleto")}}" type="text"></div>
                             </div>
                          </div>
						  <div class="form-group">
                             <label class="col-md-4 control-label">Imagen de perfil: </label>
                             <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="imagen" name="imagen" class="form-control" type="file"></div>
                             </div>
                          </div>
                          <div class="form-group">
                             <label class="col-md-4 control-label">Ciudad: </label>
                             <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="ciudad" name="ciudad" placeholder="Ciudad" class="form-control" required="true" value="{{old("ciudad")}}" type="text"></div>
                             </div>
                          </div>
                          <div class="form-group">
                             <label class="col-md-4 control-label">Direccion: </label>
                             <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="direccion" name="direccion" placeholder="Direccion" class="form-control" required="true" value="{{old("direccion")}}" type="text"></div>
                             </div>
                          </div>
                          <div class="form-group">
                             <label class="col-md-4 control-label">DNI: </label>
                             <div class="col-md-8 inputGroupContainer">
                                <div class="input-group">
                                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span><input id="dni" name="dni" placeholder="DNI" class="form-control" required="true" value="{{old("dni")}}" type="number"></div>
                                </div>
                             </div>
                          </div>
                          <div class="form-group">
                             <label class="col-md-4 control-label">Email: </label>
                             <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Email" class="form-control" required="true" value="{{old("email")}}" type="text"></div>
                             </div>
                          </div>
                          <div class="form-group">
                             <label class="col-md-4 control-label">Numero de Celular: </label>
                             <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="celular" name="celular" placeholder="Celular" class="form-control" required="true" value="{{old("celular")}}" type="number"></div>
                             </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label">Contraseña: </label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><input id="contrasenha" name="contrasenha" placeholder="Contraseña" class="form-control" required="true" value="" type="password"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Confirmar Contraseña: </label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><input id="recontrasenha" name="recontrasenha" placeholder="Confirmar Contraseña" class="form-control" required="true" value="" type="password"></div>
                            </div>
                         </div>
                         <input name="tipoUsuario_id" type="hidden" value="2">
                         <div class="form-group">
                            <div class="col-md inputGroupContainer" style="text-align: right;">
                                <button type="submit" class="btn posicion_boton btn-lg">Registrarse</button>
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