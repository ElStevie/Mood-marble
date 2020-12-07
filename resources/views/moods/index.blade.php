<h1>Mood register info</h1>
@if (empty($todays_mood))
    <p>You haven't register your mood for today. <a href="{{ route('moods.create') }}">Do it now!</a></p>
@endif
<table class="table table-hover">
    <thead>
        <tr>
            <th>Mood</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($moods as $mood)
            <tr>
                <td><a href="{{ route('moods.show', [$mood->id]) }}">{{ $mood->mood }}</a></td>
                <td>{{ explode(" ", $mood->created_at)[0] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
