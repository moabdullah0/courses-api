<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sessions extends Model
{
    use HasFactory;
protected $table='sessions';
protected $fillable=['id','title','descriprtion','link','courses_id'];


    public function courses(){
        return $this->belongsTo(courses::class);
    }
}
