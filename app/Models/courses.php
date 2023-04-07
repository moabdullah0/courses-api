<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;
    protected $table='courses';
    protected $fillable=['id','title','image','description'];

    public function sessions(){
        return $this->hasMany(sessions::class);
    }

    public function users(){
        return $this->hasMany(User::class,'courses_id');
    }
}
