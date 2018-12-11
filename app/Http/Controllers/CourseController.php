<?php

namespace App\Http\Controllers;

use App\Course;

class CourseController extends Controller
{
    public function index() {
        return Course::get();
    }
}