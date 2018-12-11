<?php


namespace App\Filters\Course;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CourseFilters
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function filter (Builder $builder) {
        return $builder;
    }
}