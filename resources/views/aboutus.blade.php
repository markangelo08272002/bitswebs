@extends('layouts.dash')

@section('content')
    <div class="content-wrapper">
        <!-- About Us Section -->
        <div class="aboutus-container" style="position: relative; text-align: center; color: white; display: flex; justify-content: center; align-items: center; height: 100vh;">
            <!-- Framed Content -->
            <div style="
                background: rgba(0, 0, 0, 0.8);
                padding: 20px;
                border-radius: 10px;
                border: 3px solid white;
                width: 80%;
                max-width: 900px;
                text-align: center;
                box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.5);
            ">
                <!-- Image Inside the Frame -->
                <img src="{{ asset('assets/img/favicon/7.png') }}" alt="About Us Banner"
                    style="width: 100%; max-height: 250px; object-fit: cover; border-radius: 5px; margin-bottom: 15px;">

                <!-- Vision & Mission -->
                <p style="margin-bottom: 10px; font-size: 18px; font-weight: bold; line-height: 1.4;">
                    <strong>VISION:</strong><br>
                    By 2040, Southern Leyte State University is a leading higher 
                    education institution that advances knowledge and will be known 
                    for innovation and compassion for humanity, creating an inclusive
                    society and a sustainable world.
                </p>

                <hr style="width: 80%; border: 1px solid white; margin: 10px auto;">

                <p style="margin-top: 10px; font-size: 18px; font-weight: bold; line-height: 1.4;">
                    <strong>MISSION:</strong><br>
                    We commit to be a smart and green University that advances education,
                    technological and professional instruction, research and innovation, community
                    engagement services, and progressive leadership in arts, sciences, and technology
                    that are relevant to the needs of global communities. We produce graduates and 
                    life-long learners equipped with knowledge that enhances lives and invigorates economic 
                    development.
                </p>
            </div>
        </div>
    </div>
@endsection
