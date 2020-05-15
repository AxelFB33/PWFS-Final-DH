<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    
    public $table = "items";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];

    public function venta(){

        return $this->hasMany("App\Ventas", "items_id");
        
    }

    public function producto() {

        return $this->belongsTo("App\Productos", "producto_id");

    }

}
