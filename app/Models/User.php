<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User 
{
    public $ten ;
    public $tuoi ;
    public $nghenghiep;
    public $gioitinh;
    public function __construct($tenV,$tuoiV,$nghenghiepV,$gioitinhV)
    {
        $this->ten=$tenV;
        $this->tuoi=$tuoiV;
        $this->nghenghiep= $nghenghiepV;
        $this->gioitinh=$gioitinhV;

    }
}
