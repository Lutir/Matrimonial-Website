<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Homepage | FindMyBitch</title>
		<meta id="token" name="csrf-token" content="{{ csrf_token() }}">
		<!-- Bootstrap CSS -->
		
		<link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/font-awesome-4.6.3/css/font-awesome.min.css')}}" >
		<link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.css')}}" >
		<link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/profile.css')}}" >				
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
		
	<div class="wrapper">
		<div class="container-fluid">
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
							<a class="navbar-brand" href="#">FindYourBitch</a>

						</div>
				
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">							
							<ul class="nav navbar-nav navbar-right">
							<li>
								@if(session()->has('username'))
									<a href="#">Welcome {!! session('username') !!}</a>
								@endif
							</li>
								<li><a href="register"><i class="fa fa-sign-in" aria-hidden="true"></i>
								@if(session()->has('username'))
								    Profile
								@else 
								    Signup
								@endif
								</a>
								</li>
								
								@if(session()->has('username'))
								    <li><a href="register"><i class="fa fa-sign-in" aria-hidden="true"></i>Find Matches</a></li>
								@endif

								<li>							
									
									 
									@if(session()->has('username'))
									    <a href='{{action('MainController@getLogout')}}'><i class="fa fa-user" aria-hidden="true"></i>Logout
									@else 
									    <a data-toggle="modal" href='#login-modal'><i class="fa fa-user" aria-hidden="true"></i>Login
									@endif
									
									</a>
								</li>
								

							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</nav>				
		</div>

		<div class="section-1">
			<h2>Profile Information</h2>
			<h3>Profile Picture</h3>
			<!-- <form id="form1">
					<img id="bannerImg" src="{{URL::asset('assets/images/profile.svg')}}"  alt="your image img-responsive" />

					<img id="bannerImage" src="{{URL::asset('assets/images/profile.svg')}}"  alt="your image img-responsive" width="200px" />
			       <input type='file' id="imgInp" onchange="readURL(this);"/>
			       
			</form> -->
			<!-- {!! Form::open(array('url'=>'imageUpload','method'=>'POST', 'files'=>true )) !!}	


			        

			        <div class="form-group">
			            {!! Form::label('image', 'Choose an image') !!}
			            {!! Form::file('image') !!}
			        </div>

			        <div class="form-group">
			            {!! Form::submit('Save', array( 'class'=>'btn btn-danger form-control' )) !!}
			        </div>

			        {!! Form::close() !!}
			 -->
			<div class="row profile-container">
				<div class="col-md-2 col-md-offset-10">
					<button type="button" class="btn btn-default save">Save Details</button>	
				</div>
				
				<div class="col-md-3">
					<p class="heading-main">
						Section
					</p>
					<ul class="options">
						<li id="1">About Myself</li>
						<li id="2">Personal Details</li>
						<li id="3">Family Details</li>
					</ul>
				</div>
				<div class="col-md-9 details">
					<div class="s-1">
						<form action="" method="POST" role="form">
												
						<div class="col-md-6">
							<div class="form-group">
								<label for="">First Name:</label>
								<input type="text" class="form-control" id="firstName" placeholder="Enter first name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Last Name:</label>
								<input type="text" class="form-control" id="lastName" placeholder="Enter last name">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="">Email Id:</label>
								<input type="text" class="form-control" id="email" placeholder="Enter first name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Marital Status:</label>
								<select name="maritalStatus" id="maritalStatus" class="form-control maritalStatus" required="required">
									<option value="single">Single</option>
									<option value="married">Married</option>
									<option value="divorced">Divorced</option>
									<option value="other">Other</option>
								</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="religion">Religion:</label>			
								<select name="religion" id="search_religion" class="form-control" required="required"> 	
								</select>						
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="mothertongue">MotherTongue:</label>			
								<select name="mothertongue" id="search_motherTongue" class="form-control" required="required"> 	
								</select>						
							</div>
						</div>
						<div class="col-md-6 col-md-offset-3">
							<div class="form-group">
								<label for="country">Country:</label>			
								<select name="country" id="search_country" class="form-control" required="required"> 	
								</select>						
							</div>
						</div>
																		
						</form>
					</div>

					<div class="s-2">
						<form action="" method="POST" role="form">
												
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Occupation:</label>
								<input type="text" class="form-control" id="occupation" placeholder="Enter occupation">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Company Name:</label>
								<input type="text" class="form-control" id="company" placeholder="Enter company name">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="">Income:</label>
								<input type="text" class="form-control" id="income" placeholder="Enter Income">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Diet:</label>
								<select name="diet" id="diet" class="form-control" required="required">
									<option value="vegetarian">Vegetarian</option>
									<option value="non-vegetarian">Non-Vegetarian</option>
								</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="smoke">Smoking Habbit:</label>			
								<select name="smoke" id="smoke" class="form-control" required="required">
									<option value="yes">Yes</option>
									<option value="no">No</option>
								</select>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
								<label for="drinking">Drinking Habbit:</label>			
								<select name="drink" id="drink" class="form-control" required="required">
									<option value="yes">Yes</option>
									<option value="no">No</option>
								</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="raashi">Raashi:</label>
								<input type="text" class="form-control" id="raashi" placeholder="Enter Raashi">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="complexion">Complexion:</label>
								<input type="text" class="form-control" id="complexion" placeholder="Enter Complexion">
							</div>
						</div>

						</form>
					</div>

					<div class="s-3">
						<form action="" method="POST" role="form">		
						<div class="col-md-6">
							<div class="form-group">
								<label for="fathers_occupation">Father's Occupation:</label>
								<input type="text" class="form-control" id="fathers_occupation" placeholder="Enter Raashi">
							</div>
						</div>							

						<div class="col-md-6">
							<div class="form-group">
								<label for="mothers_occupation">Mother's Occupatin:</label>
								<input type="text" class="form-control" id="mothers_occupation" placeholder="Enter Raashi">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label for="desc">Brief Description about yourself:</label>
								<textarea name="desc" id="desc" class="form-control" rows="3" required="required"></textarea>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
	</div>

		<!-- jQuery -->
		
		<!-- Bootstrap JavaScript -->
		<script type="text/javascript" src="{{URL::asset('assets/js/bootstrap.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.easing.1.3.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.fitvids.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.bxslider.min.js')}}"></script>
		<!-- slider plugin -->		
		<script type="text/javascript" src="{{URL::asset('assets/js/app.js')}}"></script>		
		<script type="text/javascript" src="{{URL::asset('assets/js/profile.js')}}"></script>		
		
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		
	</body>
</html>