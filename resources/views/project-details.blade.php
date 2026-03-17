@extends('layouts.frontend')

@section('title', $project->title . ' - Project Details')

@section('content')
<div style="padding: 100px 0; background: #000; color: #fff; min-height: 100vh;">
    <div class="container">
        <a href="{{ url('/') }}#page5" class="alx-btn mb-4" style="padding: 10px 20px; font-size: 14px;"><i class="fa fa-arrow-left"></i> Back to Portfolio</a>
        <div class="row mt-4 justify-content-center">
            <div class="col-lg-10">
                @if($project->youtube_link)
                    @php
                        // Extract YouTube video ID
                        $youtube_url = $project->youtube_link;
                        $video_id = '';
                        if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/\s]{11})%i', $youtube_url, $match)) {
                            $video_id = $match[1];
                        }
                    @endphp
                    @if($video_id)
                        <div style="border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(255,255,255,0.05); position: relative; padding-bottom: 56.25%; height: 0;">
                            <iframe src="https://www.youtube.com/embed/{{ $video_id }}" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    @else
                        <!-- Invalid YouTube Link -->
                        <img src="/backend/images/projects/{{ $project->image }}" class="img-fluid" style="border-radius: 15px; width:100%; max-height: 70vh; object-fit: cover; box-shadow: 0 10px 30px rgba(255,255,255,0.05);" alt="{{ $project->title }}">
                    @endif
                @elseif($project->video)
                    <div style="border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(255,255,255,0.05);">
                        <video controls style="width: 100%; max-height: 70vh; background: #111;">
                            <source src="/backend/videos/projects/{{ $project->video }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                @else
                    <img src="/backend/images/projects/{{ $project->image }}" class="img-fluid" style="border-radius: 15px; width:100%; max-height: 70vh; object-fit: cover; box-shadow: 0 10px 30px rgba(255,255,255,0.05);" alt="{{ $project->title }}">
                @endif
            </div>
        </div>

        <div class="row mt-5 justify-content-center">
            <div class="col-lg-10">
                <div style="background: rgba(255, 255, 255, 0.03); padding: 40px; border-radius: 15px; border: 1px solid rgba(255, 255, 255, 0.05);">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 style="color: #fff; font-weight: bold; margin-bottom: 10px; font-size: 2.5rem;">{{ $project->title }}</h1>
                            <p style="color: #aaa; font-size: 1.1rem; margin-bottom: 30px;">
                                <i class="fa fa-folder-open-o"></i> {{ $project->category }} 
                                <span style="margin: 0 10px;">|</span>
                                <i class="fa fa-code"></i> {{ $project->technology }}
                                <span style="margin: 0 10px;">|</span>
                                <i class="fa fa-user"></i> {{ $project->client }}
                            </p>
                            
                            <h4 style="color: #fff; margin-bottom: 15px; font-weight: 600;">Project Overview</h4>
                            <p style="color: #ccc; line-height: 1.8; font-size: 1.05rem;">{!! nl2br(e($project->details)) !!}</p>
                        </div>
                        <div class="col-md-4 text-md-right mt-4 mt-md-0 d-flex flex-column justify-content-center align-items-md-end">
                            @if($project->link)
                            <a href="{{ $project->link }}" target="_blank" class="alx-btn alx-btn-primary" style="padding: 15px 30px; font-size: 1.1rem; border-radius: 50px; text-transform: uppercase; font-weight: 600; letter-spacing: 1px; box-shadow: 0 5px 15px rgba(0,0,0,0.3);">
                                View Live <i class="fa fa-external-link" style="margin-left: 8px;"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
