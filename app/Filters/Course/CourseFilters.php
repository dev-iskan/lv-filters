<?php


namespace App\Filters\Course;

use App\Filters\Course\Ordering\CreateOrder;
use App\Filters\Course\Ordering\ViewsOrder;
use App\Filters\FiltersAbstract;

class CourseFilters extends FiltersAbstract
{
    protected $filters = [
        'access' => AccessFilter::class,
        'difficulty' => DifficultyFilter::class,
        'type' => TypeFilter::class,
        'subject' => SubjectFilter::class,
        'started' => StartedFilter::class,
        'views' => ViewsOrder::class,
        'order' => CreateOrder::class,
        'limit' => LimitFilter::class
    ];
}