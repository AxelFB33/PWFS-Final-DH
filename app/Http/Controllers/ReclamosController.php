<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reclamos;

class ReclamosController extends Controller
{
    public function mostrarReclamos() {

    }

    public function agregarReclamo(Request $request) {
        
        $reglas = [
            "nombrecompleto" => "string|required",
            "email" => "email|required",
            "celular" => "numeric",
            "mensaje" => "string|min:10"
        ];

        $mensaje = [
            "string" => "El campo :attribute debe rellenarse solamente con texto.",
            "required" => "El campo :attribute es requerido.",
            "numeric" => "El campo :attribute debe rellenarse solamente con numeros.",
            "email" => "El campo :attribute debe ser rellenado con un email valido.",
            "min" => "El campo :attribute debe tener un minimo de :min caracteres."
        ];

        $this->validate($request, $reglas, $mensaje);

        $reclamoNuevo = new Reclamos;

		$reclamoNuevo->nombrecompleto = $request["nombrecompleto"];
		$reclamoNuevo->celular = $request["celular"];
		$reclamoNuevo->email = $request["email"];
        $reclamoNuevo->mensaje = $request["mensaje"];
            
        $reclamoNuevo->save();

        $reclamo = "El reclamo se ha enviado con exito.";

        $vac = compact("reclamo");
        
        return view("/contact", $vac);
    }

    public function eliminarReclamo() {

    }

    public function editarReclamo() {
        
    }
}
