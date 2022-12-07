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
	    <h2>CHANGE PASSWORD</h2>

   @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li  style="color:red;">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif 
	    
         
           @if ($message = Session::get('error'))
           <div class="alert alert-danger alert-block" >
<!--     <input type="text" class="close" data-dismiss="alert"></input> -->
           <strong style=" padding-top : 5px !important; display: inline-block;">{{ $message }}</strong>
           </div>
           @endif

	    <form method="POST" action="{{url('admin/updatepassword')}}/{{Auth::id()}}" class="form1">
	    	  {{ csrf_field() }} 
		    <div class="email">
		    	<div class="icon">
		    		<span class="fa fa-lock"></span>
		    	</div>
		    	<div class="text">
		    		 <input type="password" placeholder="Enter your old password" name="oldpassword" value="" required>
		    	</div>  
		    </div>
		    <div class="email">
		    	<div class="icon">
		    		<span class="fa fa-lock"></span>
		    	</div>
		    	<div class="text">
		    		 <input type="password" placeholder="Enter your new password" id="passsword" name="newpassword" value="" required>

		    	</div> 
		    </div>
      <div class="forgot" style="color: #003a6c; font-size: 15px;font-family: 'Open Sans', sans-serif;">
		   <input type="checkbox" onclick="myFunction()"><b>Show Password</b></input>
		    </div>


		    <button class="btn">Submit</button>
		    <a href="{{url('admin/home')}}"><b>Back to home?</b></a>
	    </form>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

     <script>
function myFunction() {
  var x = document.getElementById("passsword");
  if (x.type === "password") {
    x.type = "text";
    } else {
    x.type = "password";
  }
}
</script>

</div>

</body>
</html>