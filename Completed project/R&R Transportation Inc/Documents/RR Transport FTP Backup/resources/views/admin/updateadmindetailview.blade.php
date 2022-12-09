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
            <h2>  UPDATE ADMIN CONTACT DETAIL</h2>
            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif

            <form method="POST" action="{{url('admin/storeadmindetail')}}/{{$id}}" class="form1">
              @csrf

                <div class="email">
                    <div class="icon">
                       <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                         <input type="text" placeholder="Name" name="name" value="{{$name}}" required>
                    </div>  
                </div>
                <div class="email">
                    <div class="icon">
                       <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                         <input type="text" placeholder="Email" name="email" value="{{$email}}" required>
                    </div>  
                </div>
                <div class="email">
                    <div class="icon">
                       <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                         <input type="text" placeholder="Enter your mobile no" name="mobileno" value="{{$mobileno}}" required>
                    </div> 
                </div>
                 <div class="email">
                    <div class="icon">
                       <i class="fa fa-fax" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                         <input type="text" placeholder="Enter your fax no" name="faxno" value="{{$fax_no}}" >
                    </div> 
                </div>
                 <div class="email">
                    <div class="icon">
                       <i class="fas fa-globe" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                         <input type="text" placeholder="Enter your website" name="website" value="{{$website}}" >
                    </div> 
                </div>
                <div class="email">
                    <div class="icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                         <textarea placeholder="Enter here... " name="address" value="{{$address}}"required>{{$address}}</textarea>
                    </div> 
                </div>
                 <div class="email">
                    <div class="icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                         <textarea placeholder="Enter here area... " name="area" value="{{$area}}"required>{{$area}}</textarea>
                    </div> 
                </div>
                
                
                <div class="email">
                    <div class="icon">
                       <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                         <input type="text" placeholder="Enter your facebook link" name="fblink" value="{{$fblink}}" >
                    </div> 
                </div>
                <div class="email">
                    <div class="icon">
                       <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                         <input type="text" placeholder="Enter your Instagram link" name="instalink" value="{{$instalink}}" >
                    </div> 
                </div>
                <div class="email">
                    <div class="icon">
                       <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                         <input type="text" placeholder="Enter your Twitter link" name="twitterlink" value="{{$twitterlink}}">
                    </div> 
                </div>

                <div class="forgot">
                    <a href="{{url('admin/home')}}">Back to Home ?</a>
                </div>
                    <button class="btn" name="submit">submit</button>
            </form>
        </div>
    </div>
</body>
</html>