@extends('templates.admin.master')
@section('main')
    @section('title', 'User')
    <div class="col-md-10">
            <div class="content-box-large">
                <div class="row">
                    <div class="panel-heading">
                        <div class="panel-title ">Quản lý User</div>
                    </div>
                </div>
                <hr>    
                <div class="row">
                    <div class="col-md-8">
                        <a href="{{route('admin.user.add')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Thêm</a>

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
                                <th>Username</th>
                                <th>Fullname</th>
                                <th>Level</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            @php
                                $id              = $user->id;
                                $username        = $user->username;
                                $fullname        = $user->fullname;
                                $level           = $user->level;
                                $urlEdit         = route('admin.user.edit', $id);
                                $urlDel          = route('admin.user.del', $id);
                            @endphp
                            <tr class="odd gradeX">
                                <td>{{$id}}</td>
                                <td>{{$username}}</td>
                                <td>{{$fullname}}</td>
                                <td>
                                    @if($level==1)
                                        Admin
                                    @else
                                        User
                                    @endif
                                </td>
                                <td class="center text-center">
                                    @php
                                        $level1 = Auth::user()->level;
                                        $name = Auth::user()->username;
                                        if($level1==0 && $name==$username){
                                    @endphp
                                    <a href="{{$urlEdit}}" title="" class="btn btn-primary"><span class="glyphicon glyphicon-pencil "></span> Sửa</a>
                                    
                                    @php
                                        } else if($level1==1) {
                                    @endphp
                                    <a href="{{$urlEdit}}" title="" class="btn btn-primary"><span class="glyphicon glyphicon-pencil "></span> Sửa</a>
                                    
                                    @if($level!=1)
                                    <a onclick="return confirm('Bạn có muốn xóa')" href="{{$urlDel}}" title="" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                    @endif
                                    @php
                                        } 
                                    @endphp
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>                                    
                    <!-- Pagination -->
                    <nav class="text-center" aria-label="...">
                       <ul class="pagination">
                          {{$users->links()}}
                       </ul>
                    </nav>
                    <!-- /.pagination -->
                    
                </div>
                </div><!-- /.row -->
            </div><!-- /.content-box-large -->



          </div>
@stop
