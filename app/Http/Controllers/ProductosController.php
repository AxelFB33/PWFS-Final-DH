<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Items;

class ProductosController extends Controller
{
    public function mostrarProducto($id_producto) {

        $producto = Productos::find($id_producto);

        $vac = compact("producto");

        return view("/product-detail", $vac);
    }

    public function agregarProducto (Request $request){

        $reglas = [
            "nombre" => "string|required|unique:productos,nombre",
            "tipo" => "string|required",
            "descripcion" => "string|required",
            "precio" => "numeric|required",
            "imagen" => "image|required"
        ];

        $mensaje = [
            "string" => "El campo :attribute debe rellenarse solamente con texto.",
            "required" => "El campo :attribute es requerido.",
            "numeric" => "El campo :attribute debe rellenarse solamente con numeros.",
            "image" => "El campo :attribute debe ser rellenado con una imagen valida.",
            "unique" => "El campo :attribute ya tiene un usuario registrado con esta informacion."
        ];

        $this->validate($request, $reglas, $mensaje);

        //Creando producto nuevo.
        $productoNuevo = new Productos();

        $productoNuevo->imagen = $request["imagen"];
        $productoNuevo->nombre = $request["nombre"];
        $productoNuevo->descripcion = $request["descripcion"];
        $productoNuevo->tipo = $request["tipo"];
        $productoNuevo->precio = $request["precio"];

        //$productoNuevo->tipoProducto_id = $request["tipoProducto_id"];

        $productoNuevo->save();

        return redirect("/index");
    }

    public function mostrarProductos(){
        $productos = Productos::all();

        $vac = compact('productos');

        return view('/show-stock', $vac);

    }

    public function eliminarProducto (Request $request){
        $producto = Productos::find($request["id"]);

        $producto->delete();

        return redirect('/show-stock');
    }

    public function cualEdito() {
        $productos = Productos::all();

        $vac = compact('productos');

        return view('/edit', $vac);
    }

    public function mostrarEditar(Request $request){

        $producto = Productos::find($request["id"]);

        $vac = compact("producto");

        return view("/edit-stock", $vac);

    }

    public function editar(Request $request){
        $producto = Productos::find($request["id"]);

            $producto->nombre = $request["nombre"];
            $producto->descripcion = $request["descripcion"];                
            $producto->tipo = $request["tipo"];                
            $producto->precio = $request["precio"];
                
            $producto->save();

            return redirect("/show-stock");
        
    }
    
}
