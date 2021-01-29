<h1>Redirections</h1>

@forelse ($redirections as $key=>$redirect)
<form action="{{ route('redirection.destroy', $redirect->id) }}" method="POST" onsubmit="confirm('Are you sure?');">
    @method('DELETE')
    @csrf
    <a href="{{ route('redirection.edit', $redirect) }}">Edit </a> |
    <button type="submit">Delete</button>
    {{-- <a href="#" onclick="confirmMessage('Are you sure?');return false">Delete </a> &nbsp; --}}
    {{ $key+1 }}. {{ $redirect->from_url }} => {{ $redirect->to_url }}
</form>
@empty
    <p>No records found</p>
@endforelse

<a href="{{ route('redirection.create') }}">Create</a>

{{-- <script>
    function confirmMessage(msg) {
        if (confirm(msg)) {
            var form = document.getElementById('deleteform');
            form.submit()
        }
    }
</script> --}}

