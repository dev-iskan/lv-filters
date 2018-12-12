<p>
    <a href="{{route('courses.index')}}">Clear all filters</a>
</p>
@foreach(\App\Filters\Course\CourseFilters::mapping() as $key => $map)
    @include('courses.partials._filter_list', compact('key', 'map'))
@endforeach