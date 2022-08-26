<?php

namespace App\Repositories\Api;

interface ApiRepositoryInterface
{
    public function getAllStudents();
    public function getStudentById($id);
    public function getAllParents();
    public function getParentById($id);
}
