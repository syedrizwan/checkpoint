<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    public function goal(){
      $this->belongsTo(Goal::class);
    }
}
