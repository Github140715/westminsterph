@extends('layout.layout')
@section('page-title')Contact @endsection
@section('content')
<!-- Header End -->
<div class="container-fluid py-5 bg-dark page-header mb-5">
    <div class="container my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp text-secondary" data-wow-delay="0.1s">Contact For Any Query</h1>
        <div class="row g-4">
            <div class="col-12">
                <div class="row gy-4">
                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center bg-light rounded p-4">
                            <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                <i class="fa fa-map-marker-alt text-primary"></i>
                            </div>
                            <span>34F World Trade Exchange Bldg., 215 Juan Luna St., Manila, Philippines</span>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center bg-light rounded p-4">
                            <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                <i class="fa fa-envelope-open text-primary"></i>
                            </div>
                            <span>wm_applicant@wsm.ph</span>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center bg-light rounded p-4">
                            <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                <i class="fa fa-phone-alt text-primary"></i>
                            </div>
                            <span>+63 2 8689 6796</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <iframe class="position-relative rounded w-100 h-100"
                    src="https://maps.google.com/maps?q=%2034F%20World%20Trade%20Exchange%20Bldg.,%20215%20Juan%20Luna%20St.,%20Manila,%20Philippines&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                    frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection