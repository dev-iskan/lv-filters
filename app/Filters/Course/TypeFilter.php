<?php

namespace App\Filters\Course;


use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class TypeFilter extends FilterAbstract
{

    public function mappings()
    {
        return [
            'project' => 'project',
            'theory' => 'theory',
            'snippet' => 'snippet'
        ];
    }

    public function filter(Builder $builder, $value)
    {
        $value = $this->resolveFilterValue($value);
        if ($value === null) {
            return $builder;
        }
        return $builder->where('type', $value);
    }
}