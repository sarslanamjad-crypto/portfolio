@extends('backend.layouts.main')
@section('title', 'Site Settings')
@section('main-container')
<div class="container-fluid"><br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">Update Site Settings</h6>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Profile Image (About Section)</label><br>
                        @if(isset($settings['profile_image']))
                            <img src="{{ asset($settings['profile_image']) }}" height="50" class="mb-2">
                        @endif
                        <input type="file" name="profile_image" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Sidebar Profile Image (Desktop Menu)</label><br>
                        @if(isset($settings['sidebar_image']))
                            <img src="{{ asset($settings['sidebar_image']) }}" height="50" class="mb-2">
                        @endif
                        <input type="file" name="sidebar_image" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Hero Title</label>
                        <input type="text" name="hero_title" class="form-control" value="{{ $settings['hero_title'] ?? 'Developer / Freelancer' }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Hero Subtitle</label>
                        <input type="text" name="hero_subtitle" class="form-control" value="{{ $settings['hero_subtitle'] ?? 'Arslan Amjad' }}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label>Hero Description</label>
                        <textarea name="hero_description" class="form-control" rows="3">{{ $settings['hero_description'] ?? '' }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label>About Me</label>
                        <textarea name="about_description" class="form-control" rows="5">{{ $settings['about_description'] ?? '' }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label>Numbered Skills (Comma separated, max 4. E.g: PSD TO HTML, SEO OPTIMIZATION)</label>
                        <input type="text" name="numbered_skills" class="form-control" value="{{ $settings['numbered_skills'] ?? 'PSD TO HTML RESPONSIVE, SEO OPTIMIZATION, Fully Responsive design, Promo Pages Designs' }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Contact Phone</label>
                        <input type="text" name="contact_phone" class="form-control" value="{{ $settings['contact_phone'] ?? '+754-554-54-34' }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Contact Email</label>
                        <input type="text" name="contact_email" class="form-control" value="{{ $settings['contact_email'] ?? 'hello@example.com' }}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label>Contact Address</label>
                        <input type="text" name="contact_address" class="form-control" value="{{ $settings['contact_address'] ?? '445 Mount Eden Road' }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-info">Save Settings</button>
            </form>
        </div>
    </div>
</div>
@endsection
