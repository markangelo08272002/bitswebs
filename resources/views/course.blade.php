@extends('layouts.dash')

@section('content')
    <div class="content-wrapper">
        <div class="container mt-4">
            <h2 class="text-center">THIS COURSE</h2>

            <!-- Video Section -->
            <div class="row justify-content-center">
                <div class="col-md-8 d-flex justify-content-center">
                    <div class="video-frame p-2">
                        <video width="100%" controls>
                            <source src="{{ asset('assets/videos/1.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>

            <!-- Image Gallery -->
            <div class="row mt-4 text-center">
                <div class="col-md-4">
                    <div class="image-frame p-2">
                        <img src="{{ asset('assets/img/favicon/00.jpg') }}" class="img-fluid rounded" alt="Image 1">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-frame p-2">
                        <img src="{{ asset('assets/img/favicon/99.jpg') }}" class="img-fluid rounded" alt="Image 2">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-frame p-2">
                        <img src="{{ asset('assets/img/favicon/88.jpg') }}" class="img-fluid rounded" alt="Image 3">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Frame Styling */
        .video-frame, .image-frame {
            border: 5px solid #343a40; /* Dark gray border */
            border-radius: 10px;
            background-color: #f8f9fa; /* Light background */
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
            display: inline-block;
        }
        
        .video-frame {
            width: 85%; /* Adjust width of video frame */
        }

        .image-frame img {
            border-radius: 10px;
            width: 100%;
        }
    </style>
@endsection
