<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Student\StudentRepositoryInterface;
use App\Http\Requests\Student\UpdateStudentRequest;
use App\Models\Student\Student;
use PDF;
use Session;

class AdminController extends Controller
{
    private $studentRepository;
    public function __construct(StudentRepositoryInterface $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }
    public function index()
    {
        $students   = $this->studentRepository->getAllStudents();
        $years   = $this->studentRepository->getAllYears();
        $majors   = $this->studentRepository->getAllMajors();
        $classes   = $this->studentRepository->getAllClasses();
        return view('admin.home', [
            "years" => $years,
            "majors" => $majors,
            "classes" => $classes,
            "students" => $students
        ]);
    }
    public function delete($id)
    {
        $delete = $this->studentRepository->deleteStudents($id);
        if ($delete['success'] == 200) {
            return redirect('admin/home');
        }
    }
    public function edit($id)
    {
        $student   = $this->studentRepository->getStudent($id);
        return view('admin.edit')->with('student', $student);
    }
    public function update(UpdateStudentRequest $request)
    {
        $validator  = $request->validated();
        $student   = $this->studentRepository->updateStudent($request->all());
        if ($student['success'] == 200) {
            $students   = $this->studentRepository->getAllStudents();
            return redirect('admin/home')->with('students', $students);
        }
    }
    public function download()
    {
        $students       = Student::WhereNull('deleted_at')
                          ->orderBy('id', 'desc')
                          ->get();
        $view = \View::make('pdf.studentPdf', ['students'=>$students]);
        $html_content = $view->render();
        PDF::SetTitle("List of students");
        PDF::AddPage();
        PDF::writeHTML($html_content, true, false, true, false, '');
        PDF::Output('studentlist.pdf', 'D');
    }
    public function search(Request $request)
    {
        $students   = $this->studentRepository->searchStudent($request->all());
        $years   = $this->studentRepository->getAllYears();
        $majors   = $this->studentRepository->getAllMajors();
        $classes   = $this->studentRepository->getAllClasses();

        // return view('admin.home', [
        //     "years" => $years,
        //     "majors" => $majors,
        //     "classes" => $classes,
        //     "students" => $students
        // ]);
        session()->flashInput($request->input());
        return view('admin.home')
                ->with('years', $years)
                ->with('majors', $majors)
                ->with('classes', $classes)
                ->with('students', $students);
    }

    public function getParents(Request $request)
    {
        $parents   = $this->studentRepository->getAllParents();
        return view('admin.parent')->with('parents', $parents);
    }
}
