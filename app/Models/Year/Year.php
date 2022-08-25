<?php

namespace App\Models\Year;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $table = 'year';
    protected $fillable = ['year','created_by','updated_by','deleted_by','created_at','updated_at','deleted_at'];
}
