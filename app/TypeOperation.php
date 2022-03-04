<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class TypeOperation extends Model
{
   protected $fillable = ['libelle','description','slug'];
   use SoftDeletes;
   protected $dates = ['deleted_at'];
}
