<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vacancies extends Model
{
    use HasFactory;

    protected $table='vacancies';
    protected $primaryKey="id";
    protected $fillable = [
        'title', 'esperienceRequired', 'salary','location','currency', 'descriptionVacancy','state', 
    ];
    protected $dates = ['endDate'];

    public function recruiter(){

        return $this->belongsTo(recruiter::class);

    }

    public function CategoryVacancies(){

        return $this->belongsToMany(CategoryVacancies::class);

        
    }

    public function tegnologies(){

        return $this->belongsToMany(tegnologies::class);

        
    }

    public function user(){

        return $this->belongsTo(User::class);

        
    }

    public function getExcerptAttribute()
    {
        return substr($this->descriptionVacancy,0, 80). "...";
    }

        
    

}