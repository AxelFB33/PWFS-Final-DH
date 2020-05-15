<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
use Cookie;

class UsuariosController extends Controller
{
    public function verificarUsuario(Request $request) {

        $usuariosRegistrados = Usuarios::all();

        foreach($usuariosRegistrados as $usuario){
            if ($usuario["email"] == $request["email"]){
                if (password_verify($request["contrasenha"], $usuario["contrasenha"])){

                    $request->session()->put([
                        "email" => $usuario["email"],
                        "nombrecompleto" => $usuario["nombrecompleto"],
					    "ciudad" => $usuario["ciudad"],
					    "direccion" => $usuario["direccion"],
					    "dni" => $usuario["dni"],
					    "celular" => $usuario["celular"],
                        "imagen"=> $usuario["imagen"],
                        "id" => $usuario["id"],
                        "tipoUsuario_id" => $usuario["tipoUsuario_id"]
                    ]);

                    if ($request["checkbox"] == "si"){
                        Cookie::queue('email', $request["email"], 60);
                        Cookie::queue('contrasenha', $request["contrasenha"], 60);   
                    }

                    return view("/profile");
                } else {
                    $error = "Error en la contrasenha.";

                    $vac = compact("error");

                    return view("login", $vac);
                }
            } else {

                $error = "Error en el email.";

                $vac = compact("error");

                return view("login", $vac);

            }
        }

    }

    public function cerrarSession(){

        session()->flush();

        return view("/login");
    }

    public function editarUsuario(Request $request) {

        $usuariosRegistrados = Usuarios::all();

        foreach($usuariosRegistrados as $usuario){

            if($usuario["email"] == session('email')){
        
                if ($request["imagen"] != NULL){
        
                    $ruta = $request->file("imagen")->store("public");
                    $nombreArchivo = basename($ruta);
                    $usuarioNuevo->imagen = $nombreArchivo;
                
                }
                $usuario->ciudad = $request["ciudad"];
                $usuario->direccion = $request["direccion"];                
                $usuario->email = $request["email"];                
                $usuario->celular = $request["celular"];

                $request->session()->put([
                    "email" => $request["email"],
                    "ciudad" => $request["ciudad"],
                    "direccion" => $request["direccion"],
                    "celular" => $request["celular"],
                    "imagen"=> $request["imagen"]
                ]);
                
                $usuario->save();

                return redirect("/profile");

            }

        }

    }

    public function cambiarContrasenha(Request $request) {
        $usuariosRegistrados = Usuarios::all();

        foreach($usuariosRegistrados as $usuario){
            if ($usuario["email"] == $request["email"]){
                if ($usuario["nombrecompleto"] == $request["nombrecompleto"]){
                    if ($usuario["dni"] == $request["dni"]){

                        $reglas = [
                            "contrasenha" => "min:3|required|same:recontrasenha"
                        ];
                
                        $mensaje = [
                            "required" => "El campo :attribute es requerido.",
                            "min" => "El campo :attribute debe tener un minimo de :min caracteres.",
                            "same" => "Las contrasenhas no coinciden."
                        ];
                
                        $this->validate($request, $reglas, $mensaje);

                        $hash = password_hash ($request["contrasenha"], PASSWORD_DEFAULT);

                        $usuario->contrasenha = $hash;

                        $usuario->save();
    
                        return view("/login");

                    }else {

                        $error = "No se ha encontrado el usuario.";

                        $vac = compact("error");

                        return view("/remember", $vac); 

                    }
                } else {
                    $error = "No se ha encontrado el usuario.";

                    $vac = compact("error");

                    return view("/remember", $vac); 
                }
            } else {

                $error = "No se ha encontrado el usuario.";

                $vac = compact("error");

                return view("/remember", $vac); 

            }
        }
    }

    public function registrarUsuario(Request $request) {
        
        $reglas = [
            "nombrecompleto" => "string|required",
            "ciudad" => "string",
            "direccion" => "string",
            "dni" => "numeric|required|unique:usuarios,dni",
            "email" => "email|required|unique:usuarios,email",
            "celular" => "numeric",
            "contrasenha" => "min:3|required|same:recontrasenha",
            "imagen" => "image"
        ];

        $mensaje = [
            "string" => "El campo :attribute debe rellenarse solamente con texto.",
            "required" => "El campo :attribute es requerido.",
            "numeric" => "El campo :attribute debe rellenarse solamente con numeros.",
            "email" => "El campo :attribute debe ser rellenado con un email valido.",
            "min" => "El campo :attribute debe tener un minimo de :min caracteres.",
            "image" => "El campo :attribute debe ser rellenado con una imagen valida.",
            "unique" => "El campo :attribute ya tiene un usuario registrado con esta informacion.",
            "same" => "Las contrasenhas no coinciden."
        ];

        $this->validate($request, $reglas, $mensaje);

        //Creando usuario nuevo.
        $usuarioNuevo = new Usuarios();

        if ($request["imagen"] != NULL){
        
            $ruta = $request->file("imagen")->store("public");
            $nombreArchivo = basename($ruta);
            $usuarioNuevo->imagen = $nombreArchivo;
        
        }

        $usuarioNuevo->nombrecompleto = $request["nombrecompleto"];
        $usuarioNuevo->ciudad = $request["ciudad"];
        $usuarioNuevo->direccion = $request["direccion"];
        $usuarioNuevo->dni = $request["dni"];
        $usuarioNuevo->email = $request["email"];
        $usuarioNuevo->celular = $request["celular"];
        $usuarioNuevo->tipoUsuario_id = $request["tipoUsuario_id"];

        $hash = password_hash ($request["contrasenha"], PASSWORD_DEFAULT);

        $usuarioNuevo->contrasenha = $hash;
        
        $usuarioNuevo->save();

        return redirect("/login");

    }
}
