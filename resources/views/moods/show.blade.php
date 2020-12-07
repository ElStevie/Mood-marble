<h1>Mood info</h1>
<p>You felt: {{ $mood->mood }}</p>
<p>On this day: {{ explode(" ", $mood->created_at)[0] }} </p>
<p>Last update: {{ explode(" ", $mood->updated_at)[1] }}</p>
@if ( explode(" ", $mood->created_at)[0] == $today && $today == \Carbon\Carbon::today() )
    <a href="{{ route('moods.edit', [$mood->id]) }}">Edit</a>
@endif
