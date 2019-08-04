<div class="row d-flex">
    	@foreach($newss1 as $news)
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