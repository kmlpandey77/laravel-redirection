<h1>Redirections</h1>

<form action="{{ route('redirection.store') }}" accept-charset="utf-8" method="post">
    {!! csrf_field() !!}
    @include('redirection::form')

    <button type="submit">Save</button>

</form>

<a href="{{ route('redirection.index') }}">Back</a>
