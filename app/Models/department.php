<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    protected $table='departments';
    public $timestamps=false;
    public function employee() {
        return $this->hasMany('employee','department_id','department_id');
    }
}
