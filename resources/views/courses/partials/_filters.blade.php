<div class="list-group">
    @foreach(['free' => 'Free', 'premium' => 'Premium'] as $value => $name)
        <a href="{{route('courses.index', array_merge(request()->query(), ['access' => $value]))}}"
           class="list-group-item list-group-item-action {{request('access') === $value ? 'active' : ''}}">{{ $name }}</a>
    @endforeach
</div>