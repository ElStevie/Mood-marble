@if (isset($mood))
    <form action="{{ route('moods.update', [$mood->id]) }}" method="POST">
        @method("PATCH")
@else
    <form action="{{ route('moods.store') }}" method="POST">
@endif
    @csrf
    <select name="mood" id="mood">
        <option {{ isset($mood) && $mood->mood == "excellent" ? "selected" : ""}} value="excellent">Excellent!</option>
        <option {{ isset($mood) && $mood->mood == "good" ? "selected" : "" }} value="good">Good :)</option>
        <option {{ isset($mood) && $mood->mood == "meh" ? "selected" : "" }} value="meh">Meh</option>
        <option {{ isset($mood) && $mood->mood == "bad" ? "selected" : "" }} value="bad">Bad :(</option>
        <option {{ isset($mood) && $mood->mood == "terrible" ? "selected" : "" }} value="terrible">Terrible</option>
    </select>
    <input type="submit" value="Save">
</form>
