<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Parent\Parents;
use App\Models\Major\Major;
use App\Models\Year\Year;

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

    protected $hidden = ["created_by","updated_by","parent_id","deleted_by","created_at","updated_at","deleted_at"];
    protected $casts = [];
    public function getParent(): BelongsTo
    {
        return $this->belongsTo(Parents::class, 'parent_id', 'id');
    }
    public function getMajor(): BelongsTo
    {
        return $this->belongsTo(Major::class, 'major_cd', 'id');
    }
    public function getYear(): BelongsTo
    {
        return $this->belongsTo(Year::class, 'year_id', 'id');
    }
}
