<?php

namespace App\Repositories\Student;

use App\Repositories\Student\StudentRepositoryInterface;
use App\Models\Student\Student;
use App\Models\Major\Major;
use App\Models\Year\Year;
use App\Models\Class\Classes;
use App\Models\Parent\Parents;
use Auth;
use DB;
use App\Utility;

class StudentRepository implements StudentRepositoryInterface
{
    public function getAllStudents()
    {
        $students = Student::SELECT("id", "name", "city", "distance", "moons", "parent_id")
                      ->WhereNull("deleted_at")
                      ->get();
        return $students;
    }
    public function deleteStudents($id)
    {
        $userId = Auth::guard('Administrator')->user()->id;
        $result = [];
        $paramObj 	= Student::find($id);
        $deleteObj  = Utility::addDeletedBy($paramObj);
        $deleteObj->save();
        $result['success'] = 200;
        return $result;
    }
    public function getStudent($id)
    {
        $student = Student::find($id);
        return $student;
    }
    public function updateStudent($data)
    {
        $userId 	= Auth::guard('Administrator')->user()->id;
        $id 		= $data['id'];
        $name 		= $data['student-name'];
        $city 		= $data['city-name'];
        $distance 	= $data['distance'];
        $moons 		= $data['moons'];

        $paramObj = Student::find($id);
        $paramObj->name =$name;
        $paramObj->city =$city;
        $paramObj->distance =$distance;
        $paramObj->moons =$moons;
        $updateObj = Utility::addUpdatedBy($paramObj);
        $updateObj->save();
        $result = [];
        $result['success'] = 200;
        return $result;
    }
    public function getAllClasses()
    {
        $classes = Classes::SELECT("id", "name")
                    ->whereNull('deleted_at')
                    ->get();
        return $classes;
    }
    public function getAllYears()
    {
        $years = Year::SELECT("id", "year")
        ->whereNull('deleted_at')
        ->get();
        return $years;
    }
    public function getAllMajors()
    {
        $majors = Major::SELECT("id", "name")
        ->whereNull('deleted_at')
        ->get();
        return $majors;
    }
    public function searchStudent($data)
    {
        $query   = Student::SELECT("students.name", "students.city", "students.distance", "students.moons", "students.parent_id")
                ->LEFTJOIN("year", "year.id", "=", "students.year_id")
                ->LEFTJOIN("classes", "classes.id", "=", "students.class_cd")
                ->LEFTJOIN("major", "major.id", "=", "students.major_cd");
        if ($data['year'] !== null) {
            $query = $query->where('students.year_id', '=', $data['year']);
        }
        if ($data['class'] !== null) {
            $query = $query->where('students.class_cd', '=', $data['class']);
        }
        if ($data['major'] !== null) {
            $query = $query->where('students.major_cd', '=', $data['major']);
        }
        $students   = $query->get();
        return $students;
    }

    public function getAllParents()
    {
        $parents = Parents::SELECT("id", "name")
        ->WhereNull("deleted_at")
        ->get();
        return $parents;
    }
}
