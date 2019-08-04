<div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="" method="post" class="search-form">
                @csrf
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" onkeyup="searchPublic(this.value);" name="name" class="form-control" placeholder="Search...">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
            	<h3 class="heading-sidebar">Danh mục tin</h3>
              <ul class="categories">
                <li><a id="{{ Request::is('news*') ? 'active1' : null }}" href="{{ route('aboutme.news.index') }}">Tất cả tin</a></li>
                @foreach($catsLeftbar as $cat)
                @php
                  $id_cat = $cat->id_cat;
                  $name = $cat->name;
                  $soluong = $cat->soluong;
                  $slug = str_slug($name);
                @endphp
                <li><a id="{{ Request::is('thumuc/'.$slug.'-'.$id_cat.'*') ? 'active1' : null }}" href="{{ route('aboutme.news.cat', [$slug, $id_cat]) }}">{{$name}}({{$soluong}})</a></li>
                @endforeach
              </ul>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Tin mới nhất</h3>
              @foreach($newsNews as $news)
              @php
                $id_news = $news->id_news;
                $name = $news->name;
                $picture = $news->picture;
                $count_number = $news->count_number;
                $updated_at = $news->updated_at;
                $slug = str_slug($name);
              @endphp
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(templates/hinhanhtintuc/{{$picture}});"></a>

                <div class="text">
                  <h3 class="heading"><a href="{{ route('aboutme.news.detail', [$slug, $id_news]) }}">{{$name}}</a></h3>
                  <div class="meta">
                    <div><a><span class="icon-calendar"></span>{{$updated_at}}</a></div><br>
                    <div><a><span class="icon-eye"></span> {{$count_number}}</a></div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>

            <!-- <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">house</a>
                <a href="#" class="tag-cloud-link">office</a>
                <a href="#" class="tag-cloud-link">building</a>
                <a href="#" class="tag-cloud-link">land</a>
                <a href="#" class="tag-cloud-link">table</a>
                <a href="#" class="tag-cloud-link">interior</a>
                <a href="#" class="tag-cloud-link">exterior</a>
                <a href="#" class="tag-cloud-link">industrial</a>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div> -->
          </div>