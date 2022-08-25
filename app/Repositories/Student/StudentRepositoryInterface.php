<?php

namespace App\Repositories\Student;

interface StudentRepositoryInterface
{
    public function getAllStudents();
    public function getAllClasses();
    public function getAllYears();
    public function getAllMajors();
    public function deleteStudents($id);
    public function getStudent($id);
    public function updateStudent($data);
    public function searchStudent($data);
    public function getAllParents();
}
