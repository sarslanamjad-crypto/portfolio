@extends('backend.layouts.main')
@section('title', 'Services')
@section('main-container')
<div class="container-fluid"><br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info"><a class="text-info" href="{{url('/admin')}}">Main Menu</a> | Services List</h6>
            <a href="{{url('/admin/service-add')}}" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm float-right">
                <i class="fas fa-plus fa-sm text-white-50"></i> Add New Service
            </a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Icon Class</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th width="120px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $srv)
                        <tr>
                            <td>{{ $srv->id }}</td>
                            <td><i class="fa {{ $srv->icon_class }}"></i> {{ $srv->icon_class }}</td>
                            <td>{{ $srv->title }}</td>
                            <td>{{ Str::limit($srv->description, 50) }}</td>
                            <td>
                                <a href="{{ url('/admin/service-edit/'.$srv->id) }}" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                                <form class="d-inline" method="POST" action="{{ url('/admin/service-delete/'.$srv->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
