<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
  public function users() {
    $this->hasMany(User::class);
  }
}
