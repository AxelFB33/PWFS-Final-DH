<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclamos extends Model
{
    public $table = "reclamos";
    public $primaryKey = "id_reclamo";
    public $timestamps = false;
    public $guarded = [];
}
