<?php

namespace App\Models\Major;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Student\Student;

class Major extends Model
{
    protected $table = 'major';
    protected $fillable = ['name','created_by','updated_by','deleted_by','created_at','updated_at','deleted_at'];
    public function getStudentByMajor(): HasMany
    {
        return $this->hasMany(Student::class, 'major_cd', 'id');
    }
}
