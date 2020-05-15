<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;
use App\Productos;

class ItemsController extends Controller
{
    
    public static function agregarProducto($id, $cantidad){

        $producto = Productos::find($id);

        $nuevoItem = new Items();

        $precio = strval($producto->precio);

        $nuevoItem->precio = $precio;
        $nuevoItem->cantidad = $cantidad;
        $nuevoItem->producto_id = $id;

        $nuevoItem->save();

        return $nuevoItem;

    }

}
