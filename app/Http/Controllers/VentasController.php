<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ventas;
use App\Usuarios;
use App\Items;

class VentasController extends Controller
{
    
    public function mostrarVentas(){

        $ventasRegistradas = Ventas::all();

        $vac = compact("ventasRegistradas");

        return view("/cart", $vac);

    }

    public function comprarProducto(Request $request){

        $item = ItemsController::agregarProducto($request["id"], $request["num-product"]);

        $nuevaVenta = new Ventas();

        $nuevaVenta->usuario_id = $request["id_usuario"];
        $nuevaVenta->items_id = $item->id;

        $nuevaVenta->save();

        $vac = compact("nuevaVenta");

        return view("/index", $vac);

    }

}
