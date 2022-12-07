@extends('layouts.app')

@section('content') 

<div class="co-banner1">
          @foreach($allbanner as $a)
            @if($a->name == 'Contact Us')
        <img src="uploads/{{$a->image}}">
        <div class="container_11">
            <h1>{{$a->name}}</h1>
            <ul class="breadcrumb1">
                <li><a href="{{url('/')}}"><i class="far fa-home"></i> Home</a></li>
                <li>/</li>
                <li>{{$a->name}}</li>
            </ul>
        </div>
          @endif
         @endforeach
    </div>
      @if ($message = Session::get('error'))
            <div  id="hideDiv" class="alert alert-success alert-block" >
                <!--     <input type="text" class="close" data-dismiss="alert"></input> -->
                <strong style="padding-top : 5px !important; display: inline-block;">{{ $message }}</strong>
             </div>
           @endif
    <div class="contact">
        <div class="container">
            <div class="row">                     
                <div class="col-lg-4 col-md-4 bottom_div">
                    <div class="contat_main">
                        <div class="round_img">
                            <a href="#"><i class="fas fa-phone-alt"></i></a>
                        </div>
                        <h3>Contact</h3>
                        @foreach($mobile_number as $m)
                        <a href="{{$m->mobileno}}">{{$m->mobileno}}</a><br>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 bottom_div">
                    <div class="contat_main ">
                    	 <div class="round_img">
                              <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                         </div>                            
                         <h3>Address</h3>
                         <p>{{$address}}</p>
                    </div>
                 </div>
                 <div class="col-lg-4 col-md-4 bottom_div">
                    <div class="contat_main">
                    	 <div class="round_img">
                              <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                         </div>                             
                         <h3>Email</h3>
                         @foreach($email as $e)
                         <a href="{{$e->email}}">{{$e->email}}</a><br>
                         @endforeach
                    </div>
                 </div>
            </div>
        </div>


    </div>
    <div class="drop-area">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 col-md-7 p-0">
    				<div class="drop-item drop-img">
    					<div class="drop-left">
    						<h2>Get In Touch</h2>
    						<form id="contactForm" method="POST"  action="{{url('/getcontactus')}}" >
                               @csrf
    							<div class="row">
	    							<div class="col-lg-6 col-md-6">
	    								<div class="form-group">
	    									<input type="text" name="name" placeholder="Your Name" class="form-control" value="" required autocomplete="off" >
	    								</div>
	    							</div>
	    							<div class="col-lg-6 col-md-6">
	    								<div class="form-group">
	    									<input type="text" name="email" placeholder="Your email" class="form-control" value=""required autocomplete="off">
	    								</div>
	    							</div>
	    							<div class="col-lg-6 col-md-6">
	    								<div class="form-group">
	    									<input type="text" name="mobileno" placeholder="Your phone number" class="form-control" value="" required autocomplete="off">
	    								</div>
	    							</div>
	    							<div class="col-lg-6 col-md-6">
	    								<div class="form-group">
	    									<input type="text" name="subject" placeholder="Your Subject" class="form-control" value="" required autocomplete="off">
	    								</div>
	    							</div>
	    							<div class="col-lg-12 col-md-12">
	    								<div class="form-group">
	    									<textarea name="description" cols="30" rows="5" placeholder="Write your message..." class="form-control" required autocomplete="off">	
	    									</textarea>
	    								</div>
	    							</div>
	    							<div class="col-lg-12 col-sm-12">
	    								<button type="submit" vlaue="submit" class="drop-btn" id="sendmessage">Send Message</button>
	    							</div>
    						    </div>
    					    </form>
    				    </div>
    			    </div>
    		    </div>
    		    <div class="col-lg-6 col-md-5 p-0">
    			    <div class="speciality-item speciality-right speciality-right-two speciality-right-three">
    				    <img src="image/doctor15.jpg" alt="Contact">
    				    <div class="speciality-emergency">
    					    <div class="speciality-icon">
    						    <i class="fas fa-phone-alt"></i>
    					    </div>
    					    <h3>Emergency Call</h3>
    					    <p>{{$mobileno1}}</p>
    				    </div>
    			    </div>
    		    </div>
    	    </div>
        </div>
    </div>
    <div class="map-area">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.7182289266507!2d72.84667211531345!3d19.120013305555208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c82cde7ca5fb%3A0xcf92342825d6b61c!2sMangala%20Diagnostic%20Centre!5e0!3m2!1sen!2sin!4v1638021078434!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <style type="text/css">
        
        .alert-success {
  
    position: fixed;
  
    margin-top: 16px;
  
    left: 27%;
    width: 35%;
    z-index: 999999999;
    text-align: center;

}
    </style>

   
   


@endsection