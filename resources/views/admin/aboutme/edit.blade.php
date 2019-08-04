@extends('templates.admin.master')
@section('main')
    @section('title', 'Edit Aboutme')
    <div class="col-md-10">

	  			<div class="row">
	  				<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Sửa Aboutme</div>
			  			</div>
			  			<form action="{{route('admin.aboutme.edit', $id	)}}" method="post">
			  			@csrf
			  			<div class="content-box-large box-with-header">
				  			<div>
								<div class="row mb-10"></div>
								
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="name">Tên: </label>
											@error('nameaboutme')
		                                        <strong style="color: red">{{ $message }}</strong>
		                                    @enderror
											<input type="text" value="{{$aboutme->name}}" name="nameaboutme" class="form-control" placeholder="Nhập...">
										</div>														
									</div>

									<div class="col-sm-6"></div>

									<div class="col-sm-12">
										<div class="form-group">
										   <label>Chi tiết: </label>
										   @error('chitiet')
		                                        <strong style="color: red">{{ $message }}</strong>
		                                    @enderror
										   <textarea class="form-control" name="chitiet" rows="7">{{$aboutme->detail_text}}</textarea>
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
	  		
		  </div>
@stop
