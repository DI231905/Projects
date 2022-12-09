<!DOCTYPE html>
<html>
<head>
    <title>R&R TRANSPORTATION</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/home.css">
     <link rel="stylesheet" type="text/css" href="css/home-1.css">
    
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
   <!-- <div class="co_header" id="dynamic">
        <div class="container1">
            <div class="row row1 desk-head">
                <div class="col-lg-2 col-md-2 col-5">
                    <div class="logo">
                        <a href="{{url('/')}}"><img src="image/logo.jpg"></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-7 con-menu">
                    <div class="item1">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <ul class="contact">
                                    <li>
                                        <a href="mailto:{{$email}}">
                                        <i class="fas fa-envelope-open"></i><span class="span-1">{{$email}}</span></a>
                                    </li>
                                    <li>
                                        <a href="tel:{{$mobileno}}"><i class="fas fa-phone-alt"></i><span class="span-1">{{$mobileno}}</span></a>
                                    </li>
                                    <li class="inq">
                                        <a href="{{url('/inquiry')}}">Inquiry Form</a>
                                    </li>
                                    <li class="quote_btn">
                                        <div class="btn_container">
                                            <a class="quote_id" href="#get_quote">
                                                <div class="btn-top"><span>Get Quote</span></div>
                                            </a>
                                        </div>
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
                                            <li><a href="{{url('/contact')}}">Contact Us</a></li><!-- 
                                            <li><a href="RR_enquiry.html">Inquiry Form</a></li> 
                                            <li><a href="{{url('/gallary')}}">Gallery</a></li>
                                            <!-- <li class="quote_btn">
                                                <div class="btn_container">
                                                    <a class="quote_id" href="#get_quote">
                                                        <div class="btn-top"><span>Get Quote</span></div>
                                                    </a>
                                                </div>
                                            </li> 
                                        </ul>
                                    </nav>
                                </div>
                                <div class="co_mobile-menu">
                                    <!-- <div class="quote_btn quote_btn1">
                                        <div class="btn_container">
                                            <a class="quote_id" href="#get_quote">
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
                                                <a class="link" href="{{url('/contact')}}">Contact Us</a><!-- 
                                                <a class="link" href="RR_enquiry.html">Inquiry Form</a> -
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
                      <!--  <li class="quote_btn">
                            <div class="btn_container">
                                <a class="quote_id" href="#get_quote">
                                    <div class="btn-top"><span>Get Quote</span></div>
                                </a>
                            </div>
                        </li>-
                </ul>
                <div class="row row-pd">
                    <div class="col-6">
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="image/logo.jpg"></a>
                        </div>
                    </div>
                     <div class="col-6 row-z">
                       <div class="quote_btn quote_btn1">
                                <div class="btn_container">
                                    <a class="quote_id" href="#get_quote">
                                        <div class="btn-top"><span>Get Quote</span></div>
                                    </a>
                                </div>
                            </div>
                        <div class="co_mobile-menu">
                            <!-- <div class="quote_btn quote_btn1">
                                <div class="btn_container">
                                    <a class="quote_id" href="#get_quote">
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
                                        <a class="link" href="{{url('/contact')}}">Contact Us</a><!-- 
                                        <a class="link" href="RR_enquiry.html">Inquiry Form</a> 
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
    </div> -->
  <!-- <div class="co_banner">
        <div id="demo" class="carousel slide" data-ride="carousel">

            
              <div class="carousel-inner">
                @foreach($banner as $b)
                <div class="carousel-item active">
                    <div class="banner-img">
                        <img src="uploads/{{$b->image}}" alt="Los Angeles">
                    </div>
                    <div class="banner-content"></div>
                    <div class="banner-info1">
                        <div class="banner-info">
                            <h6>{{$b->title}}</h6>

                             @foreach($maintitle as $m)

                            @if($b->id == $m->banner_id)

                            <h1>{{$m->more_maintitle}}</h1>
                            @endif
                             
                               @endforeach
                            <button class="btn2"><a href="{{url('/about')}}">Read More</a></button>
                        </div>
                    </div>
                </div>
            
                @endforeach
        </div>

    </div> -->
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
                                            <a class="quote_id" href="#get_quote">
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
                                            <a class="quote_id" href="#get_quote">
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
                                    <a class="quote_id" href="#get_quote">
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
    <div class="co_banner">
        <div class="banner-slider">

            @foreach($banner as $b)
            <div>
                <div class="banner-section">
                    <div class="banner-img">
                        <img src="uploads/{{$b->image}}" alt="Los Angeles">
                    </div>
                    <div class="banner-content"></div>
                    <div class="banner-info1">
                        <div class="banner-info">
                            <h6>{{$b->title}}</h6>
                             @foreach($maintitle as $m)

                            @if($b->id == $m->banner_id)

                            <h1>{{$m->more_maintitle}}</h1>
                            @endif
                             
                               @endforeach
                            <button class="btn2"><a href="{{url('/')}}">Read More</a></button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
    
 
    <div class="co_service1">
        
          <div id="pageMessages"></div>
        <div class="container">
            <div class="row">
                @foreach($features as $f)
                <div class="col-lg-4 col-md-6 flex-1">
                    <div class="service1">
                        <div class="feature_box equal-height">
                            <span class="service1-icon"><i class="{{$f->icon}}"></i></span>
                            <div class="description">
                                <h4>{{$f->name}}</h4>
                               <span data-collapse-limit="120"> {{$f->description}}</span>
                               <!--  <p data-collapse-limit="120">Finding secure transportation services can be a challenge. R&R Transportation makes it easy to receive safe and timely transport. With over 30 years of experience, we deliver the flexibility, service, and security that you can always expect from R&R Transportation, Inc.</p> -->
                            </div>
                        </div>
                    </div>
                </div>
               <!--  <div class="col-lg-4 col-md-6 flex-1">
                    <div class="service1">
                        <div class="feature_box equal-height">
                            <span class="service1-icon"><i class="fas fa-money-bill-alt"></i></span>
                            <div class="description">
                                <h4>Best Price Guarantee!</h4>
                                <p data-collapse-limit="120">R&R Transportation provides you best Price Guarantee means that you can be sure of getting excellent service at the best rate.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 flex-1">
                    <div class="service1">
                        <div class="feature_box equal-height">
                            <span class="service1-icon"><i class="fas fa-history"></i></span>
                            <div class="description">
                                <h4>24/7 Business Support</h4>
                                <p data-collapse-limit="120">R&R transportation provides all customers access to our 24x7 Help Desk Services managed by a team of trained experts on hand 24 hours a day, 7 days a week.
                                24 hour, 7 days a week dispatch operation at R&R Transportation, Inc. won't let you down after hours. Get up-to-the-minute information on the status of your shipment 24 hours a day, 7 days a week. We are always here to serve you.
                                Our investment in technology provides customized technology that will improve your experience. Seamless In-cab/smartphone connectivity to keep drivers connected while maintaining regulatory compliance.</p>
                            </div>
                        </div>
                    </div>
                </div> -->

                @endforeach
            </div>
        </div>
    </div>
    <div class="co_about">
        <div class="container">
            @foreach($history as $h)
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-img">
                        <img src="uploads/{{$h->image}}" alt="">
                        <div class="about-icon">
                            <img src="image/container-truck.png">
                            <div class="shape shape1"></div>
                            <div class="shape shape2"></div>
                            <div class="shape shape3"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-info">
                        <h1>{{$h->title}}</h1>
                        <p>{!!$h->description!!}</p>
                        <div class="button_container">
                            <a href="{{url('/about')}}">
                                <div class="btn-1"><span>Learn More</span></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="co_service">
        <div class="container">
            <div class="title-head">
                <h1 class="title">Our Services</h1>
                <p>R&R Transportation, Inc. - Our LLTL trucking shipments service North Carolina zip codes ranging from 270–274 with same-day, next-day, and expedited freight shipping.</p>
            </div>
            <div class="main2 row2">
                 <div class="slider slider-nav">
                  @foreach($services as $s)
                    <div>
                    <div class="service">
                        <div class="service-img">
                            <img src="uploads/{{$s->image}}">
                        </div>
                        <div class="service-main service-x">
                            <div class="service-font">
                                <i class="fad fa-truck"></i>
                            </div>
                            <div class="service-name">
                                <h2>{{$s->title}}</h2>
                            </div>
                        </div>
                        <div class="service-main service-main1">
                            <div class="service-font">
                                <i class="fad fa-truck"></i>
                            </div>
                            <div class="service-name">
                                <h2>{{$s->title}}</h2>
                                <p>{{$s->short_desc}} </p>
                                <a href="{{url('/services')}}">Read More <i class="far fa-angle-double-right"></i></a>
                            </div>
                        </div>  
                    </div>
                </div>
                  @endforeach
            </div>
        </div>
           <!--  <div class="main2 row2">
                <div class="slider slider-nav">
                    <div>
                        <div class="service">
                            <div class="service-img">
                                <img src="image/service-1.jpg">
                            </div>
                            <div class="service-main service-x">
                                <div class="service-font">
                                    <i class="fad fa-truck"></i>
                                </div>
                                <div class="service-name">
                                    <h2>Liftgate pickup and delivery</h2>
                                </div>
                            </div>
                            <div class="service-main service-main1">
                                <div class="service-font">
                                    <i class="fad fa-truck"></i>
                                </div>
                                <div class="service-name">
                                    <h2>Liftgate pickup and delivery</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident possimus quae</p>
                                    <a href="RR_service.html">Read More <i class="far fa-angle-double-right"></i></a>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div>
                        <div class="service">
                            <div class="service-img">
                                <img src="image/service-2.jpg">
                            </div>
                            <div class="service-main service-x">
                                <div class="service-font">
                                    <i class="fad fa-truck"></i>
                                </div>
                                <div class="service-name">
                                    <h2>Residential pickup and delivery</h2>
                                </div>
                            </div>
                            <div class="service-main service-main1">
                                <div class="service-font">
                                    <i class="fad fa-truck"></i>
                                </div>
                                <div class="service-name">
                                    <h2>Residential pickup and delivery</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident possimus quae</p>
                                    <a href="RR_service.html">Read More <i class="far fa-angle-double-right"></i></a>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div>
                        <div class="service">
                            <div class="service-img">
                                <img src="image/service-2.jpg">
                            </div>
                            <div class="service-main service-x">
                                <div class="service-font">
                                    <i class="fad fa-truck"></i>
                                </div>
                                <div class="service-name">
                                    <h2>Residential pickup and delivery</h2>
                                </div>
                            </div>
                            <div class="service-main service-main1">
                                <div class="service-font">
                                    <i class="fad fa-truck"></i>
                                </div>
                                <div class="service-name">
                                    <h2>Residential pickup and delivery</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident possimus quae</p>
                                    <a href="RR_service.html">Read More <i class="far fa-angle-double-right"></i></a>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div> -->
    </div>
</div>
    <!-- <div class="co_enquiry" id="get_quote">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-12">
                    <div class="form">
                        <h1>Request A Quote</h1>
                        <form class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="test">
                                    <input type="text" placeholder="Name" name="name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="test">
                                    <input type="text" placeholder="Phone Number" name="Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="test">
                                    <input type="email" placeholder="Email Address" name="Email Address">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="test">
                                    <input type="date" placeholder="Moving Date" name="Moving Date">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="test">
                                    <input list="text1" placeholder="Moving From" name="Moving From">
                                    <datalist id="text1">
                                        <option>Goa</option>
                                        <option>Chennai</option>
                                        <option>Chandigarh</option>
                                    </datalist>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="test">
                                    <input list="text1" placeholder="Moving To" name="Moving to">
                                    <datalist id="text1">
                                        <option>Chandigarh</option>
                                        <option>Goa</option>
                                        <option>Chennai</option>
                                    </datalist>
                                </div>
                            </div>
                            <div class="sub">
                                <input type="submit" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-12"></div>
            </div>
        </div>
    </div> -->
    <div class="co_enquiry2" id="get_quote">
  
        <div class="container">
    <ul class="tabs">
        <li class="tab-link current" data-tab="tab-1">Truckload</li>
        <li class="tab-link" data-tab="tab-2">Less Than Truckload</li>
    </ul>

 
  <form action="" method="POST" id="sendmessage" class="form12">
           @csrf
        <div id="tab-1" class="tab-content current" name="tab-1" value="Truckload">
             <div class="tab-section1">
            <h4>personal details <b>*</b> : </h4>
            <div class="all-form">
              
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">

                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                         <input type="hidden" name="fromtype"  id="fromtype" value="1" />
                       <div class="part_1">
                            <label>Name:</label>
                            <input type="text" placeholder="Name" name="name" id="name" value="" required="" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                       <div class="part_1">
                            <label>Phone Number</label>
                            <input type="text" placeholder="Phone Number" id="mobileno" name="mobileno" value="" required="" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                       <div class="part_1">
                            <label>Email:</label>
                            <input type="email" placeholder="enter Email " name="email" id="email" value="" required="" autocomplete="off">
                        </div>
                    </div>
                </div>
          
        </div>
    </div>
        <div class="tab-section1">
            <h4>Trailer type <b>*</b> : </h4>
            <div class="all-form">
               
                    <div class="form-check-inline">
                        <label for="dry">
                            <input type="radio" class="dry" id="Trailer_type1" name="Trailer_type" value="1" >Dry Van
                        </label>
                    </div>
                  <!--   <div class="form-check-inline">
                        <label for="refri">
                            <input type="radio" class="refri" id="Trailer_type2" name="Trailer_type" value="2">Refrigerated
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label for="flat">
                            <input type="radio" class="flat" id="Trailer_type3" name="Trailer_type" value="3">Flatbed
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label for="spe">
                            <input type="radio" class="spe"id="Trailer_type4" name="Trailer_type" value="4">Specialized (RGN, Lowboy, Etc)
                        </label>
                    </div> -->
                    <div class="form-check-inline">
                        <label for="power">
                            <input type="radio" class="power" id="Trailer_type5" name="Trailer_type" value="5">Power Only
                        </label>
                    </div>
               
                <div class="row">
                    <div class="col-lg-3">
                        <div class="amount-trailer">
                            <h5>Amount of Trailer Needed <b>*</b> : </h5>
                         
                                <div class="form-check-inline">
                                    <label class="form-check-label" for="full">
                                        <input type="radio" class="form-check-input full" id="Amount_of_Trailer" name="Amount_of_Trailer" value="1" checked>Full Trailer
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label" for="partial">
                                        <input type="radio" class="form-check-input partial" id="Amount_of_Trailer" name="Amount_of_Trailer" value="2"> Partial Trailer
                                    </label>
                                </div>
                          
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="feet">
                        
                                <label>Feet Occupied <b>*</b> :</label>
                                <input type="number" placeholder="" name="feet" id="feet">
                                (Only number)
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="r-1">
        <div class="row">
            <div class="col-lg-6 shipping-origin">
                <div class="tab-section1">
                    <h4>Shipping Origin:</h4>
                    <div class="row row-1">
                        <div class="col-lg-5 col-md-5">
                            <div class="feet1">
                              <!--   <form> -->
                                    <div class="zip-sec">
                                        <label>Zip Code <b>*</b> :</label>
                                        <input type="number" placeholder="" name="from_zip" id="from_zip" vlaue="" required=""><br>
                                        <span>(Zip Code Lookup)</span>
                                    </div>
                                    <div class="">
                                        <label>Ready Date<b>*</b> :</label>
                                        <input type="date" placeholder=""id="date" name="date" vlaue=""><br>
                                        <span>(Zip Code Lookup)</span>
                                    </div>
                               <!--  </form> -->
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                          <!--   <form> -->
                                <p>Location Is*:</p>
                                <div class="location-radio">
                                    <label class="form-check-label" for="residence">
                                        <input type="radio" class="form-check-input" id="from_location" name="from_location" value="1" checked>Residence
                                    </label>
                                </div>
                                <div class="location-radio">
                                    <label class="form-check-label" for="with">
                                        <input type="radio" class="form-check-input" id="from_location" name="from_location" value="2">Businesses with a loading dock or forklift

                                    </label>
                                </div>
                                <div class="location-radio">
                                    <label class="form-check-label" for="without">
                                        <input type="radio" class="form-check-input" id="from_location" name="from_location" value="3">Businesses without a loading dock or forklift
                                    </label>
                                </div>
                           <!--  </form> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 shipping-origin">
                <div class="tab-section1">
                    <h4>Shipping Destination:</h4>
                    <div class="row row-1">
                        <div class="col-lg-5 col-md-5">
                            <div class="feet1">
                            <!--     <form> -->
                                    <div class="zip-sec">
                                        <label>Zip Code <b>*</b> :</label>
                                        <input type="number" placeholder="" name="to_zip" value="" required=""><br>
                                        <span>(Zip Code Lookup)</span>
                                    </div>
                              <!--   </form> -->
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                           <!--  <form> -->
                                <p>Location Is*:</p>
                                <div class="location-radio">
                                    <label class="form-check-label" for="residence">
                                        <input type="radio" class="form-check-input" id="to_location" name="to_location" value="1" checked>Residence
                                    </label>
                                </div>
                                <div class="location-radio">
                                    <label class="form-check-label" for="with">
                                        <input type="radio" class="form-check-input" id="to_location" name="to_location" value="2">Businesses without a loading dock or forklift
                                    </label>
                                </div>
                                <div class="location-radio">
                                    <label class="form-check-label" for="without">
                                        <input type="radio" class="form-check-input" id="to_location" name="to_location" value="3">Businesses without a loading dock or forklift
                                    </label>
                                </div>
                           <!--  </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-lg-6 shipping-origin">
                <div class="tab-section1">
                    <h4>Weight and Quantity:</h4>
                    <div class="row row-1">
                        <div class="col-lg-5 col-md-5">
                            <div class="feet1">
                              <!--   <form> -->
                                    <div class="zip-sec">
                                        <label>Shipping Units <b>*</b> :</label>
                                        <select name="shipping_unit" id="shipping_unit" required>
                                            <option value="0">Select a Package</option>
                                            <option value="1" >Full Truckload</option>
                                            <option  value="2">Pallets (48"x40")</option>
                                            <option  value="3">Pallets (48"x48")</option>
                                            <option value="4">Pallets (60"x48")</option>
                                            <option value="5">Pallets (enter dimensions)</option>
                                            <option  value="6"> Bags</option>
                                            <option value="7">Bales</option>
                                            <option value="8">Boxes</option>
                                            <option value="9"> Bundles</option>
                                            <option value="10">Carpets</option>
                                            <option value="11">Coils</option>
                                            <option value="12">Crates</option>
                                            <option value="13">Cylinders</option>
                                            <option value="14">Drums</option>
                                            <option value="15">Pails</option>
                                            <option value="16">Reels</option>
                                            <option value="17">Rolls</option>
                                            <option value="18">Tubes/Pipes</option>
                                        </select>
                                    </div>
                                    <div class="zip-sec">
                                        <label>Select if applicable <b>*</b> :</label>
                                        <select name="good_type" id="good_type" required>
                                            <option value="0">Select a Goods Type</option>
                                            <option value="1">New Goods</option>
                                            <option vlaue="2">Used Goods</option>
                                        </select>
                                    </div>
                              <!--   </form> -->
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                           <!--  <form> -->
                                <p>Total Weight (Pounds)*:</p>
                                <div class="inner-pound">
                                    <div class="pound">
                                        <input type="number" placeholder="" name="total_weight" id="total_weight" required>
                                    </div>
                                    <div class="pound">
                                        <select name="Weight_unit" id="Weight_unit">
                                            <option value="Lbs">Lbs</option>
                                            <option value="Kilos">Kilos</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="many-items mt-2">
                                    <label>Number of Pieces*:</label>
                                    <input type="number" placeholder="" name="number_of_piece" id="number_of_piece" >
                                </div>
                          <!--   </form> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 shipping-origin">
                <div class="tab-section1">
                    <h4>Dimensions:</h4>
                    <div class="row-1">
                        <div class="feet1">
                           <!--  <form> -->
                                <div class="co_pound1">
                                    <div class="pound1">
                                        <label>Length (In)<b>*</b> :</label>
                                        <input type="number" placeholder="" name="lenght" id="lenght" autocomplete="off">
                                    </div>
                                    <div class="pound1">
                                        <label>Width (In)*:</label>
                                        <input type="number" placeholder="" name="width"  id="width" autocomplete="off">
                                    </div>
                                    <div class="pound1">
                                        <label>Height (In)*:</label>
                                        <input type="number" placeholder="" name="height" id="height" autocomplete="off">
                                    </div>
                                    <div class="pound1">
                                        <label>Approx Value ($)*:</label>
                                        <input type="number" placeholder="" name="approx_value" id="approx_vlaue" autocomplete="off">
                                    </div>
                                </div>
                                <div class="ship-dec mt-2">
                                    <label>Shipment Description * <b>*</b> :</label>
                                    <textarea type="text" rows="4"value=""name="ship_decs" id="ship_decs"></textarea>
                                </div>
                           <!--  </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-section1">
            <h4>Special delivery instructions needed? :</h4>
            <div class="all-form">
               <!--  <form action="/action_page.php"> -->
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="instructions" name="instructions" value="1" checked>No additional instructions needed
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="instructions" name="instructions" value="2">Schedule appointment
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio3">
                            <input type="radio" class="form-check-input" id="instructions" name="instructions" value="3">Notify by phone on arrival
                        </label>
                    </div>
                <!-- </form> -->
            </div>
        </div>
          <div class="button submit">
        <input type="SUBMIT" id="submit" value="Get my Quick Quote">
    </div>
    </div>
    </form>
    <div id="tab-2" class="tab-content">
        <div class="tab-section1">
            <h4>personal details <b>*</b> : </h4>
            <div class="all-form">
            <form action="" method="POST" id="sendmessage1" class="form21">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">

                           <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                         <input type="hidden" name="fromtype"  id="fromtype" value="2" />
                       <div class="part_1">
                            <label>Name:</label>
                            <input type="text" placeholder="Name" name="name" id="name" value="" required="" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                       <div class="part_1">
                            <label>Phone Number</label>
                            <input type="number" placeholder="Phone Number" name="mobileno" id="mobileno" value="" required="" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                       <div class="part_1">
                            <label>Email:</label>
                            <input type="email" placeholder="enter Email " name="email" id="email" value="" required="" autocomplete="off">
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
        <div class="row">
            <div class="col-lg-6 shipping-origin">
                <div class="tab-section1">
                    <h4>Where Are You Shipping From?</h4>
                    <div class="row row-1">
                        <div class="col-lg-5 col-md-5">
                            <div class="feet1">
                               
                                    <div class="zip-sec">
                                        <label>Zip Code <b>*</b> :</label>
                                        <input type="number" placeholder=""name="from_zip" id="from_zip" required=""><br>
                                        <span>(Zip Code Lookup)</span>
                                    </div>
                                    <div class="">
                                        <label>Ready Date<b>*</b> :</label>
                                        <input type="date" placeholder="" name="date" id="date" required=""><br>
                                        <span>(Zip Code Lookup)</span>
                                    </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            
                                <p>What type of location is this? *:</p>
                                <div class="location-radio">
                                    <label class="form-check-label" for="residence">
                                        <input type="radio" class="form-check-input" id="from_location" name="from_location" value="1" checked>Businesses with a loading dock or forklift
                                    </label>
                                </div>
                                <div class="location-radio">
                                    <label class="form-check-label" for="with">
                                        <input type="radio" class="form-check-input" id="from_location" name="from_location" value="2">Businesses without a loading dock or forklift
                                    </label>
                                </div>
                                <div class="location-radio">
                                    <label class="form-check-label" for="without">
                                        <input type="radio" class="form-check-input" id="from_location" name="from_location" value="3">Residential or limited access
                                    </label>
                                </div>
                                <div class="location-radio">
                                    <label class="form-check-label" for="without">
                                        <input type="radio" class="form-check-input" id="from_location" name="from_location" value="4">Tradeshow or convention
                                    </label>
                                </div>
                                <div class="location-radio">
                                    <label class="form-check-label" for="without">
                                        <input type="radio" class="form-check-input" id="from_location" name="from_location" value="5">Construction site
                                    </label>
                                </div>
                                <div class="location-radio">
                                    <label class="form-check-label" for="without">
                                        <input type="radio" class="form-check-input" id="from_location" name="from_location" value="6">Drop off at carrier terminal
                                    </label>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 shipping-origin">
                <div class="tab-section1">
                   <h4>Where Are You Shipping To?</h4>
                    <div class="row row-1">
                        <div class="col-lg-5 col-md-5">
                            <div class="feet1">
                              
                                    <div class="zip-sec">
                                        <label>Zip Code <b>*</b> :</label>
                                        <input type="number" placeholder="" name="to_zip"  id="to_zip"><br>
                                        <span>(Zip Code Lookup)</span>
                                    </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                          
                                <p>What type of location is this? *:</p>
                                <div class="location-radio">
                                    <label class="form-check-label" for="residence">
                                      <input type="radio" class="form-check-input" id="to_location" name="to_location" value="1" checked>Businesses with a loading dock or forklift
                                    </label>
                                </div>
                                <div class="location-radio">
                                    <label class="form-check-label" for="with">
                                        <input type="radio" class="form-check-input" id="to_location" name="to_location" value="2">Businesses without a loading dock or forklift
                                    </label>
                                </div>
                                <div class="location-radio">
                                    <label class="form-check-label" for="without">
                                        <input type="radio" class="form-check-input"id="to_location" name="to_location" value="3">Residential or limited access
                                    </label>
                                </div>
                                <div class="location-radio">
                                    <label class="form-check-label" for="without">
                                        <input type="radio" class="form-check-input" id="to_location" name="to_location" value="4">Tradeshow or convention
                                    </label>
                                </div>
                                <div class="location-radio">
                                    <label class="form-check-label" for="without">
                                        <input type="radio" class="form-check-input" id="to_location" name="to_location" value="5">Construction site
                                    </label>
                                </div>
                                <div class="location-radio">
                                    <label class="form-check-label" for="without">
                                        <input type="radio" class="form-check-input" id="to_location" name="to_location" value="6">Pickup at the carrier terminal
                                    </label>
                                </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 shipping-origin">
                <div class="tab-section1">
                    <h4>What Are You Shipping?</h4>
                    <div class="row row-1">
                        <div class="col-lg-6 col-md-6">
                            <div class="feet1">
                               
                                    <div class="zip-sec">
                                        <label>How Are These Packaged?*  :</label>
                                        <select name="shipping_unit" id="shipping_unit" required>
                                            <option value="0">Select a Package</option>
                                            <option value="1" >Full Truckload</option>
                                            <option  value="2">Pallets (48"x40")</option>
                                            <option  value="3">Pallets (48"x48")</option>
                                            <option value="4">Pallets (60"x48")</option>
                                            <option value="5">Pallets (enter dimensions)</option>
                                            <option  value="6"> Bags</option>
                                            <option value="7">Bales</option>
                                            <option value="8">Boxes</option>
                                            <option value="9"> Bundles</option>
                                            <option value="10">Carpets</option>
                                            <option value="11">Coils</option>
                                            <option value="12">Crates</option>
                                            <option value="13">Cylinders</option>
                                            <option value="14">Drums</option>
                                            <option value="15">Pails</option>
                                            <option value="16">Reels</option>
                                            <option value="17">Rolls</option>
                                            <option value="18">Tubes/Pipes</option>
                                        </select>
                                    </div>
                                    <div class="many-items">
                                        <label>How many items?*:</label>
                                        <input type="number" placeholder="" name="number_of_piece" id="number_of_piece" required>
                                    </div>
                                    <p class="mt-2">Total Weight (Pounds)*:</p>
                                    <div class="inner-pound">
                                        <div class="pound">
                                            <input type="text" placeholder="" name="total_weight" id="total_weight" required>
                                        </div>
                                        <div class="pound">
                                             <select name="Weight_unit" id="Weight_unit">
                                            <option value="Lbs" >Lbs</option>
                                            <option value="Kilos" >Kilos</option>
                                        </select>
                                        </div>
                                    </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          
                                <div class="zip-sec">
                                    <label>Are these New or Used Commercial Goods?*:</label>
                                   
                                       <select name="good_type" id="good_type" required>
                                            <option value="0">Select a Goods Type</option>
                                            <option value="1">New Goods</option>
                                            <option vlaue="2">Used Goods</option>
                                        </select>
                                  
                                </div>
                                <div>
                                    <p>Other Services:</p>
                                    <div class="form-check">
                                        <label class="form-check-label" for="check1">
                                            <input type="checkbox" class="form-check-input" id="check1" name="services[]" value="1" >Shipment Contains Hazardous Materials
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label" for="check2">
                                            <input type="checkbox" class="form-check-input" id="check2" name="services[]" value="2">These items are Non-Stackable
                                        </label>
                                    </div>
                                </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 shipping-origin">
                <div class="tab-section1">
                    <h4>Dimensions:</h4>
                    <div class="row-1">
                        <div class="feet1">
                           
                                <div class="co_pound1">
                                    <div class="pound1">
                                        <label>Length (In)<b>*</b> :</label>
                                        <input type="number" placeholder="" name="lenght" id="lenght" autocomplete="off">
                                    </div>
                                    <div class="pound1">
                                        <label>Width (In)<b>*</b> :</label>
                                        <input type="number" placeholder="" name="width"  id="width" autocomplete="off">
                                    </div>
                                    <div class="pound1">
                                        <label>Height (In)<b>*</b> :</label>
                                        <input type="number" placeholder="" name="height" id="height" autocomplete="off">
                                    </div>
                                    <div class="pound1">
                                        <label>Approx Value ($)<b>*</b> :</label>
                                        <input type="number" placeholder="" name="approx_value" id="approx_vlaue" autocomplete="off">
                                    </div>
                                </div>
                                <div class="co_portation mt-2">
                                    <div class="portation-1">
                                    <div class="row row1">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="zip-sec">
                                                <label>Class*:</label>
                                                <select name="Freight" id="Freight">
                                                    <option vlaue="0">Select a Freight Class</option>
                                                    <option value="50">50</option>
                                                    <option  value="55">55</option>
                                                    <option  value="60">60</option>
                                                    <option  value="65">65</option>
                                                    <option  value="70">70</option>
                                                    <option  value="77.5">77.5</option>
                                                    <option  value="85">85</option>
                                                    <option  value="92.5">92.5</option>
                                                    <option  value="100">100</option>
                                                    <option  value="110">110</option>
                                                    <option  value="125">125</option>
                                                    <option  value="150">150</option>
                                                    <option  value="175">175</option>
                                                    <option  value="200">200</option>
                                                    <option  value="250">250</option>
                                                    <option  value="300">300</option>
                                                    <option  value="400">400</option>
                                                    <option  value="500">500</option>
                                                </select>   
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="click-link">
                                                <a>Don't Know Your Freight Class?</a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="portation-2">
                                    <div class="row row1">
                                        <div class="col-lg-6">
                                            <div class="zip-sec">
                                                <label>Commodities List:</label>
                                                <select name="Commodities" id="Commodities">
                                                    <option vlaue="0">Select a Commodity</option>
                                                    <option vlaue="1">Air Conditioner</option>
                                                    <option  vlaue="2">Air Measuring Device, Instruments</option>
                                                    <option  vlaue="3">Aircraft Parts</option>
                                                    <option  vlaue="4">Athletic Goods (4 ppcft or greater)</option>
                                                    <option  vlaue="5">ATV</option>
                                                    <option  vlaue="6">Automobile Engine</option>
                                                    <option  vlaue="7">Axles, Automobile</option>
                                                    <option  vlaue="8">Books</option>
                                                    <option  vlaue="9">Buffet, Hutch, China Cabinet</option>
                                                    <option  vlaue="10">Chairs (Metal/Steel)</option>
                                                    <option  vlaue="11">Chairs (Wooden)</option>
                                                    <option  vlaue="12">Chairs Upholstered</option>
                                                    <option  vlaue="13">Charcoal (Not Activated)</option>
                                                    <option  vlaue="14">Chinaware, Earthenware, or Stoneware</option>
                                                    <option  vlaue="15">Clothing (4 ppcft or greater)</option>
                                                    <option  vlaue="16">Computer Systems, Devices, etc. (4 ppcft or greater)</option>
                                                </select>   
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="click-link">
                                                <a name="know_class" value="yes">I Know My Freight Class</a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="ship-dec">
                                    <label>Shipment Description <b>*</b> :</label>
                                    <textarea type="text" rows="3" name="ship_decs" vlaue="" id="ship_desc"></textarea>
                                </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-section1">
            <h4>Special Delivery Instructions Needed? :</h4>
            <div class="all-form">
               <!--  <form action="/action_page.php">  -->
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="instructions" name="instructions" value="1" checked>No additional instructions needed
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="instructions" name="instructions" value="2">Schedule appointment
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio3">
                            <input type="radio" class="form-check-input" id="instructions" name="instructions" value="3">Notify by phone on arrival
                        </label>
                    </div>
               <!--  </form> -->
            </div>
        </div>
          <div class="button submit">
        <input type="SUBMIT" id="submit1"  value="Get my Quick Quote">
    </div>

</form>
    </div>
  
</div>
    </div>
   <!--  <div class="co_testimonial">
        <div class="container">
            <div class="title-head">
                <h1 class="title">Testimonials</h1>
                <p>We value what our clients have to say about us and we hope you do as well. With that being said, below you will find some incredibly generous testimonials from some of our past and present clients.</p>
            </div>
           <div class="main main1">
                <div class="slider slider-nav1">
                    @foreach($testimonial as $t)
                    <div>
                        <div class="client-main">
                            <div class="client">
                                <i class="fas fa-quote-left"></i>
                                <p>{{$t->description}}</p>
                            </div>
                            <div class="client-info">
                                <div class="client-img">
                                    @if($t->image !="")
                                  <img src="uploads/{{$t->image}}">
                                    @else
                                    <img src="image/team.png">
                                    @endif
                                </div>
                                <div class="client-name">
                                    <h3>{{$t->name}}</h3>
                                    <h6>{{$t->occupation}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                 
                </div>
            </div> 
        </div>
    </div> -->
    <div class="co_testimonial">
        <div class="container">
            <div class="title-head">
                <h1 class="title">Testimonials</h1>
                <p>We value what our clients have to say about us and we hope you do as well. With that being said, below you will find some incredibly generous testimonials from some of our past and present clients.</p>
            </div>
            <div class="main main1">
                <div class="slider slider-nav1">

                   @foreach($testimonial as $t)
                    <div>
                        <div class="client-main">
                            <div class="client">
                                <i class="fas fa-quote-left"></i>
                                <p>{{$t->description}}</p>
                            </div>
                            <div class="client-info">
                                <div class="client-img">
                                    @if($t->image !="")
                                  <img src="uploads/{{$t->image}}">
                                    @else
                                    <img src="image/team.png">
                                    @endif
                                </div>
                                <div class="client-name">
                                    <h3>{{$t->name}}</h3>
                                    <h6>{{$t->occupation}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                
                </div>
            </div>
        </div>
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
                        <p>Get the latest updates and offers.</p>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
    <!-- <script type="text/javascript" src="js/home.js"></script> -->
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

        $('.banner-slider').slick({
            autoplay: false,
            autoplaySpeed: 2000,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            focusOnSelect: true,
            prevArrow: '<div class="banner-arrow slide-arrow prev-arrow"><i class="fal fa-chevron-left"></i></div>',
            nextArrow: '<div class="banner-arrow slide-arrow next-arrow"><i class="fal fa-chevron-right"></i></div>',
            responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    adaptiveHeight: true,
                  },
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                  },
                },
            ],
        });

        $('.slider-nav').slick({
            // autoplay: false,
            // autoplaySpeed: 1500,
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            infinite: false,
            responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            adaptiveHeight: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
          },
        },
      ],
        });

        $('.slider-nav1').slick({
            autoplay: false,
            autoplaySpeed: 1500,
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false,
            focusOnSelect: true,
            prevArrow: '<div class="slide-arrow prev-arrow"><i class="far fa-angle-left"></i></div>',
            nextArrow: '<div class="slide-arrow next-arrow"><i class="far fa-angle-right"></i></div>',
            responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            adaptiveHeight: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          },
        },
      ],
        });

        $(document).ready(function(){
              // Add smooth scrolling to all links
              $(".quote_id").on('click', function(event) {

                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                  scrollTop: $(hash).offset().top - 300
                }, 800, function(){
               
                  // Add hash (#) to URL when done scrolling (default click behavior)
                  window.location.hash = hash;
                });
              });
            });


        $(document).ready(function() {
  var ellipsesText = "...";
  var expandText = "Read more";
  var collapseText = "Read less";
  $('.description span').each(function() {
    var content = $(this).html();
    var collapseLimit = $(this).data('collapse-limit');
    if(content.length > collapseLimit) {
      var collapsedContent = content.substr(0, collapseLimit);
      var expandedContent = content.substr(collapseLimit-1, content.length - collapseLimit);
      $(this).empty();
      $(this).append($('<span />').addClass('collapsed-content').html(collapsedContent));
      $(this).append($('<span />').addClass('ellipses').html(ellipsesText));
      $(this).append($('<span />').addClass('expanded-content').html(expandedContent));
      $(this).append($('<button />').addClass('trigger').html(expandText));
    }
  });

  $(".description span .trigger").click(function(){
    if($('.expanded-content').is(":visible")) {
      $(this).html(expandText);
    } else {
      $(this).html(collapseText);
    }
    $(this).siblings('.ellipses').toggle();
    $(this).siblings('.expanded-content').toggle();
  });
});




             $(document).ready(function(){  
            $('ul.tabs li').click(function(){
                var tab_id = $(this).attr('data-tab');

                $('ul.tabs li').removeClass('current');
                $('.tab-content').removeClass('current');

                $(this).addClass('current');
                $("#"+tab_id).addClass('current');
            });

            $('.dry, .refri, .flat').click(function(){
                $('.amount-trailer').show();
            });

            $('.spe, .power').click(function(){
                $('.amount-trailer').hide();
            });

            $('.full').click(function(){
                $('.feet').hide();
            });

            $('.partial').click(function(){
                $('.feet').show();
            });

            $('.portation-1 .click-link a').click(function(){
                $('.portation-2').show();
                $('.portation-1').hide();
            })

            $('.portation-2 .click-link a').click(function(){
                $('.portation-1').show();
                $('.portation-2').hide();
            })
        });

    </script>
    <script type="text/javascript">
         $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': jQuery('#token').val()
        }
    });



    $("#submit").click(function(e){

       var param = $("#sendmessage").serialize();
      /* console.log(param);*/
     e.preventDefault();

        $.ajax({
           url:'/getquotefrom',
        
           method:'POST',
           data:param,

        
   success: function(dataResult){
                  console.log(dataResult);
                  var dataResult = JSON.parse(dataResult);
                  if(dataResult.statusCode==200){

                    createAlert('','Success!','Your Inquiry submitted successfully!!.','success',true,true,'pageMessages');

                      $( '.form12' ).each(function(){
                          this.reset();
                         });        
                
                      }else{

                        alert("some value are missing!!!! ");

                    /* createAlert('','Success!','Your Inquiry submitted successfully!!.','success',true,true,'pageMessages');*/
                  } 
              }
          });
       });


     $("#submit1").click(function(e){

   var param = $("#sendmessage1").serialize();
    console.log(param);
      e.preventDefault();

        $.ajax({
           url:'/getquotefrom1',
        
           method:'POST',
         
           data:param,

   success: function(dataResult){
                  console.log(dataResult);
                  var dataResult = JSON.parse(dataResult);
                  if(dataResult.statusCode==200){


                    createAlert('','Success!','Your Inquiry submitted successfully!!.','success',true,true,'pageMessages');


                     $( '.form21' ).each(function(){
                          this.reset();
                        }); 
 

                  }else if(dataResult.statusCode==202) {

                     alert("some value are missing!!!! ");
                  }
                   
                  

              
                   
                 /* setInterval('location.reload()', 3000);*/
              
              }
        });

 
    });


   var ALERT_TITLE = "Oops!";
var ALERT_BUTTON_TEXT = "Ok";

if(document.getElementById) {
    window.alert = function(txt) {
        createCustomAlert(txt);
    }
}

function createCustomAlert(txt) {
    d = document;

    if(d.getElementById("modalContainer")) return;

    mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
    mObj.id = "modalContainer";
    mObj.style.height = d.documentElement.scrollHeight + "px";
    
    alertObj = mObj.appendChild(d.createElement("div"));
    alertObj.id = "alertBox";
    if(d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
    alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth)/2 + "px";
    alertObj.style.visiblity="visible";

    h1 = alertObj.appendChild(d.createElement("h1"));
    h1.appendChild(d.createTextNode(ALERT_TITLE));

    msg = alertObj.appendChild(d.createElement("p"));
    //msg.appendChild(d.createTextNode(txt));
    msg.innerHTML = txt;

    btn = alertObj.appendChild(d.createElement("a"));
    btn.id = "closeBtn";
    btn.appendChild(d.createTextNode(ALERT_BUTTON_TEXT));
    btn.href = "#";
    btn.focus();
    btn.onclick = function() { removeCustomAlert();return false; }

    alertObj.style.display = "block";
    
}

function removeCustomAlert() {
    document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer"));
}




function createAlert(title, summary, details, severity, dismissible, autoDismiss, appendToId) {
  var iconMap = {
    info: "fa fa-info-circle",
    success: "fa fa-thumbs-up",
    warning: "fa fa-exclamation-triangle",
    danger: "fa ffa fa-exclamation-circle"
  };

  var iconAdded = false;

  var alertClasses = ["alert", "animated", "flipInX"];
  alertClasses.push("alert-" + severity.toLowerCase());

  if (dismissible) {
    alertClasses.push("alert-dismissible");
  }

  var msgIcon = $("<i />", {
    "class": iconMap[severity] // you need to quote "class" since it's a reserved keyword
  });

  var msg = $("<div />", {
    "class": alertClasses.join(" ") // you need to quote "class" since it's a reserved keyword
  });

  if (title) {
    var msgTitle = $("<h4 />", {
      html: title
    }).appendTo(msg);
    
    if(!iconAdded){
      msgTitle.prepend(msgIcon);
      iconAdded = true;
    }
  }

  if (summary) {
    var msgSummary = $("<strong />", {
      html: summary
    }).appendTo(msg);
    
    if(!iconAdded){
      msgSummary.prepend(msgIcon);
      iconAdded = true;
    }
  }

  if (details) {
    var msgDetails = $("<p />", {
      html: details
    }).appendTo(msg);
    
    if(!iconAdded){
      msgDetails.prepend(msgIcon);
      iconAdded = true;
    }
  }
  

  if (dismissible) {
    var msgClose = $("<span />", {
      "class": "close", // you need to quote "class" since it's a reserved keyword
      "data-dismiss": "alert",
      html: "<i class='fa fa-times-circle'></i>"
    }).appendTo(msg);
  }
  
  $('#' + appendToId).prepend(msg);
  
  if(autoDismiss){
    setTimeout(function(){
      msg.addClass("flipOutX");
      setTimeout(function(){
        msg.remove();
      },1000);
    }, 5000);
  }
}




    </script>
    <style type="text/css">
  html {
  height: 100%;
}

body {
  background-color: transparent!important;
}

.loader {
  position: absolute;
  top: calc(50% - 32px);
  left: calc(50% - 32px);
  width: 64px;
  height: 64px;
  border-radius: 50%;
  perspective: 800px;
}

.inner {
  position: absolute;
  box-sizing: border-box;
  width: 100%;
  height: 100%;
  border-radius: 50%;  
}

.inner.one {
  left: 0%;
  top: 0%;
  animation: rotate-one 1s linear infinite;
  border-bottom: 3px solid #e368b7;
}

.inner.two {
  right: 0%;
  top: 0%;
  animation: rotate-two 1s linear infinite;
  border-right: 3px solid #e368b7;
}

.inner.three {
  right: 0%;
  bottom: 0%;
  animation: rotate-three 1s linear infinite;
  border-top: 3px solid #e368b7;
}

@keyframes rotate-one {
  0% {
    transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
  }
  100% {
    transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
  }
}

@keyframes rotate-two {
  0% {
    transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
  }
  100% {
    transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
  }
}

@keyframes rotate-three {
  0% {
    transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
  }
  100% {
    transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
  }
}

</style>
  


</body>
</html>