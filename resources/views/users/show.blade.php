@extends("layouts.innerPage")

@section("currentPage")
    <li><a href="{{ route("users.index") }}">Users</a></li>
    <li>{{ $user->name }}</li>
@endsection

@section("innerContent")
    <div class="row mb-4 ml-2">
        <div class="col-9">
            <h1 class="display-3">{{ $user->name }}</h1>
        </div>
        <div class="col-3 text-right">
            <h3><small class="text-muted"><a href="{{ route('users.edit', [$user->id]) }}">Edit</a></small></h3>
        </div>
    </div>
    <hr>
    <div class="row mb-4 ml-2">
        <h3><small class="text-muted">ID: </small>{{ $user->id }}</h3>
    </div>
    <hr>
    <div class="row ml-2">
        <h3><small class="text-muted">Email Address: </small>{{ $user->email }}</h3>
    </div>

    <section class="contact">
        <form action="{{ route('users.destroy', [$user]) }}" method="POST" class="php-email-form">
            @method("DELETE")
            @csrf
            <div class="text-center">
                <p class="lead">Actions:</p>
            </div>
            <div class="form-row">
                <div class="col form-group">
                    <div class="text-center"><button type="submit" class="bg-danger">Delete</button></div>
                </div>
            </div>
        </form>
    </section>
@endsection
