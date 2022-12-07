<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>


	<link rel="stylesheet" type="text/css" href="/css/otp.css">
	 <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
   <style>
   	
   	.body{
	margin: 0;
	font-family: 'Open Sans', sans-serif;
	background-color: #8080801a;
}
.co_part1{
	width: 40%;
	padding: 30px;
	margin: 100px auto;
	background-color: white;
	box-shadow: 0 14px 28px rgb(0 0 0 / 25%), 0 10px 10px rgb(0 0 0 / 22%);
}
.co_part1 h1{
	font-size: 30px;
	text-align: center;
	margin-bottom: 25px;
	text-transform: uppercase;
}


.upload{
	width: 35%;
	margin: 40px auto 20px;
	padding: 10px 18px;
	
	color: white; 
	font-size: 17px;
	border-radius: 3px;
	font-weight: 500;
}
.btn0{
	
}
.btn0 a{
	color: white;
	text-decoration: none; 
}
.btn0:hover{
	background-color: white;
	color: #e35f14; 
}
.btn0 a:hover{
	color: #e35f14; 
	text-decoration: none; 
}
.btn0:focus{
	outline: none;
}

@media only screen and (min-width: 1024px) and (max-width: 1260px){
	.co_part1 {
        width: 55%;
    }
}

@media only screen and (min-width: 768px) and (max-width: 1023px){
	.co_part1 {
        width: 55%;
    }
	.upload {
        width: 49%;
    }
}

@media only screen and (max-width: 767px){
	.co_part1 {
        width: 55%;
    }
	.upload {
        width: 95%;
    }
	.co_part1 h1 {
        font-size: 30px!important;
    }
    .co_part1 p {
        font-size: 20px!important;
        line-height: 23px!important;
        letter-spacing: 0.5px!important;
    }
}


   </style>

</head>
<body class="body">
	<div class="co_part1">
	    
	     <img src={{$img_url}} />
	      
		<h1 style="font-size: 25px; color:#000;">Password Reset</h1>
		<p style="font-size:16px; color:#000 " > You're receiving this e-mail because you requested a password reset for your <b style="color:#d53537; font-size:17px"> Mangala Diagnostic Centre </b>account.</p>
   
       <p style="font-size:15px;" > OTP for RESET PASSWORD is: <b p style="font-size:17px; color:#000; " > {{$token}} </b></p>

		<div class="upload">
<button style="background-color:#d53537 !important;color:white !important;border: unset !important;padding:9px 13px;" class="btn0"><a style="color:#000 !important;text-decoration: none !important;" href="{{url('admin/resetpasswordview')}}/{{$id}}"><b style="color: white">Reset My Password</b></a></button>
        </div>
        <p>If you did not forgot your password you can safely ignore this email.</p>
	</div>

</body>
</html> 

