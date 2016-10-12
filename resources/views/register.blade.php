<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Homepage | FindMyBitch</title>

		<!-- Bootstrap CSS -->
		
		<link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/font-awesome-4.6.3/css/font-awesome.min.css')}}" >
		<link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.css')}}" >
		<link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/inner.css')}}" >				
		<link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/jquery.bxslider.css')}}" >
		
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.js')}}"></script>
    
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		
		<!-- jQuery -->
		<div class="wrapper">
			<div class="top-section">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							
						</div>
				
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">							
								<li><a href="#">FindMyBitch</a></li>
							</ul>
							
							<ul class="nav navbar-nav navbar-right">
								<li><a href="/">Home</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</nav>
			</div>

			<div class="section-1">
				<h2 class="text-center">Sign Up</h2>
				<div class="heart-divider">
							<span class="grey-line"></span>
							<i class="fa fa-heart pink-heart"></i>
							<i class="fa fa-heart grey-heart"></i>
							<span class="grey-line"></span>
        				</div>
				<p class="text-center">Just one step away from finding your loved one :)</p>        				
				<div class="space-small"></div>				
				<div class="col-md-3"></div>
				<div class="col-md-6  regForm">
					{!! Form::open(array( 'action' => 'MainController@register', 'method'=>'POST')) !!}
						<div class="col-xs-6">
							<div class="form-group">
							<label for="firstName">First Name</label>
							<input type="text" class="form-control" name="firstName" placeholder="Enter First Name" class="firstName">
							</div>	
						</div>						
						<div class="col-xs-6">
							<div class="form-group">
								<label for="lastName">Last Name</label>
								<input type="text" class="form-control" name="lastName" placeholder="Enter Last Name" class="lastName">
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<label for="email">Email Id:</label>
								<input type="email" class="form-control" name="email" placeholder="Enter email id" class="email">
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<label for="username">Username:</label>
								<input type="text" class="form-control" name="username" placeholder="Enter Username" class="username">
							</div>
						</div>
						<div class="col-xs-8">
							<div class="form-group">
								<label for="password">Password:</label>
								<input type="password" class="form-control" name="password" placeholder="Enter Password" class="password">
							</div>
						</div>
						<div class="col-xs-4">
							<div class="form-group">
								<label for="maritalStatus">MaritalStatus:</label>
								<select name="maritalStatus" id="maritalStatus" class="form-control maritalStatus" required="required">
									<option value="single">Single</option>
									<option value="married">Married</option>
									<option value="divorced">Divorced</option>
									<option value="other">Other</option>
								</select>
							</div>
						</div>
						<div class="col-xs-2">
							<div class="form-group">
								<label for="age">Age:</label>
								<input type="number" min="16" max="60" class="form-control" name="age" placeholder="Age" class="age">
							</div>
						</div>
						<div class="col-xs-4">
							<div class="form-group">
								<label for="sex">Sex:</label>
								<select name="sex" id="sex" class="form-control sex" required="required">
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="form-group">
								<label for="religion">Religion:</label>			
								<select name="religion" id="search_religion" class="form-control" required="required"> 	
								</select>						
							</div>
						</div>
						<div class="col-xs-6">
							<div class="form-group">
								<label for="mothertongue">MotherTongue:</label>			
								<select name="mothertongue" id="search_motherTongue" class="form-control" required="required"> 	
								</select>						
							</div>
						</div>
						<div class="col-xs-6">
							<div class="form-group">
								<label for="country">Country:</label>			
								<select name="country" id="search_country" class="form-control" required="required"> 	
								</select>						
							</div>
						</div>
						<div class="row text-center">
									<!-- <button type="button" class="btn btn-default">Login</button> -->
									{!! Form::submit('Submit', array('class'=>'myButton' )) !!}									
								</div>
							{!! Form::close() !!}
				</div>
			</div>
		</div>
		<!-- Bootstrap JavaScript -->
		<script type="text/javascript" src="{{URL::asset('assets/js/bootstrap.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.easing.1.3.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.fitvids.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.bxslider.min.js')}}"></script>
		<!-- slider plugin -->		
		<script type="text/javascript" src="{{URL::asset('assets/js/app.js')}}"></script>		
		
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		
	</body>
</html>