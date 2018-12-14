<?php

namespace App\Http\Controllers\Api;

use App\Course;
use App\Http\Resources\CourseResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index (Request $request) {
        return CourseResource::collection(
            Course::with(['subjects', 'users'])->filter($request)->paginate(2)
        );

    }
}
