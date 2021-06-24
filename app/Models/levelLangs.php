<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class levelLangs extends Model
{
    use HasFactory;

    public function lenguages(){

        return $this->belongTo(lenguages::class);

        
    }
}