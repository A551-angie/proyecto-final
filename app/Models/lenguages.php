<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lenguages extends Model
{
    use HasFactory;

    public function developers(){

        return $this->belongsToMany(Developers::class);

        
    }

    public function levelLangs(){

        return $this->hasMany(levelLangs::class);

        
    }
}