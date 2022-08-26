<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JWTAuth;
use App\Models\User;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Validator;
use App\Repositories\Api\ApiRepositoryInterface;
use App\Http\Resources\Student\StudentCollection;
use App\Http\Resources\Student\StudentResource;
use App\Http\Resources\Parent\ParentCollection;
use App\Http\Resources\Parent\ParentResource;
use App\Utility;
use DB;

class ApiController extends Controller
{
    protected $apiRepository;
    public function __construct(ApiRepositoryInterface $apiRepository)
    {
        DB::connection()->enableQueryLog();
        $this->apiRepository = $apiRepository;
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('name', 'password');

        //valid credential
        $validator = Validator::make($credentials, [
            'name' => 'required',
            'password' => 'required|max:50'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is validated
        //Crean token
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Login credentials are invalid.',
                ], 400);
            }
        } catch (JWTException $e) {
            return $credentials;
            return response()->json([
                    'success' => false,
                    'message' => 'Could not create token.',
                ], 500);
        }

        //Token created, return with success response and jwt token
        return response()->json([
            'success' => true,
            'token' => $token,
        ]);
    }
    public function getStudent(Request $request)
    {
        $students   = $this->apiRepository->getAllStudents();
        return new StudentCollection($students);
    }
    public function getStudentById(Request $request)
    {
        $id     = $request->get('id');
        $student = $this->apiRepository->getStudentById($id);
        return new StudentResource($student);
    }
    public function getManager(Request $request)
    {
        dd("aaa");
    }
    public function getAllParents()
    {
        try {
            $parents   = $this->apiRepository->getAllParents();
            $logMessage 		= " Fetch Student All";
            Utility::customLog($logMessage);
            return new ParentCollection($parents);
        } catch (Exception $e) {
            Utility::customErrorLog($e->getMessage());
        }
    }
    public function getParentById(Request $request)
    {
        $id     = $request->get('id');
        $parent = $this->apiRepository->getParentById($id);
        return new ParentResource($parent);
    }
}
