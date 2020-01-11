<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rendez_vous extends Model
{
     public $fillable = ['user_id','motif','medecin_id','date','heure'];

    public function users(){
        return $this->belongsToMany('App\User','rendez_vous_user');
        }

        public function medecins(){
            return $this->belongsTo('App\Medecin','medecin_id');
            }
}
