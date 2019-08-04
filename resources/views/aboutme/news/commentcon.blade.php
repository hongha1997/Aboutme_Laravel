<ul class="children">
  @foreach($comments1 as $comment2)
  @php
    $id_comment2 = $comment2->id_comment;
    $name2 = $comment2->name;
    $parent_id2 = $comment2->parent_id;
    $content2 = $comment2->content;
    $updated_at2 = $comment2->updated_at;
  @endphp
  
  <li class="comment">
    <div class="vcard bio">
      <img src="templates/aboutme/images/person_1.jpg" alt="Image placeholder">
    </div>
    <div class="comment-body">
      <h3>{{$name2}}</h3>
      <div class="meta">{{$updated_at2}}</div>
      <p>{{$content2}}</p>
    </div>
  </li>
  

  @endforeach
</ul>