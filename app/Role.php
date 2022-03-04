<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Role extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'nom', 'description','slug'
  ];

  public function users()
  {
    return $this->hasMany(User::class,'role','id');
  }
}
