@extends('templates.admin.master')
@section('main')
    @section('title', 'Add News')
    <div class="col-md-10">

	  			<div class="row">
	  				<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Thêm tin tức</div>
			  			</div>
			  			
			  			@if(Session::has('loi'))
	                        <div class="alert alert-success" >
	                            {{Session::get('loi')}}
	                        </div>
	                    @endif
			  			<form action="{{route('admin.news.add')}}" method="post" enctype="multipart/form-data">
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
											<input type="text" name="name_news" class="form-control" placeholder="Nhập tên truyện">
										</div>
										
										<div class="form-group">
											<label>Danh mục tin</label>
											<select name="cat_news" class="form-control">
											   @foreach($cats as $cat)
											   <option value="{{$cat->id_cat}}">{{$cat->name}}</option>
											   @endforeach
											</select>
										</div>

										<div class="form-group">
											<label>Thêm hình ảnh</label>
											<input type="file" name="picture" class="btn btn-default" id="exampleInputFile1">
											<p class="help-block"><em>Định dạng: jpg, png, jpeg,...</em></p>
										</div>
										
										<div class="form-group">
										   <label>Mô tả: </label>
										   @error('mota')
		                                        <strong style="color: red">{{ $message }}</strong>
		                                    @enderror
										   <textarea name="mota" class="form-control" rows="3"></textarea>
										</div>

										
									</div>

									<div class="col-sm-6"></div>

									<div class="col-sm-12">
										<div class="form-group">
										   <label>Chi tiết: </label>
										   @error('chitiet')
		                                        <strong style="color: red">{{ $message }}</strong>
		                                    @enderror
										   <textarea  name="chitiet" id="editor1" class="form-control" rows="7"></textarea>
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
