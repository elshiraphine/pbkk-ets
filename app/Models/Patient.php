<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public function post(){
        return $this->hasMany(Post::class);
    }

    public function doctor(){
        return $this->belongsTo(Patient::class);
    }
}
