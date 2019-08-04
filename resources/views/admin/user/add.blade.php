@extends('templates.admin.master')
@section('main')
    @section('title', 'Add User')
    <div class="col-md-10">

	  			<div class="row">
	  				<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Thêm User</div>
			  			</div>
			  			<form action="{{route('admin.user.add')}}" method="post">
			  			@csrf
			  			<div class="content-box-large box-with-header">
				  			<div>
								<div class="row mb-10"></div>
								
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="name">Username</label>
											@error('username')
		                                        <strong style="color: red">{{ $message }}</strong>
		                                    @enderror
											<input type="text" name="username" class="form-control" placeholder="Nhập...">
										</div>
										<div class="form-group">
											<label for="name">Password</label>
											@error('password')
		                                        <strong style="color: red">{{ $message }}</strong>
		                                    @enderror
											<input type="password" name="password" class="form-control" placeholder="Nhập...">
										</div>
										<div class="form-group">
											<label for="name">Fullname</label>
											@error('fullname')
		                                        <strong style="color: red">{{ $message }}</strong>
		                                    @enderror
											<input type="text" name="fullname" class="form-control" placeholder="Nhập...">
										</div>
										
										<div class="form-group">
											<label>Level</label>
											<select class="form-control" name="level">
											   <option value="0">User</option>
											   @php
			                                        $level = Auth::user()->level;
			                                        if($level!=0){
			                                    @endphp
											   <option value="1">Admin</option>
											   @php
			                                        } 
			                                    @endphp
											</select>
										</div>			
									</div>
									<div class="col-sm-6"></div>									
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
