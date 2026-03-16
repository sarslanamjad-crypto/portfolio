@extends('backend.layouts.app')

@section('content')
<div class="container-fluid">
    <h1>Contact Submissions</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Read</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->name }}</td>
                <td>{{ $c->email }}</td>
                <td>{{ $c->subject }}</td>
                <td>{{ \Illuminate\Support\Str::limit($c->message, 80) }}</td>
                <td>{{ $c->read ? 'Yes' : 'No' }}</td>
                <td>{{ $c->created_at }}</td>
                <td>
                    <a href="{{ route('admin.contacts.show', $c->id) }}" class="btn btn-sm btn-primary">View</a>
                    <form action="{{ route('admin.contacts.destroy', $c->id) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this contact?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $contacts->links() }}
</div>
@endsection
