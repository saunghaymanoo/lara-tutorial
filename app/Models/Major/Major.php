<?php

namespace App\Models\Major;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $table = 'major';
    protected $fillable = ['name','created_by','updated_by','deleted_by','created_at','updated_at','deleted_at'];
}
