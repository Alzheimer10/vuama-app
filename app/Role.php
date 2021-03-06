<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = ['id'];
    
    public function admins(){
        return $this->belongsToMany(Admin::class);
    }
    
     public function permissions(){
        return $this->belongsToMany(Permission::class);
    }
}
