<?php


namespace App\Filters\Course\Ordering;


use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class CreateOrder extends FilterAbstract
{
    public function mappings()
    {
        return [
            'oldest' => 'oldest',
            'latest' => 'latest'
        ];
    }

    public function filter(Builder $builder, $value)
    {
        $value = $this->resolveFilterValue($value);

        if($value === null) {
            return $builder;
        }

        return $builder->{$value}();
    }
}