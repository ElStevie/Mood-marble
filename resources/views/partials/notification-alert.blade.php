@if (session()->has('message'))
    <div class="alert {{ session('type', "alert-info") }} alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{ session('message') }}
    </div>
@elseif (isset($message))
    <div class="alert {{ $type }} alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{ $message }}
    </div>
@endif
