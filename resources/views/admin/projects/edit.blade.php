@extends('templates.admin.master')
@section('main')
    @section('title', 'Edit Project')
    <div class="col-md-10">

	  			<div class="row">
	  				<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Sửa Project</div>
			  			</div>
			  			@if(Session::has('loi'))
	                        <div class="alert alert-success" >
	                            {{Session::get('loi')}}
	                        </div>
	                    @endif
	                    <form action="{{route('admin.projects.edit', $id)}}" method="post" enctype="multipart/form-data">
			  			@csrf
			  			<div class="content-box-large box-with-header">
				  			<div>
								<div class="row mb-10"></div>
								
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="name">Tên: </label>
											@error('name_projects')
		                                        <strong style="color: red">{{ $message }}</strong>
		                                    @enderror
											<input type="text" value="{{$project->name}}" name="name_projects" class="form-control" placeholder="Nhập...">
										</div>

										<div class="form-group">
											<label for="name">Mô tả: </label>
											@error('mota')
		                                        <strong style="color: red">{{ $message }}</strong>
		                                    @enderror
											<input type="text" value="{{$project->preview_text}}" name="mota" class="form-control" placeholder="Nhập...">
										</div>
										
										<div class="form-group">
											<label for="name">Link: </label>
											@error('link')
		                                        <strong style="color: red">{{ $message }}</strong>
		                                    @enderror
											<input type="text" value="{{$project->link}}" name="link" class="form-control" placeholder="Nhập...">
										</div>

										<div class="form-group">
											<label>Thêm hình ảnh</label>
											<input type="file" name="picture" class="btn btn-default" id="exampleInputFile1">
											<p class="help-block"><em>Định dạng: jpg, png, jpeg,...</em></p>
										</div>
										<div class="form-group">
		                                    <label>Ảnh cũ</label>
		                                    @if($project->picture!="")
		                                    <img src="/templates/projects/{{$project->picture}}" width="120px" alt="" />
		                                    @else
		                                    Không có ảnh
		                                    @endif
		                                    
		                                    <input type="checkbox" name="xoa" value="1">Xóa<br>
		                                </div>
									</div>

									<div class="col-sm-6"></div>


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
	  		
		  </div>
@stop
