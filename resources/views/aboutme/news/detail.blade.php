@extends('templates.aboutme.master')
@section('main')
@section('title', 'News')

	 @include('templates.aboutme.headernews')	

    
    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3">{{$new->name}}</h2>
            <div><a><span class="icon-calendar"></span>{{$new->updated_at}}</a>  -  <a><span class="icon-eye"></span> {{$soluotxem}}</a></div>
            <h4 class="mb-3">{{$new->preview_text}}</h4>
            <p>{!!$new->detail_text!!}</p>
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <h3>Tin liên quan</h3>
              </div>
            </div>
            @foreach($newLienquan as $nLQ)
            @php
                $id_news       = $nLQ->id_news;
                $name       = $nLQ->name;
                $picture       = $nLQ->picture;
                $preview_text       = $nLQ->preview_text;
                $slug = str_slug($name);
            @endphp

            <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
                <img src="templates/hinhanhtintuc/{{$picture}}" width="100px" height="100px" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc">
                <h3><a href="{{ route('aboutme.news.detail', [$slug, $id_news]) }}">{{$name}}</a></h3>
                <p>{{$preview_text}}</p>
              </div>
            </div>
            @endforeach

            <div class="pt-5 mt-5">

              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Bình luận</h3>
                <form action="javascript:void(0)" method="post" class="p-5 bg-light">
                  @csrf
                  <div class="form-group">
                    <label for="name">Họ tên *: </label>
                    
                    <input type="text" class="form-control" name="name" id="name">
                  </div>
                  <div class="form-group">
                    <label for="message">Nội dung: </label>
                    
                    <textarea name="noidung" id="noidung" cols="30" rows="5" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" onclick="return getComment()" value="Bình luận" class="btn py-3 px-4 btn-primary">
                  </div>

                </form>
                
              </div>
              <div id="ketqua">
              @section('script')
    @foreach($comments as $comment)
      @php
        $id_comment = $comment->id_comment;
      @endphp
      <script type="text/javascript"> 
        $(document).ready(function(){
          $("#flip{{$id_comment}}").click(function(){
            $("#panel{{$id_comment}}").slideToggle("slow");
          });
        });
      </script>
    @endforeach
    @endsection
              <div id="sumComment"><h3 class="mb-5">{{$sumComment}} bình luận</h3></div>
              <ul class="comment-list">
                @foreach($comments as $comment)
                @php
                  $id_comment = $comment->id_comment;
                  $name = $comment->name;
                  $parent_id = $comment->parent_id;
                  $content = $comment->content;
                  $updated_at = $comment->updated_at;
                @endphp
                
                @if($parent_id==0)
                <li class="comment">
                  <div class="vcard bio">
                    <img src="templates/aboutme/images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>{{$name}}</h3>
                    <div class="meta">{{$updated_at}}</div>
                    <p>{{$content}}</p>
                    <div id="flip{{$id_comment}}"><p><a class="reply">Trả lời bình luận của: {{$name}}</a></p></div>
                    
                      <form id="panel{{$id_comment}}" style="display: none" action="javascript:void(0)" method="post" class="p-1 bg-light">
                        @csrf
                        <div class="form-group">
                          <label for="name">Họ tên *: </label>
                          
                          <input type="text" class="form-control" name="nameCon" id="nameCon{{$id_comment}}">
                        </div>
                        <div class="form-group">
                          <label for="message">Nội dung: </label>
                          
                          <textarea name="noidungCon" id="noidungCon{{$id_comment}}" cols="20" rows="3" class="form-control"></textarea>
                        </div>
                        <div  class="form-group">
                          <input type="submit"  onclick="return getCommentCon({{$id_comment}})" value="Trả lời bình luận" class="btn py-3 px-4 btn-primary">
                        </div>

                      </form>
                      
                  </div>
                  
                  <div id="ketquaCon-{{$id_comment}}">
                  <ul class="children">
                    @foreach($comments as $comment1)
                    @php
                      $id_comment1 = $comment1->id_comment;
                      $name1 = $comment1->name;
                      $parent_id1 = $comment1->parent_id;
                      $content1 = $comment1->content;
                      $updated_at1 = $comment1->updated_at;
                    @endphp
                    @if($parent_id1==$id_comment)
                    
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="templates/aboutme/images/person_1.jpg" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>{{$name1}}</h3>
                        <div class="meta">{{$updated_at1}}</div>
                        <p>{{$content1}}</p>
                        <!-- <p><a href="#" class="reply">Trả lời</a></p> -->
                      </div>
                    </li>
                    
                    @endif

                    @endforeach
                  </ul>
                </div>

                </li>

                @endif
                
                @endforeach
              </ul>



              </div>
              
              <!-- END comment-list -->
              <script type="text/javascript">
                  function getComment(){
                      var nameCm = $("#name").val();
                      var noidungCm = $("#noidung").val();
                      var idNews = {{$new->id_news}};
                      if(nameCm =="" || noidungCm==""){
                        alert("Mời nhập đủ thông tin.");
                      } 
                      else {
                      $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "/hienthiComment",
                        type: 'POST',  // POST or GET
                        cache: false, // true là lưa lại thông tin, false ko lưu, có thể xóa
                        data: {
                          aNameCm: nameCm, 
                          aNoidungCm: noidungCm,
                          aIdNews: idNews
                        },
                        success: function(data){ // dữ liệu lấy qua biến data
                          //$('.jquery-demo-ajax').html(data);
                          //alert(data);
                          $('#ketqua').html(data);
                        },
                        error: function (){
                          alert('Có lỗi xảy ra');
                        }
                      });
                      return false;
                    }
                  }
                </script>
                <script type="text/javascript">
                  function getCommentCon(id){
                      var idCha     = id;
                      //var nameCmCon = document.getElementById("#nameCon"+id).value;
                      var nameCmCon = $("#nameCon"+id).val();
                      var noidungCmCon = $("#noidungCon"+id).val();
                      var idNews = {{$new->id_news}};
                      //alert(nameCmCon);
                      
                      $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "/hihihi",
                        type: 'POST',  // POST or GET
                        cache: false, // true là lưa lại thông tin, false ko lưu, có thể xóa
                        data: {
                          aNameCmCon: nameCmCon, 
                          aNoidungCmCon: noidungCmCon,
                          aIdNewsCon: idNews,
                          aIdCha: idCha,
                        },
                        success: function(data){ // dữ liệu lấy qua biến data
                          //$('.jquery-demo-ajax').html(data);
                          //alert(data);
                          $('#ketquaCon-'+id).html(data);
                          var idNews = {{$new->id_news}};
                          $.ajax({

                              headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                              },
                              url: "/getnumbercmt",
                              type: 'POST',
                              cache: false,

                              data: {    
                                  aId: idNews

                              },

                              success: function(data){
                                 $('#sumComment').html(data);                                          
                              },
                              error: function (){
                                  alert('Có lỗi xảy ra');
                              }
                          });
                          return false;
                        },
                        error: function (){
                          alert('Có lỗi xảy ra');
                        }
                      });
                      return false;
                    
                  }
                </script>
  
                
            </div>

          </div> <!-- .col-md-8 -->
          
          @include('templates.aboutme.rightbar')

        </div>
      </div>

    </section> <!-- .section -->

@stop
