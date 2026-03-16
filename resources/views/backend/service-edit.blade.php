@extends('backend.layouts.main')
@section('title', 'Edit Service')
@section('main-container')
<div class="container-fluid"><br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">Edit Service</h6>
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form action="{{ url('/admin/service-edit/'.$service->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Icon Class. <a href="https://fontawesome.com/v4/icons/" target="_blank">Find more icons here (use fa-XX format)</a>.</label>
                    <input type="text" name="icon_class" class="form-control" value="{{ $service->icon_class }}" required>
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $service->title }}" required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="4" required>{{ $service->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
