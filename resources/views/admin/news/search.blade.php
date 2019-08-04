@foreach($news as $new)
@php
    $id_news            = $new->id_news;
    $name               = $new->name;
    $preview_text       = $new->preview_text;
    $picture            = $new->picture;
    $count_number       = $new->count_number;
    $active             = $new->active;
    $catname            = $new->catname;
    $urlEdit            = route('admin.news.edit', $id_news);
    $urlDel             = route('admin.news.del', $id_news);
@endphp
<tr class="odd gradeX">
    <td>{{$id_news}}</td>
    <td>{{$name}}</td>
    <td>{{$catname}}</td>
    @if($picture!='')
    <td><img src="templates/hinhanhtintuc/{{$picture}}" alt="" width="100px" /></td>
    @else 
    <td>Không có ảnh</td>
    @endif
    <td class="trangthai-{{$id_news}}">
        @if($active==1)
            <a href="javascript:void(0)"  onclick="return getTrangthai({{$active}}, {{$id_news}})"><img src="/templates/admin/images/agree.png" alt="" /></a>
        @else
            <a href="javascript:void(0)" onclick="return getTrangthai({{$active}}, {{$id_news}})"><img src="/templates/admin/images/deagree.png" alt="" /></a>
        @endif
    </td>
    <td class="center text-center">
        <a href="{{$urlEdit}}" title="" class="btn btn-primary"><span class="glyphicon glyphicon-pencil "></span> Sửa</a>
        <a onclick="return confirm('Bạn có muốn xóa')" href="{{$urlDel}}" title="" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
    </td>
</tr>
@endforeach