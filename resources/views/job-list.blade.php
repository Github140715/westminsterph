@extends('layout.layout')
@section('page-title')Job List @endsection
@section('content')
<!-- Header End -->
<div class="container-fluid py-5 bg-dark page-header">
    <div class="container my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Job List</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Job List</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Header End -->

<!-- Search Start -->
<div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
    <div class="container">
        <div class="row g-2">
            <div class="col-md-10">
                <div class="row g-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control form-select-lg border-0" placeholder="Keyword" />
                    </div>
                    <div class="col-md-4">
                        <select class="form-select form-select-lg border-0">
                            <option selected>Select Rank</option>
                            <option value="1">Master</option>
                            <option value="2">Chief Officer</option>
                            <option value="3">Safety Officer</option>
                            <option value="4">Second Officer</option>
                            <option value="5">Third Officer</option>
                            <option value="6">Fourth Officer</option>
                            <option value="7">Junior Officer</option>
                            <option value="8">Chief Engineer</option>
                            <option value="9">Second Engineer</option>
                            <option value="10">Pumpman</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select form-select-lg border-0">
                            <option selected>Select Vessel</option>
                            <option value="1">Bulk Carrier</option>
                            <option value="2">Bulk/Oil Carrier (OBO)</option>
                            <option value="3">Car Carrier</option>
                            <option value="4">Chemical Tanker</option>
                            <option value="5">Container Feeder</option>
                            <option value="6">Fishing vessel</option>
                            <option value="7">Gas Tanker</option>
                            <option value="8">Heavy Load Carrier</option>
                            <option value="9">Liquefied Natural Gas</option>
                            <option value="10">Research Vessel</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <button class="btn btn-lg btn-secondary border-0 w-100">Search</button>
            </div>
        </div>
    </div>
</div>
<!-- Search End -->

<!-- Jobs Start -->
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp text-secondary" data-wow-delay="0.1s">Job Listing</h1>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <div class="text-start">
                                    <h4 class="mb-3">Chief Officer</h4>
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-primary" href="{{ url('job-detail') }}">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <div class="text-start">
                                    <h4 class="mb-3">Second Engineer</h4>
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-primary" href="{{ url('job-detail') }}">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <div class="text-start">
                                    <h4 class="mb-3">Master</h4>
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-primary" href="{{ url('job-detail') }}">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <div class="text-start">
                                    <h4 class="mb-3">Pumpman</h4>
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-primary" href="{{ url('job-detail') }}">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <div class="text-start">
                                    <h4 class="mb-3">Junior Officer</h4>
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-primary" href="{{ url('job-detail') }}">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5" href="{{ url('job-list') }}">Load More Jobs</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Jobs End -->
@endsection