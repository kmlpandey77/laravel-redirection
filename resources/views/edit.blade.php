<h1>Redirections</h1>

<form action="{{ route('redirection.update', $redirection->id) }}" accept-charset="utf-8" method="post">
    {!! csrf_field() !!}
    {{ method_field('PUT') }}
    @include('redirection::form')

    <button type="submit">Save</button>
</form>

<a href="{{ route('redirection.index') }}">Back</a>
