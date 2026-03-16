@extends('backend.layouts.main')
@section('title', 'Skills')
@section('main-container')
<div class="container-fluid"><br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info"><a class="text-info" href="{{url('/admin')}}">Main Menu</a> | Skills List</h6>
            <a href="{{url('/admin/skill-add')}}" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm float-right">
                <i class="fas fa-plus fa-sm text-white-50"></i> Add New Skill
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
                            <th>Name</th>
                            <th>Percent (%)</th>
                            <th width="120px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skills as $skill)
                        <tr>
                            <td>{{ $skill->id }}</td>
                            <td>{{ $skill->name }}</td>
                            <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: {{ $skill->percent }}%" aria-valuenow="{{ $skill->percent }}" aria-valuemin="0" aria-valuemax="100">{{ $skill->percent }}%</div>
                                </div>
                            </td>
                            <td>
                                <a href="{{ url('/admin/skill-edit/'.$skill->id) }}" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                                <form class="d-inline" method="POST" action="{{ url('/admin/skill-delete/'.$skill->id) }}">
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
