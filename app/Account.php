<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected static $link = 'https://res.cloudinary.com/dwarrion/image/upload/' ;
    public $fillable = ['FullName','Email','PasswordHash','DateOfBirth','PhoneNumber','Address','IDNo','Slug','Avatar','Salt','Status','RoleID'];
    public function role(){
        return $this->belongsTo(Role::class,'RoleID','id');
    }

    public function getAvatar600x600Attribute(){
        return self::$link.'c_scale,h_279,w_412/'.$this->Avatar;
    }
}
