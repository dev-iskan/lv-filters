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

    public static function mapping () {
        return [
            'access' => ['free' => 'Free', 'premium' => 'Premium'],
            'difficulty' => ['beginner' => 'Beginner', 'intermediate' => 'Intermediate', 'advanced' => 'Advanced'],
            'type' => ['snippet' => 'Snippet', 'project' => 'Project', 'theory' => 'Theory'],
            'subject' => \App\Subject::get()->pluck('name', 'slug'),
            'started' => ['true' => 'Started', 'false' => 'Not started']
        ];
    }
}