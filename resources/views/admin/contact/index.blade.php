@extends('templates.admin.master')
@section('main')
    @section('title', 'Contact')
    <div class="col-md-10">
            <div class="content-box-large">
                <div class="row">
                    <div class="panel-heading">
                        <div class="panel-title ">Quản lý Contact</div>
                    </div>
                </div>
                <hr>    
                <div class="row">
                    <div class="col-md-8">
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
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>SĐT</th>
                                <th>Nội dung</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            @php
                                $id_contact     = $contact->id_contact;
                                $fullname       = $contact->fullname;
                                $email          = $contact->email;
                                $address        = $contact->address;
                                $phone          = $contact->phone;
                                $content        = $contact->content;
                                $active         = $contact->active;
                                $urlDel         = route('admin.contact.del', $id_contact);
                            @endphp
                            <tr class="odd gradeX">
                                <td>{{$id_contact}}</td>
                                <td>{{$fullname}}</td>
                                <td>{{$email}}</td>
                                <td>{{$address}}</td>
                                <td>{{$phone}}</td>
                                <td>{{$content}}</td>
                                <td class="center text-center">
                                    @if($active==0)
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-haha="{{$id_contact}}" data-whatever="{{$email}}">Liên hệ</button>
                                    @else
                                    <button disabled="" type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="{{$email}}">Đã liên hệ</button>
                                    @endif
                                    <a onclick="return confirm('Bạn có muốn xóa')" href="{{$urlDel}}" title="" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>                                   
                    <!-- Pagination -->
                    <nav class="text-center" aria-label="...">
                       <ul class="pagination">
                          {{$contacts->links()}}
                       </ul>
                    </nav>
                    <!-- /.pagination -->
                    
                </div>
                </div><!-- /.row -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Liên hệ lại</h4>
                      </div>
                      <div class="modal-body">
                        <form action="{{route('admin.contact.index')}}" method="post">
                            @csrf
                            <div style="display: none" class="form-group">
                            <label for="haha" class="control-label">id:</label>
                            <input type="text" readonly="" name="id" class="form-control" id="haha">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="control-label">Email:</label>
                            <input type="text" readonly="" name="email" class="form-control" id="recipient-name">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="control-label">Tiêu đề:</label>
                            <input type="text" name="tieude" class="form-control" >
                          </div>
                          <div class="form-group">
                            <label for="message-text" class="control-label">Nội dung:</label>
                            <textarea name="noidung" class="form-control" id="message-text"></textarea>
                          </div>
                          <div class="form-group">
                            <input type="submit" class="btn-success form-control" >
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>


            </div><!-- /.content-box-large -->



          </div>
@stop
