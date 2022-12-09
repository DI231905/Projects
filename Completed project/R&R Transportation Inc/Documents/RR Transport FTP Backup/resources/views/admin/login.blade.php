<!DOCTYPE html>
<html>
<head>
	<title>R&R Transportation Inc.</title>
	<link rel="stylesheet" type="text/css" href="/css/admin.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="icon" type="image/png" href="/image/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="body">
<div class="main-form">
	<div class="form">
	    <h2>ADMIN LOGIN</h2>
         
           @if ($message = Session::get('error'))
           <div class="alert alert-danger alert-block" >
<!--     <input type="text" class="close" data-dismiss="alert"></input> -->
           <strong style=" padding-top : 5px !important; display: inline-block;">{{ $message }}</strong>
           </div>
           @endif

	    <form method="POST" action="{{ route('login') }}" class="form1">
	    	  @csrf
		    <div class="email">
		    	<div class="icon">
		    		<span class="fa fa-envelope"></span>
		    	</div>
		    	<div class="text">
		    		 <input type="text" placeholder="Email" name="email" value="" required autocomplete="off" >
		    	</div>  
		    </div>
		    <div class="email">
		    	<div class="icon">
		    		<span class="fa fa-lock"></span>
		    	</div>
		    	<div class="text">
		    		 <input type="Password" placeholder="Password" name="password" value="" required autocomplete="off">
		    	</div> 
		    </div>
		    <div class="forgot">
		    	<a href="{{ route('forgetpasswordview') }}">Forgot Password ?</a>
		    </div>
		    <button class="btn">Log in</button>
	    </form>
    </div>
</div> 

</body>
</html>