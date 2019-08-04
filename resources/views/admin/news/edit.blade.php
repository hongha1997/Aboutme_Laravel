@extends('templates.admin.master')
@section('main')
    @section('title', 'Edit News')
    <div class="col-md-10">

	  			<div class="row">
	  				<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Sửa tin tức</div>
			  			</div>
			  			
			  			@if(Session::has('loi'))
	                        <div class="alert alert-success" >
	                            {{Session::get('loi')}}
	                        </div>
	                    @endif
			  			<form action="{{route('admin.news.edit', $id)}}" method="post" enctype="multipart/form-data">
			  			@csrf
			  			<div class="content-box-large box-with-header">
				  			<div>
								<div class="row mb-10"></div>
								
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="name">Tên tin: </label>
											@error('name_news')
		                                        <strong style="color: red">{{ $message }}</strong>
		                                    @enderror
											<input type="text" value="{{$news->name}}" name="name_news" class="form-control" placeholder="Nhập tên truyện">
										</div>
										
										<div class="form-group">
											<label>Danh mục tin</label>
											<select name="cat_news" class="form-control">
											   @foreach($cats as $cat)
											   <option 
											   @if ($news->id_cat==$cat->id_cat) 
		                                            {{"selected"}}
		                                        @endif
											   value="{{$cat->id_cat}}">{{$cat->name}}</option>
											   @endforeach
											</select>
										</div>

										<div class="form-group">
											<label>Thêm hình ảnh</label>
											<input type="file" name="picture" class="btn btn-default" id="exampleInputFile1">
											<p class="help-block"><em>Định dạng: jpg, png, jpeg,...</em></p>
										</div>

										<div class="form-group">
		                                    <label>Ảnh cũ</label>
		                                    @if($news->picture!="")
		                                    <img src="/templates/hinhanhtintuc/{{$news->picture}}" width="120px" alt="" />
		                                    @else
		                                    Không có ảnh
		                                    @endif
		                                    
		                                    <input type="checkbox" name="xoa" value="1">Xóa<br>
		                                </div>

										<div class="form-group">
										   <label>Mô tả: </label>
										   @error('mota')
		                                        <strong style="color: red">{{ $message }}</strong>
		                                    @enderror
										   <textarea name="mota" class="form-control" rows="3">{!!$news->preview_text!!}</textarea>
										</div>

										
									</div>

									<div class="col-sm-6"></div>

									<div class="col-sm-12">
										<div class="form-group">
										   <label>Chi tiết: </label>
										   @error('chitiet')
		                                        <strong style="color: red">{{ $message }}</strong>
		                                    @enderror
										   <textarea id="editor1" name="chitiet" class="form-control" rows="7">{!!$news->detail_text!!}</textarea>
										</div>
									</div>
								</div>

								<hr>

								<div class="row">
									<div class="col-sm-12">
										<input type="submit" value="Sửa" class="btn btn-success" />
										<input type="reset" value="Nhập lại" class="btn btn-default" />
									</div>
								</div>

							</div>
						</div>
					</form>
			  		</div>
	  			</div><!-- /.row col-size -->
	  			<div class="col-md-10">
            <div class="content-box-large">
                <div class="row">
                    <div class="panel-heading">
                        <div class="panel-title ">Quản lý Comment của tin: {{$news->name}}</div>
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
		  </div>

@stop
