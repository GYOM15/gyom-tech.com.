@extends('layouts.gts')

@section('title', __('PROJETS'))

@section('content')

<div class="dlab-bnr-inr overlay-gradient-dark text-center" style="background-image: url(/storage/images/banner/bnr4.jpg);">
    <div class="container">
        <div class="dlab-bnr-inr-entry" data-aos="fade-up" data-aos-duration="1000">
            <h1>{{__('projects.projects')}}</h1>
            <!-- Breadcrumb Row -->
            <nav aria-label="breadcrumb" class="breadcrumb-row">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('shared.home')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{__('projects.projects')}}</li>
                </ul>
            </nav>
            <!-- Breadcrumb Row End -->
        </div>
    </div>
</div>
<!-- Banner End -->

<section class="content-inner-1 overflow-hidden" data-aos="fade-up" data-aos-duration="1000" style="background-image: url(/storage/images/background/bg19.png); background-size: 90%; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row mb-4 justify-content-center">
            <div class="col-auto">
                <a href="" class="filter-link active" data-filter="Others">{{__('projects.projects_link')}}</a>
                <a href="" class="filter-link" data-filter="AI">{{__('projects.ai')}}</a>
            </div>
        </div>
        <div class="left-container lightgallery align-items-center" id="projects-container" >
            <div class="row g-5" id="projects-row" >
                <!-- Projects will be loaded here dynamically -->
            </div>
        </div>
    </div>

    <!-- Call to action button -->
    @include('shared.cta')
</section>

@endsection
