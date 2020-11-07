@extends("layouts.innerPage")

@section("currentPage")
    <li><a href="{{ route("users.index") }}">Users</a></li>
    <li><a href="{{ route("users.show", [$user->id]) }}">{{ $user->name }}</a></li>
    <li>Editing</li>
@endsection

@section("innerContent")
    <section id="contact" class="contact my-0">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Edit your profile</h2>
                <p>Remember to save the changes</p>
            </div>

            @if($errors->any())
                <div class="row mb-4">
                    <div class="col-lg mt-4 mt-md-0">
                        <ul class="list-group rounded-0 shadow">
                            @foreach($errors->all() as $error)
                                <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <div class="row mt-4">

                <div class="col-lg mt-4 mt-md-0">
                    <form action="{{ route('users.update', [$user]) }}" method="POST" role="form" class="php-email-form">
                        @method('patch')
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{ old('name') ?? $user->name ?? '' }}"/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="email">E-mail address:</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ old('name') ?? $user->email ?? '' }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control mb-1" name="password" id="password" value="{{ $user->password }}"/>
                            <small class="text-warning">If not edited, this field holds the last valid password entered</small>
                        </div>
                        <div class="text-center"><button type="submit">Save and return</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>
@endsection
