@extends('templates.admin.master')
@section('main')
    @section('title', 'Comment')
    <div class="col-md-10">
            <div class="content-box-large">
                <div class="row">
                    <div class="panel-heading">
                        <div class="panel-title ">Quản lý Comment</div>
                    </div>
                </div>
                <hr>    
                <div class="row">
                    <div class="col-md-4">
                     <div class="input-group form">
                       <input type="text" class="form-control" placeholder="Search...">
                       <span class="input-group-btn">
                         <button class="btn btn-primary" type="button">Search</button>
                       </span>
                     </div>
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
                                <th>Tên Tin</th>
                                <th>Tên</th>
                                <th>Nội dung</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comments as $comment)
                            @php
                                $id_comment         = $comment->id_comment;
                                $name               = $comment->name;
                                $content             = $comment->content;
                                $newsname             = $comment->newsname;
                                $urlDel         = route('admin.comment.del', $id_comment);
                            @endphp
                            <tr class="odd gradeX">
                                <td>{{$id_comment}}</td>
                                <td>{{$newsname}}</td>
                                <td>{{$name}}</td>
                                <td>{{$content}}</td>
                                <td class="center text-center">
                                    <a onclick="return confirm('Bạn có muốn xóa')" href="{{$urlDel}}" title="" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <script type="text/javascript">
                        // function getTrangthai(trangthai, id){
                            
                        //     var Trangthai = trangthai;
                        //     var Id = id;
                        //     $.ajax({
                        //         headers: {
                        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        //         },
                        //         url: "/trangthai",
                                
                        //         type: 'POST',
                        //         cache: false, 
                        //         data: {
                        //             aTrangthai: Trangthai,
                        //             aId: Id
                        //         },
                        //         success: function(data){
                        //             $('.haha-'+Id).html(data);
                        //             // $('#ket-qua').html(data);
                        //         },
                        //         error: function (){
                        //             alert('Có lỗi xảy ra');
                        //         }
                        //     });
                        //     return false;
                        // }
                    </script>
                    
                    <!-- Pagination -->
                    <nav class="text-center" aria-label="...">
                       <ul class="pagination">
                          {{$comments->links()}}
                       </ul>
                    </nav>
                    <!-- /.pagination -->
                    
                </div>
                </div><!-- /.row -->
            </div><!-- /.content-box-large -->



          </div>
@stop
