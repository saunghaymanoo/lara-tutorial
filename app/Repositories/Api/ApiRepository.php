<?php

namespace App\Repositories\Api;

use App\Repositories\Api\ApiRepositoryInterface;
use App\Models\Student\Student;
use App\Models\Major\Major;
use App\Models\Year\Year;
use App\Models\Class\Classes;
use App\Models\Parent\Parents;
use Auth;
use DB;
use App\Utility;

class ApiRepository implements ApiRepositoryInterface
{
    public function getAllStudents()
    {
        $students = Student::SELECT("students.id", "students.name as sname", "students.city", "students.distance", "students.moons", "students.parent_id", "students.major_cd", "students.year_id")
                      ->WhereNull("students.deleted_at")
                      ->get();
        return $students;
    }
    public function getStudentById($id)
    {
        $student    = Student::SELECT("students.id", "students.name as sname", "students.city", "students.distance", "students.moons", "students.parent_id", "students.major_cd", "students.year_id")
                        ->find($id);
        return $student;
    }
    public function getAllParents()
    {
        $parents = Parents::SELECT("id", "name")
        ->WhereNull("deleted_at")
        ->get();
        return $parents;
    }
    public function getParentById($id)
    {
        $parent    = Parents::find($id);
        return $parent;
    }
}
