@extends('Frontend.layouts.master')

@section('title','歡迎來到Lu的Laravel世界')
@section('nav_store','active')
@section('content')

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">歡迎聯絡</span>
                <span class="section-heading-lower">可面試時間</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                  Sunday
                  <span class="ml-auto">{{ date('g:i A', strtotime($store->sun_open)) }}to{{ date('g:i A', strtotime($store->sun_close)) }}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Monday
                  <span class="ml-auto">{{ date('g:i A', strtotime($store->mon_open)) }}to{{ date('g:i A', strtotime($store->mon_close)) }}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Tuesday
                  <span class="ml-auto">{{ date('g:i A', strtotime($store->tue_open)) }}to{{ date('g:i A', strtotime($store->tue_close)) }}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Wednesday
                  <span class="ml-auto">{{ date('g:i A', strtotime($store->wed_open)) }}to{{ date('g:i A', strtotime($store->wed_close)) }}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Thursday
                  <span class="ml-auto">{{ date('g:i A', strtotime($store->thu_open)) }}to{{ date('g:i A', strtotime($store->thu_close)) }}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Friday
                  <span class="ml-auto">{{ date('g:i A', strtotime($store->fri_open)) }}to{{ date('g:i A', strtotime($store->fri_close)) }}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Saturday
                  <span class="ml-auto">{{ date('g:i A', strtotime($store->sat_open)) }}to{{ date('g:i A', strtotime($store->sat_close)) }}</span>
                </li>
              </ul>
              <p class="address mb-5">
                <em>
                  <strong>{!!$store->address!!}</strong>
                  <br>
                </em>
              </p>
              <p class="mb-0">
                <small>
                  <em>Call Anytime</em>
                </small>
                <br>
                {!!$store->phone!!}
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

   
    @endsection
