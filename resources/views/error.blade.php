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
		<div class="container main">
			<div class="row">
		    <h4>{!! isset($message) ? $message : "We encountered an unexpected error. Please retry." !!}</h4>
		      
		      <input action="action" type="button" value="Click here to go back" class="btn teal" onclick="history.go(-1);" />
			</div>
		</div>  
		<!-- Bootstrap JavaScript -->
		<script type="text/javascript" src="{{URL::asset('assets/js/bootstrap.js')}}"></script>
		<!-- slider plugin -->
		
		
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		
	</body>
</html>