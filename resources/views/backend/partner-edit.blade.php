@extends('backend.layouts.main')
@section('title', 'Edit Partner')
@section('main-container')
<div class="container-fluid"><br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">Edit Partner/Client</h6>
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
            <form action="{{ url('/admin/partner-edit/'.$partner->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Name (Optional)</label>
                    <input type="text" name="name" class="form-control" value="{{ $partner->name }}">
                </div>
                <div class="form-group">
                    <label>Current Image</label><br>
                    <img src="/backend/images/partners/{{$partner->image}}" width="100px" alt="Image">
                </div>
                <div class="form-group">
                    <label>New Image (Leave blank if not changing)</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
