@extends('Frontend.layouts.master')

@section('title','歡迎來到Lu的Laravel世界')
@section('nav_about','active')
@section('content')
  <section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{asset('uploads/about/'.$about->image)}}" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Strong Coffee, Strong Roots</span>
                <span class="section-heading-lower">About Our Cafe</span>
              </h2>
              {!! $about->content !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection