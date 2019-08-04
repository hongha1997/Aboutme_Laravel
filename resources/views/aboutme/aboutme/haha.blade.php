<!-- @foreach($newss1 as $news1)
		@php
	        $id_news       	= $news1->id_news;
	        $name       	= $news1->name;
	        $preview_text   = $news1->preview_text;
	        $detail_text    = $news1->detail_text;
	        $id_cat       	= $news1->id_cat;
	        $picture        = $news1->picture;
	        $count_number   = $news1->count_number;
	        $active         = $news1->active;
	        $creared_at     = $news1->creared_at;
	        $updated_at     = $news1->updated_at;
	        $slug 			= str_slug($name);
	    @endphp
	    {{$name}}<br>
	    @endforeach
 -->

<div class="row d-flex">
    	@foreach($newss1 as $news1)
		@php
	        $id_news       	= $news1->id_news;
	        $name       	= $news1->name;
	        $preview_text   = $news1->preview_text;
	        $detail_text    = $news1->detail_text;
	        $id_cat       	= $news1->id_cat;
	        $picture        = $news1->picture;
	        $count_number   = $news1->count_number;
	        $active         = $news1->active;
	        $creared_at     = $news1->creared_at;
	        $updated_at     = $news1->updated_at;
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
        </div>