<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    public $table = "ventas";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];

    public function usuario(){

        return $this->belongsTo("App\Usuarios","usuario_id");

    }

    public function items(){

        return $this->belongsTo("App\Items", "items_id");
        
    }

}
