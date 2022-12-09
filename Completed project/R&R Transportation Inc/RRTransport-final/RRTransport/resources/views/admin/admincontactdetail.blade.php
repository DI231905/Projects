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

    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li  style="color:red;">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif 
<div class="main-form">
    <div class="form">

    

        <h2>ADMIN CONTACT DETAIL</h2>
         
           @if ($message = Session::get('error'))
           <div class="alert alert-danger alert-block" >
<!--     <input type="text" class="close" data-dismiss="alert"></input> -->
           <strong style=" padding-top : 5px !important; display: inline-block;">{{ $message }}</strong>
           </div>
           @endif

        <form method="POST" action="{{ url('admin/storeadmincontact') }}" class="form1">
              @csrf

               <div class="email">
              
                <div class="text">
                     <input type="text" placeholder="Name" name="name" value="" required autocomplete="off">
                </div>  
            </div>
            <div class="email">
               
                <div class="text">
                     <input type="text" placeholder="Email" name="email" value="" required autocomplete="off">
                </div>  
            </div>
            <div class="email">
              
                <div class="text">
                     <input type="text" placeholder="Enter your mobile no" name="mobileno" value="" required autocomplete="off">
                </div> 
            </div>
            <div class="email">
               
                <div class="text">
                     <textarea placeholder="Enter here... " name="address" value="address"></textarea>
                </div> 
            </div>
            
            <div class="forgot">
                <a href="{{url('admin/home')}}">Back to Home ?</a>
            </div>
            <button class="btn" name="submit">submit</button>
        </form>
    </div>
</div>
<style type="text/css">
    .text textarea{
    width: 100%;
    padding: 14px 20px;
    border: 1px solid black;
    border-radius: 5px;
    background-color: white;
    box-sizing: border-box;
}
.email textarea:focus{
    outline: none;
}
.text input{
    border: 1px solid black;
    border-radius: 5px;
}
</style>
</body>
</html>