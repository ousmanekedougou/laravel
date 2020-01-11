<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedecinComment extends Model
{
    protected $fillable = [
        'name','prenom', 'email', 'comment'
    ];
    //
}
