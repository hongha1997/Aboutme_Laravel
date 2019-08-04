<base href="{{asset('')}}">
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>About Me</title>
    
    <base href="{{asset('')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="/templates/aboutme/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/templates/aboutme/css/animate.css">
    
    <link rel="stylesheet" href="/templates/aboutme/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/templates/aboutme/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/templates/aboutme/css/magnific-popup.css">

    <link rel="stylesheet" href="/templates/aboutme/css/aos.css">

    <link rel="stylesheet" href="/templates/aboutme/css/ionicons.min.css">
    
    <link rel="stylesheet" href="/templates/aboutme/css/flaticon.css">
    <link rel="stylesheet" href="/templates/aboutme/css/icomoon.css">
    <link rel="stylesheet" href="/templates/aboutme/css/style.css">
    <style type="text/css">
      #active1 {
        color: red;
      }
    </style>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{route('aboutme.aboutme.index')}}#home-section">Aboutme</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a id="{{ Request::is('/#home-section') ? 'active1' : null }}" href="{{route('aboutme.aboutme.index')}}#home-section" class="nav-link"><span>Trang chủ</span></a></li>
	          <li class="nav-item"><a href="{{route('aboutme.aboutme.index')}}#about-section" class="nav-link"><span>Tôi là ai</span></a></li>              
	          <li class="nav-item"><a href="{{route('aboutme.aboutme.index')}}#skills-section" class="nav-link"><span>Kỹ năng</span></a></li>
	          <li class="nav-item"><a href="{{route('aboutme.aboutme.index')}}#projects-section" class="nav-link"><span>Dự án</span></a></li>
              <li class="nav-item"><a href="{{route('aboutme.aboutme.index')}}#advs-section" class="nav-link"><span>Khóa học</span></a></li>
	          <li class="nav-item"><a href="{{route('aboutme.aboutme.index')}}#blog-section" class="nav-link"><span>Tin tức</span></a></li>
	          <li class="nav-item"><a href="{{route('aboutme.aboutme.index')}}#contact-section" class="nav-link"><span>Liên hệ</span></a></li>
	        </ul>
            <!-- <ul class="navbar-nav nav ml-auto">
              <li class="nav-item"><a href="#home-section" class="nav-link"><span>Trang chủ</span></a></li>
              <li class="nav-item"><a href="#about-section" class="nav-link"><span>Tôi là ai</span></a></li>              
              <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Kỹ năng</span></a></li>
              <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Dự án</span></a></li>
              <li class="nav-item"><a href="#advs-section" class="nav-link"><span>Khóa học</span></a></li>
              <li class="nav-item"><a href="#blog-section" class="nav-link"><span>Tin tức</span></a></li>
              <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Liên hệ</span></a></li>
            </ul> -->
	      </div>
	    </div>
	  </nav>