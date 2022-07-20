<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkCategory extends Model
{
    use HasFactory;

     public function work(){
           return $this->hasMany('App\Models\Work');
       }
}
