<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    public function project(){
      $this->belongsTo(Project::class);
    }

    public function progress(){
      $this->hasMany(Progress::class);
    }
}
