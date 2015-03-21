@extends('layouts.home')

@section('content')
  <body class="home-page">
  <header id="header" class="header">
    <div class="container">
      <h1 class="logo">
        <a href="index.html"><span class="text"><img id="ctg-logo" src="/assets/img/logo-white.png" alt="Cold Turkey Group logo" height="50px" style="height:50px"></span></a>
      </h1>
      <nav class="main-nav navbar-right" role="navigation">
        <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar-collapse" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active nav-item"><a href="/">Home</a></li>
            <li class="nav-item dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Products
                <i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li><a target="_blank" href="https://tryfrontdesk.com/">FrontDesk</a></li>
                <li><a target="_blank" href="http://platform.marketing/">Platform</a></li>
              </ul>
            </li>
            <li class="nav-item"><a href="mailto:aaron@coldturkeygroup.com">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  <div class="bg-slider-wrapper">
    <div class="flexslider bg-slider">
      <ul class="slides">
        <li class="slide slide-1"></li>
        <li class="slide slide-2"></li>
      </ul>
    </div>
  </div>

  <section class="promo section section-on-bg">
    <div class="container text-center">
      <h2 class="title">We build software to help your small business find more customers and make more money.</h2>

      <p class="intro">The Cold Turkey Group is dedicated to helping your small business by using cutting edge
        technology to find the right customers for you at a fraction of the cost.</p>

      <p>
        <a class="btn btn-cta btn-cta-primary fd" style="margin-right:50px" href="https://tryfrontdesk.com"><img src="/assets/img/frontdesk-logo.png">
          FrontDesk</a>
        <a class="btn btn-cta btn-cta-primary platform" href="http://platform.marketing"><img src="/assets/img/platform-logo.png">
          Platform</a>
      </p>
    </div>
  </section>
@stop