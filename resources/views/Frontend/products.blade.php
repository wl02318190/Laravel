@extends('Frontend.layouts.master')

@section('title','歡迎來到Lu的Laravel世界')
@section('nav_products','active')
@section('content')

@foreach($products as $product)
  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex rounded @if($loop->index %2==1) mr-auto @else ml-auto @endif"><!--以0開始循環，奇數右邊，偶數左邊-->
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">{!! $product->title !!}</span>
              <span class="section-heading-lower">{!! $product->subtitle !!}</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{asset('uploads/product/'.$product->image)}}" alt="">
        <div class="product-item-description d-flex @if($loop->index %2==1) mr-auto @else ml-auto @endif">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">{!! $product->description !!}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endforeach

@endsection