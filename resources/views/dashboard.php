@extends('dash.app')

@section('content')
<div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-1/5 bg-blue-900 text-white p-5">
        <h2 class="text-xl font-bold">BITS SLSU</h2>
        <p class="text-sm">Bontoc Information Technology Society</p>
        <nav class="mt-5">
            <ul>
                <li class="py-2"><a href="#" class="block">HOME</a></li>
                <li class="py-2"><a href="#" class="block">ABOUT US</a></li>
                <li class="py-2"><a href="#" class="block">THIS COURSE</a></li>
                <li class="py-2"><a href="#" class="block">News and Events</a></li>
                <li class="py-2"><a href="#" class="block">LOGOUT</a></li>
            </ul>
        </nav>
    </div>
    
    <!-- Main Content -->
    <div class="w-4/5 bg-gray-100 p-5">
        <div class="bg-blue-900 text-white p-3 flex justify-between">
            <div></div>
            <div class="flex items-center">
                <span class="mr-3">My Profile</span>
                <img src="https://via.placeholder.com/40" class="rounded-full" alt="Profile">
            </div>
        </div>
        
        <div class="mt-5 p-5 bg-white shadow">
            <h1 class="text-xl font-bold">Welcome to BITS – Bontoc Information Technology Society</h1>
            <p class="mt-2">At BITS, we empower the next generation of tech leaders through innovative education and collaboration. Explore our courses, resources, and events to start your journey toward success.</p>
            <p class="mt-2">Thank you for visiting – we’re glad to have you here!</p>
        </div>
        
        <div class="mt-5 flex justify-between">
            <a href="https://www.facebook.com/slsubitsofficial" class="text-blue-600">Facebook</a>
            <div class="text-gray-600">Quick Links: <a href="#" class="text-blue-600">LMS</a> | <a href="#" class="text-blue-600">SIS</a></div>
        </div>
    </div>
</div>
@endsection
