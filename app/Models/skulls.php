<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skulls extends Model
{
    use HasFactory;

    public function developers(){

        return $this->belongsToMany(Developers::class);

        
    }
}