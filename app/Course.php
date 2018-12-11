<?php

namespace App;

use App\Filters\Course\CourseFilters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function scopeFilter(Builder $builder, $request, array $filters = []) {
        return (new CourseFilters($request))->add($filters)->filter($builder);
    }

    public function subjects() {
        return $this->morphToMany(Subject::class, 'subjectable');
    }
}
