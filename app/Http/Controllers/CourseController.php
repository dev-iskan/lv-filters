<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request) {
        $courses = Course::with(['subjects', 'users'])->filter($request/*, $this->getFilters()*/)->get();

        return view('courses.index', compact('courses'));
    }

    public function getFilters () {
        return [
            // programmatically add filter
//            'difficulty' => DifficultyFilter::class
        ];
    }
}