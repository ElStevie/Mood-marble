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
