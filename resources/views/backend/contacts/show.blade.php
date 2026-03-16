@extends('backend.layouts.app')

@section('content')
<div class="container-fluid">
    <h1>Contact #{{ $contact->id }}</h1>
    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Subject:</strong> {{ $contact->subject }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $contact->message }}</p>
    <p><strong>Read:</strong> {{ $contact->read ? 'Yes' : 'No' }}</p>
    <p><strong>Submitted:</strong> {{ $contact->created_at }}</p>
    <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
