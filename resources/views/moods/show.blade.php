@extends("layouts.innerPage")

@section("currentPage")
    <li><a href="{{ route('moods.index') }}">Moods</a></li>
    <li>Mood info: {{ $mood->created_at->toDateString() }}</li>
@endsection

@section("innerContent")
    <div class="jumbotron">
        <h1 class="display-4 text-primary">{{ $mood->mood }}</h1>
        <p class="lead d-inline">This is how you felt on this date: <p class="lead d-inline text-primary">{{ $mood->created_at->toDateString() }}.</p></p>
        <hr class="my-4">
        @if ( $mood->created_at->format("Y-m-d") == $today && $today == \Carbon\Carbon::today()->toDateString() )
            <p>Did your mood change? There's time left</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="{{ route('moods.edit', [$mood->id]) }}" role="button">Edit it</a>
            </p>
        @else
            <p class="d-inline">Last update: <p class="d-inline text-primary">{{ $mood->updated_at->toDateString() }}.</p></p>
        @endif
    </div>

@endsection
