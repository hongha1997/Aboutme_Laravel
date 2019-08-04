@extends('templates.aboutme.master')
@section('main')
@section('title', 'Aboutme')
<section id="home-section" class="hero">
		  <div class="home-slider  owl-carousel">
	      <div class="slider-item ">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last img" style="background-image:url(templates/aboutme/images/bg_12.jpg);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
	    						<span class="ion-ios-play play"></span>
	    					</a>
		          	<div class="text">
			            <h1 class="mb-4 mt-3"><span>{{$aboutme->name}}</span></h1>
			            <h2 class="mb-4">Web Developer</h2>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      <div class="slider-item ">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last img" style="background-image:url(templates/aboutme/images/bg_12.jpg);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
	    						<span class="ion-ios-play play"></span>
	    					</a>
		          	<div class="text">
			            <h1 class="mb-4 mt-3"><span>{{$aboutme->name}}</span></h1>
			            <h2 class="mb-4">Web Developer</h2>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>

    <section class="ftco-about ftco-counter img ftco-section" id="about-section">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(templates/aboutme/images/bg_12.jpg);">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Xin chào đến với trang cá nhân của: </span>
		            <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">{{$aboutme->name}}</h2>
		            <p>{{$aboutme->detail_text}}</p>
		          </div>
		        </div>
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="media block-6 services d-block ftco-animate">
		              <div class="icon"><span class="flaticon-analysis"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Web Developer</h3>
		              </div>
		            </div> 
		        	</div>
		        </div>
	          <div class="counter-wrap ftco-animate d-flex mt-md-3">
              <div class="text p-4 pr-5 bg-primary">
              	<p class="mb-0">
	                <span class="number" data-number="{{$countProject}}">0</span>
	                <span>Số dự án đã hoàn thành</span>
                </p>
              </div>
	          </div>
	        </div>
        </div>
    	</div>
    </section>
		
		<section class="ftco-section bg-light" id="skills-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Kỹ năng của tôi</h2>
          </div>
        </div>
				<div class="row">
					@foreach($skills as $skill)
					@php
				        $name       = $skill->name;
				        $giatri       = $skill->giatri;
				    @endphp
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>{{$name}}</h3>
							<div class="progress">
							 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$giatri}}"
							  	aria-valuemin="0" aria-valuemax="100" style="width:{{$giatri}}%">
							    <span>{{$giatri}}%</span>
							  	</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				<div class="row justify-content-center py-5 mt-5">
          <div id="projects-section" class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Dự án của tôi</h2>
            <p></p>
          </div>
        </div>

        <div class="row">
        			@foreach($projects as $project)
					@php
				        $name       = $project->name;
				        $preview_text       = $project->preview_text;
				        $picture       = $project->picture;
				        $link       = $project->link;
				    @endphp
					<div class="col-md-4 text-center d-flex ftco-animate">
						<div class="services-1">
							<span class="icon">
								<a href="{{$link}}"><img src="/templates/projects/{{$picture}}" width="300px" height="200px"></a>
							</span>
							<div class="desc">
								<a href="{{$link}}"><h3 class="mb-5"><a href="#">{{$name}}</a></h3></a>
								<h4>{{$preview_text}}</h4>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
 

	<section class="ftco-section ftco-project" id="advs-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Khóa học</h2>
          </div>
        </div>
    		<div class="row">
    			@foreach($advss as $advs)
				@php
			        $name       = $advs->name;
			        $banner       = $advs->banner;
			        $link       = $advs->link;
			    @endphp
    			<div style="border: 2px solid black" class="col-md-4">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(/templates/advs/{{$banner}}); width: 300px; height: 350px">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="{{$link}}">{{$name}}</a></h3>
	    				</div>
    				</div>
  				</div>
  				@endforeach
    		</div>
    	</div>
    </section>

    <section class="ftco-section bg-light" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Tin tức</h2>
          </div>
        </div>
        <div class="hahaha">
        <div class="row d-flex">
    	@foreach($newss as $news)
		@php
	        $id_news       	= $news->id_news;
	        $name       	= $news->name;
	        $preview_text   = $news->preview_text;
	        $detail_text    = $news->detail_text;
	        $id_cat       	= $news->id_cat;
	        $picture        = $news->picture;
	        $count_number   = $news->count_number;
	        $active         = $news->active;
	        $creared_at     = $news->creared_at;
	        $updated_at     = $news->updated_at;
	        $slug 			= str_slug($name);
	    @endphp
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="{{ route('aboutme.news.detail', [$slug, $id_news]) }}" class="block-20" style="background-image: url('templates/hinhanhtintuc/{{$picture}}');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-3 meta">
	                <p class="mb-0">
	                	<span class="mr-2">{{$updated_at}}</span>
	                	<a class="mr-2">-</a>
	                	<a class="meta-eye"><span class="icon-eye"></span>{{$count_number}}</a>
	                </p>
                </div>
                <h3 class="heading"><a href="{{ route('aboutme.news.detail', [$slug, $id_news]) }}">{{$name}}</a></h3>
                <p>{{$preview_text}}</p>
              </div>
            </div>
          </div>
          @endforeach
          <div>
          <a style="background-color: #032a63;padding: 10px; margin-left: 500px;" href="javascript:void(0)" onclick="return getLoadMore()">LOAD MORE</a>
        </div>
        </div>
        </div>
        
        
      </div>
    </section>
    <script type="text/javascript">
        function getLoadMore(){
        	//alert('ok');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/getloadmore",
                
                type: 'POST',
                cache: false, 
                data: {
                    
                },
                success: function(data){
                    $('.hahaha').html(data);
                },
                error: function (){
                    alert('Có lỗi xảy ra');
                }
            });
            return false;
        }
    </script>
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Liên hệ cho tôi</h2>
          </div>
        </div>

        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">

            <form action="{{route('aboutme.aboutme.index')}}#contact-section" method="post" class="bg-light p-4 p-md-5 contact-form">
            	@if(Session::has('msg'))
		            <p class="category success">
		                <span style="color: red">{{Session::get('msg')}}</span>
		            </p>
		        @endif
            	@csrf
              <div class="form-group">
                <input type="text" name="hoten" class="form-control" placeholder="Họ tên">
                @error('hoten')
                    <span style="color: blue">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email">
              	@error('email')
                    <span style="color: blue">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <input type="text" name="diachi" class="form-control" placeholder="Địa chỉ">
              	@error('diachi')
                    <span style="color: blue">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <input type="number" name="sdt" class="form-control" placeholder="Số điện thoại">
              	@error('sdt')
                    <span style="color: blue">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <textarea name="noidung" cols="30" rows="7" class="form-control" placeholder="Nội dung"></textarea>
              	@error('noidung')
                    <span style="color: blue">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <input type="submit" value="Gửi" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div class="img" style="background-image: url(templates/aboutme/images/about.jpg);"></div>
          </div>
        </div>
      </div>
    </section>

    @stop