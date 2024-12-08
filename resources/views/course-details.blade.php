<h2>{{ $course->title }}</h2>
<img src="{{ $course->image }}" alt="Image of the course {{ $course->title }}">
<h3>{{ $course->tagline }}</h3>
<p>{{ $course->description }}</p>
<ul>
    @foreach($course->learnings as $learning)
        <li>{{ $learning }}</li>
    @endforeach
</ul>
