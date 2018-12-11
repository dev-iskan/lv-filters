<?php

namespace App;

use App\Filters\Course\CourseFilters;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder;

class Course extends Model
{
    public function scopeFilter(Builder $builder, $request) {
        return (new CourseFilters($request))->filter($builder);
    }
}
