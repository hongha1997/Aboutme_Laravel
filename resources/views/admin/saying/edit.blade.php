@extends('templates.admin.master')
@section('main')
    @section('title', 'Edit Saying')
    <div class="col-md-10">

	  			<div class="row">
	  				<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Sửa Saying</div>
			  			</div>
			  			<form action="{{route('admin.saying.edit', $id)}}" method="post">
			  			@csrf
			  			<div class="content-box-large box-with-header">
				  			<div>
								<div class="row mb-10"></div>
								
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="name">Tác giả: </label>
											@error('tacgia')
		                                        <strong style="color: red">{{ $message }}</strong>
		                                    @enderror
											<input type="text" value="{{$saying->author}}" name="tacgia" class="form-control" placeholder="Nhập...">
										</div>														
									</div>

									<div class="col-sm-6"></div>

									<div class="col-sm-12">
										<div class="form-group">
										   <label>Nội dung: </label>
										   @error('chitiet')
		                                        <strong style="color: red">{{ $message }}</strong>
		                                    @enderror
										   <textarea class="form-control" name="chitiet" rows="7">
										   	{{$saying->content}}</textarea>
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
