<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developers extends Model
{
    use HasFactory;

    public function user(){

        return $this->hasOne(User::class);

        
    }

    public function country(){

        return $this->belongsTo(country::class);

        
    }

    public function languages(){

        return $this->belongsToMany(lenguages::class);

        
    }

    public function skull(){

        return $this->belongsToMany(skull::class);

        
    }

    public function educations(){

        return $this->belongsToMany(education::class);

        
    }

    public function projects(){

        return $this->hasMany(projects::class);

        
    }
}