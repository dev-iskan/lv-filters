@if(count(array_intersect(array_keys(request()->query()), array_keys($mappings))))
<p>
    <a href="{{route('courses.index')}}">Clear all filters</a>
</p>
@endif
@foreach($mappings as $key => $map)
    @include('courses.partials._filter_list', compact('key', 'map'))
@endforeach