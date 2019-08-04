@extends('templates.admin.master')
@section('main')
    @section('title', 'Add Cat')
    <div class="col-md-10">

	  			<div class="row">
	  				<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Thêm danh mục</div>
			  			</div>
			  			<form action="{{route('admin.cat.add')}}" method="post">
			  			@csrf
			  			<div class="content-box-large box-with-header">
				  			<div>
								<div class="row mb-10"></div>
								
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="name">Tên danh mục: </label>
											@error('namecat')
		                                        <strong style="color: red">{{ $message }}</strong>
		                                    @enderror
											<input type="text" name="namecat" class="form-control" placeholder="Nhập tên danh mục">
											
										</div>
										
										

										
									</div>

									
								</div>

								<hr>

								<div class="row">
									<div class="col-sm-12">
										<input type="submit" value="Thêm" class="btn btn-success" />
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
