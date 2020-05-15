<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    public $table = "usuarios";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];

    public function tipousuario() {

        return $this->belongsTo("App\TipoUsuario", "tipoUsuario_id");

    }

    public function ventas(){
        
        return $this->hasMany("App\Ventas", "usuario_id");

    }

}
