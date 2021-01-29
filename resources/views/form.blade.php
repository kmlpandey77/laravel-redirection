@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<p>
    <b>From url</b> <br>
    <input name="from_url" value="{{ old('from_url', isset($redirect) ? $redirect->from_url : null) }}" type="text">
</p>
<p>
    <b>To url</b> <br>
    <input name="to_url" value="{{ old('to_url', isset($redirect) ? $redirect->to_url : null) }}" type="text">
</p>
