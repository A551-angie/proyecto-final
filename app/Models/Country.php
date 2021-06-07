<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    use HasFactory;

    public function recruiters(){

        return $this->hasMany(recruiters::class);

        
    }

    public function developers(){

        return $this->hasMany(Developers::class);

        
    }
}