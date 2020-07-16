@extends('layouts.master')

@section('title','歡迎來到Lu的Laravel世界')
@section('nav_home','active')
@section('content')

    

<!--內容content-->
  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">對我感興趣嗎?</span>
            <span class="section-heading-lower">我叫Lu</span>
          </h2>
          <p class="mb-3">我是一名剛畢業於銘傳大學資訊工程學系的碩士，我有一年的產學合作經驗，在就學過程中我大多擔任後端伺服器架設與維護和前後串接的職位，對我感興趣嗎?
            <br>以下是我的履歷歡迎觀看
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="#">Lu的履歷</a>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection

