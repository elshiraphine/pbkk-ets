<?php

namespace App\Models;

use Dotenv\Store\File\Paths;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function post(){
        return $this->hasMany(Post::class);
    }

    public function patient(){
        return $this->hasMany(Patient::class);
    }
}
