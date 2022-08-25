<?php

namespace App\Models\Parent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Student\Student;

class Parents extends Model
{
    protected $table = 'parents';
    protected $fillable = [
        'id',
        'name',
        'created_by',
        'updated_by',
        'deleted_by',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $hidden = [];
    protected $casts = [];
    public function getStudentByParent(): HasMany
    {
        return $this->hasMany(Student::class, 'parent_id', 'id');
    }
}
