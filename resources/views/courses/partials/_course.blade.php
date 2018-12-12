<div class="media my-3">
    <a href=""><img src="https://marybrand.ru/pictures/good_id2153.jpg" class="mr-3" height="64" alt=""></a>
    <div class="media-body">
        <h5 class="mt-0">{{$course->name}}</h5>
        @if($course->subjects()->exists())
            <ul class="list-inline">
                @foreach($course->subjects as $subject)
                <li class="list-inline-item"> {{$subject->name}}</li>
                @endforeach
            </ul>
        @endif
        <ul class="list-inline">
            <li class="list-inline-item">{{ $course->formattedAccess }}</li>
            <li class="list-inline-item">{{ $course->formattedDifficulty }}</li>
            <li class="list-inline-item">{{ $course->formattedType }}</li>
            <li class="list-inline-item">{{ $course->formattedStarted }}</li>
        </ul>
    </div>
</div>