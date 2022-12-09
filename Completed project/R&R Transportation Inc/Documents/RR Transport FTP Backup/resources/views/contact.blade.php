<!DOCTYPE html>
<html>
<head>
    <title>R&R TRANSPORTATION</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="image/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="body"  onload="initMap()">
   <div class="co_header" id="dynamic">
        <div class="container1">
            <div class="row row1 desk-head">
                <div class="col-lg-2 col-md-3 col-5">
                    <div class="logo">
                        <a href="{{url('/')}}"><img src="image/logo.jpg"></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9 col-7 con-menu">
                    <div class="item1">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <ul class="contact">
                                    <li class="call-link">
                                        <a href="mailto:{{$email}}">
                                        <i class="fas fa-envelope-open"></i><span>{{$email}}</span></a>
                                    </li>
                                    <li class="call-link">
                                        <a href="tel:{{$mobileno}}"><i class="fas fa-phone-alt"></i><span>{{$mobileno}}</span></a>
                                    </li>
                                    <li class="inq"><a href="{{url('/inquiry')}}">Inquiry Form</a></li>
                                    <li class="quote_btn">
                                        <div class="btn_container">
                                            <a class="quote_id" href="{{url('/')}}">
                                                <div class="btn-top"><span>Get Quote</span></div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="inq">
                                        <a href="image/Drivers_Employment_Application_R&R new82021.pdf" target="_blank">Emp_form</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="menu">
                                    <nav class="shift">
                                        <ul>
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li><a href="{{url('/services')}}">Services</a></li>
                                            <li><a href="{{url('/career')}}">Career</a></li>
                                            <li><a href="{{url('/team')}}">Our Team</a></li>
                                            <li><a href="{{url('/about')}}">About Us</a></li>
                                            <li><a href="{{url('/contact')}}">Contact Us</a></li>
                                            <li><a href="{{url('/gallary')}}">Gallery</a></li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                                <div class="co_mobile-menu">
                                    <div class="quote_btn quote_btn1">
                                        <div class="btn_container">
                                            <a class="quote_id" href="{{url('/')}}">
                                                <div class="btn-top"><span>Get Quote</span></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mobile-menu">
                                        <div id="mySidepanel-1" class="sidepanel">
                                            <div class="m_menu">
                                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()"><i class="far fa-times"></i></a>    
                                                <a class="link" href="{{url('/')}}">Home</a>
                                                <a class="link" href="{{url('/services')}}">Services</a>
                                                <a class="link" href="{{url('/career')}}">Career</a>
                                                <a class="link" href="{{url('/team')}}">Our Team</a>
                                                <a class="link" href="{{url('/about')}}">About Us</a>
                                                <a class="link" href="{{url('/contact')}}">Contact Us</a>
                                                <a class="link" href="{{url('/gallary')}}">Gallery</a>
                                            </div>
                                        </div>
                                        <button class="openbtn" onclick="openNav1()"><i class="far fa-bars"></i></button> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="mobile-head">
                <ul class="contact1">
                        <li>
                            <a href="mailto:{{$email}}">
                            <i class="fas fa-envelope-open"></i></a>
                        </li>
                        <li>
                            <a href="tel:{{$mobileno}}"><i class="fas fa-phone-alt"></i></a>
                        </li>
                        <li class="inq">
                            <a href="{{url('/inquiry')}}">Inquiry Form</a>
                        </li>
                        <li class="inq">
                            <a href="image/Drivers_Employment_Application_R&R new82021.pdf" target="_blank">Emp_form</a>
                        </li>
                </ul>
                <div class="row row-pd">
                    <div class="col-5">
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="image/logo.jpg"></a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="co_mobile-menu">
                            <div class="quote_btn quote_btn1">
                                <div class="btn_container">
                                    <a class="quote_id" href="{{url('/')}}">
                                        <div class="btn-top"><span>Get Quote</span></div>
                                    </a>
                                </div>
                            </div>
                            <div class="mobile-menu">
                                <div id="mySidepanel" class="sidepanel">
                                    <div class="m_menu">
                                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="far fa-times"></i></a>    
                                        <a class="link" href="{{url('/')}}">Home</a>
                                        <a class="link" href="{{url('/services')}}">Services</a>
                                        <a class="link" href="{{url('/career')}}">Career</a>
                                        <a class="link" href="{{url('/team')}}">Our Team</a>
                                        <a class="link" href="{{url('/about')}}">About Us</a>
                                        <a class="link" href="{{url('/contact')}}">Contact Us</a>
                                        <a class="link" href="{{url('/gallary')}}">Gallery</a>
                                    </div>
                                </div>
                                <button class="openbtn" onclick="openNav()"><i class="far fa-bars"></i></button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="co_part-2">
        <div class="fix-part-2">
            @foreach($allbanner as $a)
            @if($a->name == 'Contact Us')
            <div class="img1">
                <img src="uploads/{{$a->image}}">
            </div>
           
            <div class="about">
                <div class="container">
                    <h2>Contact</h2>
                    <ul type="none">
                         <li><a href="{{url('/')}}">Home</a></li>
                        <li><span class="fa fa-angle-right"></span></li>
                        <li class="bt">{{$a->page_name}}</li>
                    </ul>
                </div>
            </div>
             @endif
            @endforeach
        </div>
    </div>
    <div class="co_contact">
        <div class="container">
            <div class="row fix-contact">
                <div class="col-lg-6 col-md-6 col-12 set-contact">
                    @if ($message = Session::get('error'))
            <div  id="hideDiv1" class="alert alert-success alert-block" >
                <!--     <input type="text" class="close" data-dismiss="alert"></input> -->
                <strong style="padding-top : 0px !important; display: inline-block;">{{ $message }}</strong>
             </div>
           @endif

                    <h2>Get in touch</h2>
                     <form  method="POST" action="{{url('/contactusfrom')}}" class="form1 row"  >
                         @csrf
                        <div class="col-lg-6">
                            <div class="part-1">
                                <input type="text" placeholder="Name" name="name" id="name" value="" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="part-1">
                                <input type="email" placeholder="Email" name="email" id="email" value=""required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="part-1">
                                <input type="text" placeholder="Subject" name="subject" id="subject" value=""required="email" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="part-1">
                                <textarea placeholder="Your Message" name="description" id="description" rows="7" 
                                cols="30" value="" required autocomplete="off"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="sub2">
                                <input type="submit"  value="submit" >
                            </div>
                        </div>
                        
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-12 set-contact1">
                    <h2>Contact us</h2>
                    <div class="co_info row">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-text">
                            <p><strong>Address:</strong>{!! $address !!}</p>
                        </div>
                    </div>
                    <div class="co_info row row1">
                        <div class="info-icon">
                           <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="info-text">
                            <p><strong>Contact Number:</strong>{{$mobileno}}</p>
                        </div>
                    </div>
                    <div class="co_info row row1">
                        <div class="info-icon">
                           <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="info-text">
                            <p><strong>Fax Number:</strong>{{$fax_no}}</p>
                        </div>
                    </div>
                    <div class="co_info row row1">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-text info-text1">
                            <p><strong>Email Us:</strong> {{$email}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map1" id="map" >

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3226.111396959376!2d-79.87814508538357!3d36.04198711771083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88531af866f48a1d%3A0x3000c84ff6ab5382!2sR%20%26%20R%20Transportation!5e0!3m2!1sen!2sin!4v1629779481186!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    <div class="co_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer">
                        <h2 class="footer-title">About Us</h2>
                          @foreach($footer_about as $fa)
                        <p>{!! $fa->description !!}</p>
                        @endforeach
                        <ul class="social-link">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer use">
                        <h2 class="footer-title">Useful Links</h2>
                        <a href="{{url('/about')}}">About Us</a>
                        <a href="{{url('/services')}}">Our Service</a>
                        <a href="{{url('/gallary')}}">Gallery</a>
                        <a href="{{url('/contact')}}">Contact Us</a>
                        <a href="{{url('admin/home')}}">Admin Home</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer">
                        <h2 class="footer-title">Contact Us</h2>
                        <ul class="con-home">
                            <li><i class="fa fa-home" aria-hidden="true"></i>
                                <p>{!! $address  !!}</p>
                            </li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                <p><a href="mailto:{{$email}}">{{$email}}</a></p>    
                            </li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>
                                <p><a href="tel:{{$mobileno}}">{{$mobileno}}</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer">
                        <h2 class="footer-title">Newsletter</h2>
                        <p>Get the latest updates and offers.</p>
                        <form class="form2">
                            <input type="text" placeholder="Enter your email here" name="email" value="" autocomplete="off">
                            <div class="button submit"><input type="SUBMIT" value="SUBMIT"></div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>
     <div class="copy">
        <a class="up-btn" href="#">
            <span class="fa fa-angle-double-up"></span>
        </a>
    </div>

  <!--   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAI9I-jFq3mOP0sY5AfcfN78BeVJ05mI2g"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <script type="text/javascript">





          function openNav() {
            document.getElementById("mySidepanel").style.width = "100%";
        }
        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }
        
        function openNav1() {
            document.getElementById("mySidepanel-1").style.width = "100%";
        }
        function closeNav1() {
            document.getElementById("mySidepanel-1").style.width = "0";
        }
        $(window).scroll(function(){
            if ($(this).scrollTop() > 150) {
                $('#dynamic').addClass('newClass');
            } else {
                $('#dynamic').removeClass('newClass');
            }
        });

         var btn = $('.up-btn');
        $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show-Z');  
            }
            else {
                btn.removeClass('show-Z');
            }
        });
        btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop:0}, '300');
        });


       $(function() {
        setTimeout(function() { $("#hideDiv1").fadeOut(1500); }, 3000)

             });
     
   $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

    $("#submit").click(function(e){

      var name = $('#name').val();
      var email = $('#email').val();

      var subject = $('#subject').val();
      var description = $('#description').val();
  if(name!="" && email!="" && subject!="" && description!=""){

    var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i

    if(!pattern.test(email))
   {
 
    }else{


      e.preventDefault();

        $.ajax({
           url:'/contactusfrom',
           method:'POST',
           data:{
                 name,
                 email,
                 subject,
                 description
                },


   success: function(dataResult){
                  console.log(dataResult);
                  var dataResult = JSON.parse(dataResult);
                  if(dataResult.statusCode==200){

                 
               $("#message").append("<b>your message submit sucessfully!!!</b>");
                   $('#message').delay(3000).fadeOut(3000);           
                  }
                  else {
                     alert("Error occured !");
                  }


                    $( '.form1' ).each(function(){
                          this.reset();
                        });    
                  
              }
          



         /*  success:function(response){
              if(response.success){
                  alert(response.message) //Message come from controller
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }*/
        });

    }
      }else{

      

      }
    });

 </script>
 <style type="text/css">
     

.alert-success {
    color: black!important;
   background-color: transparent !important;
   border-color:transparent !important; 
}
 </style>
 </body>
</html>


