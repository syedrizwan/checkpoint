<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkpoint extends Model
{
  public function module() {
    $this->belongsTo(Module::class);
  }

  public function assignee() {
    $this->belongsTo(User::class, 'assigned_to', 'id');
  }

  public function creator() {
    $this->belongsTo(User::class, 'creator', 'id');
  }
}
