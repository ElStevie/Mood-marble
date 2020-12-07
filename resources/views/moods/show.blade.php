<h1>Mood info</h1>
<p>You felt: {{ $mood->mood }}</p>
<p>On this day: {{ $mood->created_at->format("Y-m-d") }} </p>
<p>Last update: {{ $mood->updated_at->format("H:i:s") }}</p>
@if ( $mood->created_at->format("Y-m-d") == $today && $today == \Carbon\Carbon::today()->toDateString() )
    <p>Did your mood change? <a href="{{ route('moods.edit', [$mood->id]) }}">Edit it!</a></p>
@endif
