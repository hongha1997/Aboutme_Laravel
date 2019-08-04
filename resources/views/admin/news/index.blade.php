@extends('templates.admin.master')
@section('main')
    @section('title', 'News')
    <div class="col-md-10">
            <div class="content-box-large">
                <div class="row">
                    <div class="panel-heading">
                        <div class="panel-title ">Quản lý tin tức</div>
                    </div>
                </div>
                <hr>    
                <div class="row">
                    <div class="col-md-8">
                        <a href="{{route('admin.news.add')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Thêm</a>

                    </div>
                    <div class="col-md-4">
                    <form action="" method="post">
                        @csrf
                     <div class="input-group form">
                       <input type="text" onkeyup="search(this.value);" name="name" class="timkiem form-control" placeholder="Search...">
                       <span class="input-group-btn">
                         <button class="btn btn-primary" type="button">Search</button>
                       </span>
                     </div>
                 </form>
                    </div>

                </div>

                <div class="row">

                <div class="panel-body">
                    @if(Session::has('msg'))
                        <div id="haha" class="alert alert-success" >
                            {{Session::get('msg')}}
                        </div>
                    @endif
                    
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên tin</th>
                                <th>Tên danh mục</th>
                                <th>Trạng thái</th>
                                <th>Status
                                    <div class="kq">
                                        <span style="color: blue">({{$soluongActive}})</span>
                                    </div>
                                </th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody class="danhsach">
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
                        </tbody>
                    </table>
                    <script type="text/javascript">

                        // $(document).ready(function(){
                        //     $(".timkiem").keyup(function(){
                        //         var txt = $(".timkiem").val();
                        //         $.post('/searchnews',{data:txt}, function(data){
                        //             $('.danhsach').html(data);
                        //         })
                        //     });
                        // });
                    </script>
                    <script type="text/javascript">
                        function search(value){
                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                url: "/searchnews",
                                
                                type: 'POST',
                                cache: false, 
                                data: {
                                    keyword: value,
                                },
                                success: function(data){
                                    $('.danhsach').html(data);
                                },
                                error: function (){
                                    alert('Có lỗi xảy ra');
                                }
                            });
                            return false;
                        }
                    </script>
                    <script type="text/javascript">
                        function getTrangthai(trangthai, id){
                            
                            var Trangthai = trangthai;
                            var Id = id;
                            //alert(Id);
                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                url: "/trangthaiNews",
                                
                                type: 'POST',
                                cache: false, 
                                data: {
                                    aTrangthai: Trangthai,
                                    aId: Id
                                },
                                success: function(data){
                                    $('.trangthai-'+Id).html(data);
                                    // $('#ket-qua').html(data);
                                    $.ajax({
                                        headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                        url: "/hahaha",
                                        type: 'POST',
                                        cache: false,
                                        data1: {    
                                            aId1: Id,          
                                        },
                                        success: function(data1){
                                           $('.kq').html(data1);                                          
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
                    
                    <!-- Pagination -->
                    <nav class="text-center" aria-label="...">
                       <ul class="pagination">
                          {{$news->links()}}
                       </ul>
                    </nav>
                    <!-- /.pagination -->
                    
                </div>
                </div><!-- /.row -->
            </div><!-- /.content-box-large -->



          </div>
@stop
