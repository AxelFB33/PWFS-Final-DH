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

}
