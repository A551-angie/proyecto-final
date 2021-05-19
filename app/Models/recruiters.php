<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recruiters extends Model
{
    use HasFactory;

    
    public function user(){

        return $this->hasOne(User::class);

        
    }

    public function country(){

        return $this->belongsTo(country::class);

        
    }

    public function vacancies(){

        return $this->hasMany(vacancies::class);

        
    }
}