@if($new->active==1)
    <a href="javascript:void(0)"  onclick="return getTrangthai({{$new->active}}, {{$new->id_news}})"><img src="/templates/admin/images/agree.png" alt="" /></a>
@else
    <a href="javascript:void(0)" onclick="return getTrangthai({{$new->active}}, {{$new->id_news}})"><img src="/templates/admin/images/deagree.png" alt="" /></a>
@endif
                                   