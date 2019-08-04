@include('templates.admin.header')
<div class="page-content">
	<div class="row">
	  	<div class="col-md-2">
	  		<div class="sidebar content-box" style="display: block;">
	  			@include('templates.admin.left-bar')
	  		</div>
	  	</div>
		@yield('main')
	</div>
</div>
@include('templates.admin.footer')

