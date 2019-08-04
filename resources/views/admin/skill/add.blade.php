@extends('templates.admin.master')
@section('main')
    @section('title', 'Add Skill')
    <div class="col-md-10">

	  			<div class="row">
	  				<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Thêm Skill</div>
			  			</div>
			  			<form action="{{route('admin.skill.add')}}" method="post">
			  			@csrf
			  			<div class="content-box-large box-with-header">
				  			<div>
								<div class="row mb-10"></div>
								
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="name">Tên: </label>
											@error('name')
		                                        <strong style="color: red">{{ $message }}</strong>
		                                    @enderror
											<input type="text" name="name" class="form-control" placeholder="Nhập...">
										</div>
										<div class="form-group">
											<label for="name">Giá trị: </label>
											@error('giatri')
		                                        <strong style="color: red">{{ $message }}</strong>
		                                    @enderror
											<input type="number" name="giatri" class="form-control" placeholder="Nhập...">
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
