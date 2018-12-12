<?php

namespace App\Filters\Course;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class LimitFilter extends FilterAbstract {

    public function filter(Builder $builder, $value)
    {   $value = (int) $value;
        if($value === 0) {
            return $builder;
        }
        return $builder->limit($value);
    }
}