<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    
    protected $table='employees';
   public $timestamps=false;
   public function department(){
     return $this->belongsTo('department','department_id','department_id');
   }
}
