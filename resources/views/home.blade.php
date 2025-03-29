@extends('layouts.dash')

@section('content')
         <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-xxl-8 mb-6 order-0">
                  <div class="card">
                    <div class="d-flex align-items-start row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary mb-3">Welcome to BITS – 🎉</h5>
                          <p class="mb-6">
                            Bontoc Information Technology Society!
                            At BITS, we empower the next generation of tech leaders through innovative education 
                            and collaboration. Explore our courses, resources, and events to start your journey toward success.
                            Thank you for visiting – we’re glad to have you here!
                          </p>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-6">
                          <img
                           src="{{ asset('assets/img/illustrations/man-with-laptop.png') }}"
                            height="175"
                            alt="View Badge User" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Lengthwise Image -->
              <div class="row mt-4">
                <div class="col-12 text-center">
                  <img 
                    src="{{ asset('assets/img/favicon/bits.jpg') }}" 
                    class="img-fluid" 
                    alt="Lengthwise Image" 
                    style="max-width: 80%; height: auto; border-radius: 10px;" />
                </div>
              </div>
            </div>

              <!-- Latest News & Announcements -->
              <div class="row mt-4">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body text-center">
                      <label class="fw-bold mb-3">Latest News & Announcements :</label>
                      <br>
                      <a href="https://www.facebook.com/bits.slsu.bc" target="_blank">Click here for the latest updates</a>
                      <br>
                      <div class="row mt-3">
                        <div class="col-md-4">
                          <img 
                            src="{{ asset('assets/img/favicon/0.jpg') }}" 
                            class="img-fluid" 
                            alt="News Image 1" 
                            style="width: 100%; height: auto;" />
                        </div>
                        <div class="col-md-4">
                          <img 
                            src="{{ asset('assets/img/favicon/9.jpg') }}" 
                            class="img-fluid" 
                            alt="News Image 2" 
                            style="width: 100%; height: auto;" />
                        </div>
                        <div class="col-md-4">
                          <img 
                            src="{{ asset('assets/img/favicon/6.jpg') }}" 
                            class="img-fluid" 
                            alt="News Image 3" 
                            style="width: 100%; height: auto;" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              
@endsection
