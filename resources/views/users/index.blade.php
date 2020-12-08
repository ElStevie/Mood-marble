@extends("layouts.innerPage")

@section("currentPage")
    <li>Users</li>
@endsection

@section("innerContent")
    <div class="row mb-4">
        <h1 class="h1">They're already working with us:</h1>
    </div>
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
