<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tegnologies extends Model
{
    use HasFactory;

    public function vacancies(){

        return $this->belongsToMany(vacancies::class);

        
    }
}