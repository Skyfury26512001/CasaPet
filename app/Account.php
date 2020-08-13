<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public function role(){
        return $this->belongsTo(Role::class,'Role_id','id');
    }
}
