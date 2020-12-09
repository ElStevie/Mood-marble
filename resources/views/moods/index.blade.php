@extends("layouts.innerPage")

@section("currentPage")
    <li>Moods</li>
@endsection

@section("innerContent")
    @include('partials.notification-alert')
    <h1 class="text-center my-lg-5">Mood register info</h1>
    @if (empty($todays_mood))
        <h3 class="text-danger text-center mb-xl-5">You haven't register your mood for today. <a href="{{ route('moods.create') }}">Do it now!</a></h3>
    @endif
    <table class="table table-hover class text-center">
        <thead>
            <tr>
                <th>Mood</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($moods->sortByDesc('created_at') as $mood)
                <tr>
                    <td><a href="{{ route('moods.show', [$mood->id]) }}">{{ $mood->mood }}</a></td>
                    <td>{{ $mood->created_at->format("Y-m-d") }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
