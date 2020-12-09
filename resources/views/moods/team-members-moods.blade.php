@if (\Illuminate\Support\Facades\Auth::user()->currentTeam->users()->count())
    <h1 class="display-4 text-primary">{{ \Illuminate\Support\Facades\Auth::user()->currentTeam->name }}
        <small class="text-muted">Members</small>
    </h1>
    <p class="text-secondary">Here's a summary of your team members' moods</p>

    <hr class="my-4">

    <div class="container">
        <div class="row">
            @foreach (\Illuminate\Support\Facades\Auth::user()->currentTeam->users as $user)
                @php
                    $mood = $user->moods->sortByDesc('updated_at')->first();
                @endphp
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <p class="text-info d-inline">{{ $user->name }}: </p>
                    <p class="lead d-inline text-{{ $mood->mood == "Excellent" ? "success"
                                         : ($mood->mood == "Good" ? "primary"
                                         : ($mood->mood == "Meh" ? "secondary"
                                         : ($mood->mood == "Bad" ? "warning"
                                         : "danger"))) }}">{{ $mood->mood }}</p>
                    <p class="small text-muted">
                        Last update:
                        {{ $mood->updated_at->toDateTimeString() }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>

<hr class="my-5">
@endif
