<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role() {
      $this->belongsTo(Role::class);
    }

    public function designation() {
      $this->belongsTo(Designation::class);
    }

    public function organization() {
      $this->belongsTo(Organization::class);
    }

    public function employees() {
      $this->hasMany(User::class , 'report_to', 'id');
    }

    public function manager(){
      $this->belongsTo(User::class, 'report_to', 'id');
    }

    public function projects_owned(){
      $this->hasMany(Project::class, 'owner_id', 'id');
    }

    public function checkpoints_created(){
      $this->hasMany(Checkpoint::class, 'creator', 'id');
    }

    public function checkpoints_assigned(){
      $this->hasMany(Checkpoint::class, 'assigned_to', 'id');
    }

    public function modules(){
      $this->belongsToMany(Module::class)->withPivot('leading');
    }
}
