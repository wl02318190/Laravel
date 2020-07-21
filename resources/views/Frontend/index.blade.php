@extends('Frontend.layouts.master')

@section('title','歡迎來到Lu的Laravel世界')
@section('nav_home','active')
@section('content')

    

<!--內容content-->

  <section class="page-section clearfix">
    <div class="container">
      <div class="intro" >
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" style="height:540px;width:400px;"  src="{{asset('uploads/home/'.$home->image)}}" alt="">
        <div class="intro-text left-0 text-center bg-faded p-4 rounded">
          <h2 class="section-heading mb-3">
            <span class="section-heading-upper">你好</span>
            <span class="section-heading-lower">我叫Lu</span>
          </h2>
          <p class="mb-3">{!! $home->content_1 !!}
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="https://pda.104.com.tw/profile/preview?vno=75s1fu4tg">Lu的履歷</a>
          </div>
        </div>
      </div>
    </div>
  </section>



@endsection

