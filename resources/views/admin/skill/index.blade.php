@extends('templates.admin.master')
@section('main')
    @section('title', 'Skill')
    <div class="col-md-10">
            <div class="content-box-large">
                <div class="row">
                    <div class="panel-heading">
                        <div class="panel-title ">Quản lý Skill</div>
                    </div>
                </div>
                <hr>    
                <div class="row">
                    <div class="col-md-8">
                        <a href="{{route('admin.skill.add')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Thêm</a>

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
                                <th>Giá trị</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($skills as $skill)
                            @php
                                $id_skill      = $skill->id_skill;
                                $name       = $skill->name;
                                $giatri      = $skill->giatri;
                                $urlEdit        = route('admin.skill.edit', $id_skill);
                                $urlDel         = route('admin.skill.del', $id_skill);
                            @endphp
                            <tr class="odd gradeX">
                                <td>{{$id_skill}}</td>
                                <td>{{$name}}</td>
                                <td>{{$giatri}}</td>
                                <td class="center text-center">
                                    <a href="{{$urlEdit}}" title="" class="btn btn-primary"><span class="glyphicon glyphicon-pencil "></span> Sửa</a>
                                    <a onclick="return confirm('Bạn có muốn xóa')" href="{{$urlDel}}" title="" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>                   
                    <!-- Pagination -->
                    <nav class="text-center" aria-label="...">
                       <ul class="pagination">
                          {{$skills->links()}}
                       </ul>
                    </nav>
                    <!-- /.pagination -->
                    
                </div>
                </div><!-- /.row -->
            </div><!-- /.content-box-large -->



          </div>
@stop
