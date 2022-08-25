<?php

namespace App\Models\Class;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';
    protected $fillable = ['name','created_by','updated_by','deleted_by','created_at','updated_at','deleted_at'];
}
