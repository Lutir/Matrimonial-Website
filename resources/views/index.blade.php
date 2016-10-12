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
		<link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}" >				
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
			
				
				<div class="container-fluid main">
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
				<!-- navbar ends here -->
				<div class="welcome">
					<h2>FIND YOUR SOMEONE SPECIAL</h2>	
					<div class="search-box row">
						<div class="col-md-3">
							<p>I'm looking for a</p>
							<select name="gender" id="search-gender" class="form-control" required="required">
								<option value="man">Man</option>
								<option value="woman">Woman</option>
							</select>
						</div>

						<div class="col-md-4">
							<p>aged</p>
							
								<div class="col-md-5">
									<select name="min_age" id="search_min_age" class="form-control" required="required">
										
									</select>
								</div>
								<div class="col-md-1" style="margin:5px;">
									<p >to</p>
								</div>
								<div class="col-md-5">
									<select name="max_age" id="search_max_age" class="form-control" required="required">
										
									</select>
								</div>									
						</div>

						<div class="col-md-4">
							<p>of religion</p>
							<select name="religion" id="search_religion" class="form-control" required="required">					
							</select>
						</div>

					</div>
						<div class="submit-search text-center">
							<button type="button" class="btn btn-default submit">Find Matches</button>	
						</div>
						
				</div>
				
				</div>
				<!-- section 1 completed -->

				<div class="container-fluid section-2">
					<h2 class="text-center">Featured Profiles</h2>

					<div class="heart-divider">
						<span class="grey-line"></span>
						<i class="fa fa-heart pink-heart"></i>
						<i class="fa fa-heart grey-heart"></i>
						<span class="grey-line"></span>
        			</div>

					<ul class="bxslider">
					  <li><img src="{{URL::asset('assets/images/profile/profile.jpg')}}"   title="lol" /></li>					  
					  <li><img src="{{URL::asset('assets/images/profile/profile1.jpg')}}"   title="lol" /></li>					  
					  <li><img src="{{URL::asset('assets/images/profile/profile.jpg')}}"   title="lol" /></li>					  
					  <li><img src="{{URL::asset('assets/images/profile/profile1.jpg')}}"   title="lol" /></li>					  
					  <li><img src="{{URL::asset('assets/images/profile/profile.jpg')}}"   title="lol" /></li>					  
					  <li><img src="{{URL::asset('assets/images/profile/profile1.jpg')}}"   title="lol" /></li>					  
					  <li><img src="{{URL::asset('assets/images/profile/profile.jpg')}}"   title="lol" /></li>					  
					  <li><img src="{{URL::asset('assets/images/profile/profile1.jpg')}}"   title="lol" /></li>					  
					  
					</ul>
				</div>

				<div class="section-3">
					<div class="parallax_section parallax_image_first">
					  <div class="center">
					  	<h2>Our Happy Stories :)</h2>
					  	<div class="heart-divider">
							<span class="grey-line"></span>
							<i class="fa fa-heart pink-heart"></i>
							<i class="fa fa-heart grey-heart"></i>
							<span class="grey-line"></span>
        				</div>
					  	<div class="row">
						    <div class="col-md-5">
						    	<div class="col-md-4">
						    		<img src="{{URL::asset('assets/images/profile/1.jpg')}}" class="img-responsive img-circle"  alt="Image" />
						    	</div>
						    	<div class="col-md-8">
						    		First time I saw her profile in the month of April 2015 and sent a request. That time my account was free and her also had a free account. I liked her too much. Afterwards in the month of Nov 2015,we met and here we are :)
						    	</div>
						    </div>
						    <div class="col-md-5 col-md-offset-2">
						    	<div class="col-md-4">
						    		<img src="{{URL::asset('assets/images/profile/2.jpg')}}" class="img-responsive img-circle"  alt="Image" />
						    	</div>
						    	<div class="col-md-8">
						    		First time I saw her profile in the month of April 2015 and sent a request. That time my account was free and her also had a free account. I liked her too much. Afterwards in the month of Nov 2015,we met and here we are :)
						    	</div>
						    	
						    </div>
					    </div>
					    
					    <div class="row">
						    <div class="col-md-5">
						    	<div class="col-md-4">
						    		<img src="{{URL::asset('assets/images/profile/1.jpg')}}" class="img-responsive img-circle"  alt="Image" />
						    	</div>
						    	<div class="col-md-8">
						    		First time I saw her profile in the month of April 2015 and sent a request. That time my account was free and her also had a free account. I liked her too much. Afterwards in the month of Nov 2015,we met and here we are :)
						    	</div>
						    </div>
						    <div class="col-md-5 col-md-offset-2">
						    	<div class="col-md-4">
						    		<img src="{{URL::asset('assets/images/profile/2.jpg')}}" class="img-responsive img-circle"  alt="Image" />
						    	</div>
						    	<div class="col-md-8">
						    		First time I saw her profile in the month of April 2015 and sent a request. That time my account was free and her also had a free account. I liked her too much. Afterwards in the month of Nov 2015,we met and here we are :)
						    	</div>
						    </div>
						  </div>
					  </div>

					</div>	
				</div>
				
				<div class="section-4">
					
						<div class="col-md-8 col-xs-12 text-center">
							<h2>Your Story is Waiting To Happen! </h2>		
						</div>
						<div class="col-md-4 col-xs-12 text-center">
							<a class="myButton" href="register">Let's Start</a>
						</div>
					
					
				</div>

				<!-- footer goes here -->

				<footer class="footer-distributed">

					<div class="footer-left">

						<h3>FindYourBitch</h3>
						<p class="footer-links">
							<a href="#">Home</a>
							·
							<a href="#">FAQ</a>
							·							
							<a href="#">About</a>							
							·
							<a href="#">Contact</a>
						</p>

						<p class="footer-company-name">FindyourBitch &copy; 2016</p>
					</div>

					<div class="footer-center">

						<div class="row">
							<div class="col-xs-2">
								<i class="fa fa-map-marker"></i>	
							</div>
							<div class="col-xs-10">
								<p><span>National Institute of Technology</span> Trichy, India</p>	
							</div>							
							
						</div>

						<div class="row">
							<div class="col-xs-2">
								<i class="fa fa-phone"></i>
							</div>
							<div class="col-xs-10">							
								<p>+91 81223 49363</p>
							</div>
						</div>


						<div class="row">
							<div class="col-xs-2">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="col-xs-10">
								<p><a href="mailto:support@findmybitch.com">support@findmybitch.com</a></p>
							</div>
						</div>

					</div>

					<div class="footer-right">

						<p class="footer-company-about">
							<span>About the website</span>
							ABout the website .....
							This is a website so you can find your bicth
							Go ,fuck yourself okay?
						</p>

						<div class="footer-icons">

							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-github"></i></a>

						</div>

					</div>

				</footer>
		</div>
		<!-- modals -->		
		<div class="modal fade" id="login-modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
							<h3>Sign In</h3>	
													
						<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
						<!-- <h4 class="modal-title text-center">Login</h4> -->
					</div>
					<div class="modal-body">
						<div class="row">
							{!! Form::open(array( 'action' => 'MainController@login', 'method'=>'POST')) !!}
												
								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" class="form-control" class="username" name="username" placeholder="Enter Username">
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="text" class="form-control" class="password" name="password" placeholder="Enter Password">
								</div>
								<!-- <div class="form-group">
									<label>*</label>
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
										<a href="#"><i class="fa fa-github"></i></a>								
								</div> -->
								
								<div class="row text-center submitRow">
									<!-- <button type="button" class="btn btn-default">Login</button> -->
									{!! Form::submit('Submit', array('class'=>'myButton' )) !!}									
								</div>
							{!! Form::close() !!}	
						</div>

					</div>
					<div class="modal-footer">						
						
					</div>
				</div>
			</div>
		</div>
		<!-- jQuery -->
		
		<!-- Bootstrap JavaScript -->
		<script type="text/javascript" src="{{URL::asset('assets/js/bootstrap.js')}}"></script>
		<!-- slider plugin -->
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.easing.1.3.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.fitvids.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.bxslider.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/app.js')}}"></script>		
		
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		
	</body>
</html>