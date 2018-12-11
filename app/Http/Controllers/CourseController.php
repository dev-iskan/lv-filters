<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request) {
        return Course::filter($request, $this->getFilters())->get();
    }

    public function getFilters () {
        return [
            // programmatically add filter
//            'difficulty' => DifficultyFilter::class
        ];
    }
}