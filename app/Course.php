<?php

namespace App;

use App\Filters\Course\CourseFilters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $appends = [
        'started'
    ];

    protected $hidden = [
        'users'
    ];

    public function getFormattedDifficultyAttribute () {
        return ucfirst($this->difficulty);
    }

    public function getFormattedTypeAttribute () {
        return ucfirst($this->type);
    }

    public function getFormattedAccessAttribute () {
        return $this->free ? 'free' : 'premium';
    }

    public function getFormattedStartedAttribute () {
        return $this->started ? 'started' : 'not started';
    }

    public function scopeFilter(Builder $builder, $request, array $filters = []) {
        return (new CourseFilters($request))->add($filters)->filter($builder);
    }

    public function subjects() {
        return $this->morphToMany(Subject::class, 'subjectable');
    }

    public function getStartedAttribute () {
        if (!auth()->check()) return false;

        return $this->users->contains(auth()->user());
    }

    public function users () {
        return $this->belongsToMany(User::class);
    }
}
