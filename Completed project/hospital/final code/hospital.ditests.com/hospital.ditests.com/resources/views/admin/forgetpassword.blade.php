<!DOCTYPE html>
<html>
<head>
	<title>Mangala Diagnostic Centre</title>
	<link rel="stylesheet" type="text/css" href="/css/admin.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="icon" type="image/png" href="/image/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="body">
<div class="main-form">
	<div class="form">
	    <h2>RESET LINK</h2>
  
        @if(session()->has('error'))
                   <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif

	    <form  class="form2"  method="POST" action="{{ route('resetpasswordlink')}}">
	    	  @csrf
		    <div class="email">
		    	<div class="icon">
		    		<span class="fa fa-envelope"></span>
		    	</div>
		    	<div class="text">
		    		 <input type="text" placeholder="Email" name="email" value="" required >
		    	</div>     
		    </div>
		    <div class="get">
		        <button class="btn">Reset Link</button>
		        <p>Go Back To <a href="{{url('admin/login')}}">login Here</a></p>
		    </div>
		   
	    </form>
    </div>
</div>

</body>
</html>