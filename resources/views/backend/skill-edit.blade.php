@extends('backend.layouts.main')
@section('title', 'Edit Skill')
@section('main-container')
<div class="container-fluid"><br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">Edit Skill</h6>
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
            <form action="{{ url('/admin/skill-edit/'.$skill->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Skill Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $skill->name }}" required>
                </div>
                <div class="form-group">
                    <label>Percent (0-100)</label>
                    <input type="number" name="percent" class="form-control" value="{{ $skill->percent }}" min="0" max="100" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
