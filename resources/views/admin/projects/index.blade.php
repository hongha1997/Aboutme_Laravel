@extends('templates.admin.master')
@section('main')
    @section('title', 'Project')
    <div class="col-md-10">
            <div class="content-box-large">
                <div class="row">
                    <div class="panel-heading">
                        <div class="panel-title ">Quản lý Project</div>
                    </div>
                </div>
                <hr>    
                <div class="row">
                    <div class="col-md-8">
                        <a href="{{route('admin.projects.add')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Thêm</a>

                    </div>
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
                                <th>Tên</th>
                                <th>Mô tả</th>
                                <th>Ảnh</th>
                                <th>Link</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                            @php
                                $id_project         = $project->id_project;
                                $name               = $project->name;
                                $preview_text       = $project->preview_text;
                                $picture            = $project->picture;
                                $link               = $project->link;
                                $urlEdit            = route('admin.projects.edit', $id_project);
                                $urlDel             = route('admin.projects.del', $id_project);
                            @endphp
                            <tr class="odd gradeX">
                                <td>{{$id_project}}</td>
                                <td>{{$name}}</td>
                                <td>{{$preview_text}}</td>
                                @if($picture!='')
                                <td><img src="templates/projects/{{$picture}}" alt="" width="100px" /></td>
                                @else 
                                <td>Không có ảnh</td>
                                @endif
                                <td>{{$link}}</td>
                                <td class="center text-center">
                                    <a href="{{$urlEdit}}" title="" class="btn btn-primary"><span class="glyphicon glyphicon-pencil "></span> Sửa</a>
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
                          {{$projects->links()}}
                       </ul>
                    </nav>
                    <!-- /.pagination -->
                    
                </div>
                </div><!-- /.row -->
            </div><!-- /.content-box-large -->



          </div>
@stop
