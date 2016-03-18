<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class ProjetModel extends Model
{
    public function projet(){
        return $this->belongsTo('App\Models\User');
    }
}
