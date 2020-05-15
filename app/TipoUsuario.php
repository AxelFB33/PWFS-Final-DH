<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoUsuario extends Model
{
    public $table = "tipoUsuario";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];

    public function usuario(){

        return $this->belognsTo("App\Usuarios", "tipoUsuario_id");

    }

}
