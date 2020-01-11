<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialite extends Model
{

    public $fillable = ['name'];

    public function medecin(){
        return $this->hasMany(Medecin::class);
        }
}
