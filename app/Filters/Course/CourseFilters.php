<?php


namespace App\Filters\Course;

use App\Filters\Course\Ordering\ViewsFilter;
use App\Filters\FiltersAbstract;

class CourseFilters extends FiltersAbstract
{
    protected $filters = [
        'access' => AccessFilter::class,
        'difficulty' => DifficultyFilter::class,
        'type' => TypeFilter::class,
        'subject' => SubjectFilter::class,
        'started' => StartedFilter::class,
        'views' => ViewsFilter::class
    ];
}