<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
  public function project() {
    $this->belongsTo(Project::class);
  }

  public function checkpoints(){
    $this->hasMany(Checkpoint::class);
  }

  public function team(){
    $this->belongsToMany(Users::class)->withPivot('leading');
  }
}
