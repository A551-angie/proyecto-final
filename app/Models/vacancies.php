<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vacancies extends Model
{
    use HasFactory;

    public function recruiter(){

        return $this->belongsTo(recruiter::class);

    }

    public function CategoryVacancies(){

        return $this->belongsToMany(CategoryVacancies::class);

        
    }

    public function tegnologies(){

        return $this->belongsToMany(tegnologies::class);

        
    }
}