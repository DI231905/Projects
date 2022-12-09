<!DOCTYPE html>
<html>
<head>
    <title>R&R TRANSPORTATION</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css">
    <link rel="icon" href="image/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body class="body">
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
	<div >
  @yield('content')
</div>
 <div class="co_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 f-bottom">
                    <div class="footer">
                        <h2 class="footer-title">About Us</h2>
                          @foreach($footer_about as $fa)
                        <p>{!! $fa->description !!}</p>
                        @endforeach
                        <ul class="social-link">
                           <li><a href="{{$fblink}}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{$twitterlink}}"><i class="fab fa-twitter"></i></a></li>
                           
                            <li><a href="{{$instalink}}"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 f-bottom">
                    <div class="footer use">
                        <h2 class="footer-title">Useful Links</h2>
                        <a href="{{url('/about')}}">About Us</a>
                        <a href="{{url('/services')}}">Our Service</a>
                        <a href="{{url('/gallary')}}">Gallery</a>
                        <a href="{{url('/contact')}}">Contact Us</a>
                        <a href="{{url('admin/home')}}">Admin Home</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 f-bottom">
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
                <div class="col-lg-3 col-md-6 f-bottom">
                    <div class="footer">
                        <h2 class="footer-title">Newsletter</h2>
                        <p>Get latest updates and offers.</p>
                        <form class="form2">
                            <input type="text" placeholder="Enter your email here" name="email" value="" autocomplete="off">
                            <div class="button submit">
                                <input type="SUBMIT" value="SUBMIT">
                            </div>
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

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
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


        $(".apple-tabs").tabs({ 
            show: { effect: "slide", direction: "left", duration: 200, easing: "easeOutBack" } ,
            hide: { effect: "slide", direction: "right", duration: 200, easing: "easeInQuad" } 
        });
    </script>


</body>
</html>