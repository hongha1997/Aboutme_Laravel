<base href="{{asset('')}}">
<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" type="image/ico" href="/templates/admin/images/icon-180x180.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <!-- Bắt buộc cái token phải ở trên  -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
  	<title>@yield('title') - Admin</title>
  	
  	<base href="{{asset('')}}">
    <link href="/templates/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="/templates/admin/css/style1.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    	#active {
    		color:red;
    	}
    </style>
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="{{route('admin.index.index')}}">ADMIN</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12"></div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">              
              			@if(Auth::check())
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->fullname}}<b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li onclick="return confirm('Bạn có chắc đăng xuất không!!!')"><a  href="{{ route('auth.auth.logout') }}" >Logout</a></li>
	                        </ul> 
	                      </li>
	                    </ul>
	                    @endif
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>