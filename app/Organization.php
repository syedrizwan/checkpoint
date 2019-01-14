<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
  public function users() {
    $this->hasMany(User::class);
  }
}
