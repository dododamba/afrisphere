<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','surname', 'email', 'password','username','role','remember_token','confirm_token','reset_token','phone','adress'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function getRole()
    {
        return $this->belongsTo(Role::class, 'role');
    }



    private function checkIfUserHasRole($need_role)
   {
       return (strtolower($need_role)==strtolower($this->roles->name)) ? true : null;
   }



   public function hasRole($roles)
   {
       if (is_array($roles))
       {

           foreach ($roles as $need_role)
           {
               if ($this->checkIfUserHasRole($need_role))
               {
                   return true;
               }
           }
       } else{
           return $this->checkIfUserHasRole($roles);
       }
       return false;
   }


   
    public function photos()
    {
        $logged_user_id = Auth::user()->id;
        return Media::all()->where('owner',$logged_user_id);
    }

    public function current_profile_pict()
    {
        return $this->hasMany(Media::class,'owner')->orderBy('created_at','desc');
    }
}
