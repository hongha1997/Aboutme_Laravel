@extends('templates.aboutme.master')
@section('main')
@section('title', 'News')

	@include('templates.aboutme.headernews')	

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <h3>Tất cả các tin</h3>
              </div>
            </div>
            <div class="danhsachpublic">
            @foreach($newsPublic as $news)
            @php
              $id_news = $news->id_news;
              $name = $news->name;
              $picture = $news->picture;
              $count_number = $news->count_number;
              $updated_at = $news->updated_at;
              $preview_text = $news->preview_text;
              $slug = str_slug($name);
            @endphp

            <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
                <img src="templates/hinhanhtintuc/{{$picture}}" width="300px" height="300px" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc">
                <h3><a href="{{ route('aboutme.news.detail', [$slug, $id_news]) }}" >{{$name}}</a></h3>
                <p>{{$preview_text}}</p>
                <div><a ><span class="icon-calendar"></span>{{$updated_at}}</a>  -  <a><span class="icon-eye"></span> {{$count_number}}</a></div>
              </div>

            </div>

            @endforeach
            <!-- <script type="text/javascript">
                        function searchPublic(value){
                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                url: "/searchnewspublic",
                                
                                type: 'POST',
                                cache: false, 
                                data: {
                                    search_keyword: value,
                                },
                                success: function(data){
                                    $('.danhsachpublic').html(data);
                                },
                                error: function (){
                                    alert('Có lỗi xảy ra');
                                }
                            });
                            return false;
                        }
                    </script> -->
                  </div>
            {{$newsPublic->links()}}
          </div> <!-- .col-md-8 -->
          
          @include('templates.aboutme.rightbar')

        </div>
      </div>
    </section> <!-- .section -->
@stop