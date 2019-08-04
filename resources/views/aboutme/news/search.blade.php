@foreach($newspublics as $news)
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