@extends("layouts.innerPage")

@section("currentPage")
    <li><a href="{{ route('moods.index') }}">Moods</a></li>
    <li>Today's mood</li>
@endsection

@section("innerContent")
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                @if (isset($mood))
                    <h2>Update your mood</h2>
                @else
                    <h2>Register your mood</h2>
                @endif
                <p>For today: {{ \Carbon\Carbon::today()->toDateString() }}</p>
            </div>

            @include('partials.form-errors')

            <div class="row mt-4">
                <div class="col-lg mt-4 mt-md-0">
                    @if (isset($mood))
                        <form action="{{ route('moods.update', [$mood->id]) }}" method="POST" role="form" class="php-email-form">
                            @method("PATCH")
                    @else
                        <form action="{{ route('moods.store') }}" method="POST" role="form" class="php-email-form">
                    @endif
                        @csrf
                        <div class="text-center">
                            <p>Let your team know more about you, tell them about your mood.
                            <label for="mood" class="pb-3 text-primary font-weight-bold">How have you been?</label>
                            </p>
                        </div>
                        <select name="mood" id="mood" class="form-control text-center">
                            <option {{ isset($mood) && $mood->mood == "Excellent" ? "selected" : ""}} value="excellent">Excellent!</option>
                            <option {{ isset($mood) && $mood->mood == "Good" ? "selecteerd" : "" }} value="good">Good :)</option>
                            <option {{ isset($mood) && $mood->mood == "Meh" ? "selected" : "" }} value="meh">Meh</option>
                            <option {{ isset($mood) && $mood->mood == "Bad" ? "selected" : "" }} value="bad">Bad :(</option>
                            <option {{ isset($mood) && $mood->mood == "Terrible" ? "selected" : "" }} value="terrible">Terrible</option>
                        </select>
                        <div class="text-center mt-4">
                            <button type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>


@endsection
