<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    use HasFactory;
    protected $table='roles';
protected $fillable=['id','role_name'];
public function users(){
    return $this->belongsToMany(User::class,'roles_users');
}
}
