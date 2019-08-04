<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Chi tiết</th>
                                <th>Trạng thái</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($aboutmes as $aboutme)
                            @php
                                $id_aboutme     = $aboutme->id_aboutme;
                                $name           = $aboutme->name;
                                $detail_text    = $aboutme->detail_text;
                                $active         = $aboutme->active;
                                $urlEdit        = route('admin.aboutme.edit', $id_aboutme);
                                $urlDel         = route('admin.aboutme.del', $id_aboutme);
                            @endphp
                            <tr class="odd gradeX">
                                <td>{{$id_aboutme}}</td>
                                <td>{{$name}}</td>
                                <td>{{$detail_text}}</td>
                                <td>
                                @if($active==1)
                                <a href="javascript:void(0)" disabled onclick="return getTrangthai({{$id_aboutme}})" title="" class="btn btn-primary">Đang hiển thị</a>
                                @else
                                <a href="javascript:void(0)" onclick="return getTrangthai({{$id_aboutme}})" title="" class="btn btn-warning">Hiển thị</a>
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
                        function getTrangthai(id){
                            var Id = id;
                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                url: "/trangthaiAboutme",
                                
                                type: 'POST',
                                cache: false, 
                                data: {
                                    aId: Id
                                },
                                success: function(data){
                                    $('.trangthai').html(data);
                                },
                                error: function (){
                                    alert('Có lỗi xảy ra');
                                }
                            });
                            return false;
                        }
                    </script>