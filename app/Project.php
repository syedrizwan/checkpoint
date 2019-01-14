<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function owner() {
      $this->belongsTo(User::class, 'owner_id', 'id');
    }

    public function goals(){
      $this->hasMany(Goal::class);
    }

    public function modules(){
      $this->hasMany(Module::class);
    }
}
