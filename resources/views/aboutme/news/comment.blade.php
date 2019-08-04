
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


