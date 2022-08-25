<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Parent\Parents;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
                            'name',
                            'city',
                            'distance',
                            'moons',
                            'year_id',
                            'class_cd',
                            'major_cd',
                            'parent_id',
                            'created_by',
                            'updated_by',
                            'deleted_by',
                            'created_at',
                            'updated_at',
                            'deleted_at'
                        ];

    protected $hidden = [];
    protected $casts = [];
    public function getParent(): BelongsTo
    {
        return $this->belongsTo(Parents::class, 'parent_id', 'id');
    }
}
