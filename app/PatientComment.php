<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientComment extends Model
{
  protected $fillable = [
    'name','prenom', 'email', 'comment'
];

}
