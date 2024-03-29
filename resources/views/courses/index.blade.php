@extends('layouts.app')

{{--@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                @include('courses.partials._filters')
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Courses</div>
                    <div class="card-body">
                        @if($courses->count())
                            @each('courses.partials._course', $courses, 'course')
                            {{$courses->appends(request()->query())->links()}}
                        @else
                            No courses found
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection--}}
