<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medecin_Specialite extends Model
{
    public function specialites(){
        return $this->belongsToMany('App\Specialite');
        }
}
