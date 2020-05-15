@extends("layout")

@section("titulo","Recuperar Constraseña")

@section("contenido")
<!-- Section -->
    <div class="container espacio">
        <table class="table table-striped">
           <tbody>
              <tr>
                 <td colspan="1">
                    <form class="well form-horizontal" method="post">
                    {{csrf_field()}}
                       <fieldset>
                        <div class="form-group">
                            <div class="col-md-8 inputGroupContainer">
                                <h2 class="cfg_titulo_form">Recuperar Contraseña</h2>
                            </div>
                        </div>
                        <input name="tipoUsuario_id" type="hidden" value="2">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nombre Completo: </label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><input id="nombrecompleto" name="nombrecompleto" placeholder="Nombre Completo" class="form-control" required="true" type="text"></div>
                            </div>
                         </div>
						      <div class="form-group">
							      <label class="col-md-4 control-label">Email: </label>
							      <div class="col-md-8 inputGroupContainer">
							         <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Email" class="form-control" required="true" type="text"></div>
							      </div>
						      </div>
						      <div class="form-group">
                            <label class="col-md-4 control-label">Dni: </label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><input id="dni" name="dni" placeholder="Dni" class="form-control" required="true" type="number"></div>
                            </div>
                         </div>
                         <br><br>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Nueva contraseña: </label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><input id="contrasenha" name="contrasenha" placeholder="Contraseña" class="form-control" required="true" value="" type="password"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Confirmar contraseña: </label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><input id="recontrasenha" name="recontrasenha" placeholder="Confirmar" class="form-control" required="true" value="" type="password"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <div class="col-md inputGroupContainer" style="text-align: right;">
                                <button type="submit" class="btn posicion_boton btn-lg">Cambiar Contraseña</button>
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