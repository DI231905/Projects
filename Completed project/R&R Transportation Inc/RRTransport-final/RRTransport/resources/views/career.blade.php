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

<style type="text/css">
#form .modal-body {
    padding: 1rem 1rem 0px!important;
}
.file1 input{
    padding-bottom: 36px;
}
#form button:focus{
    outline: none;
}
@media only screen and (max-width: 767px){
    #form .form-control{
        font-size: 14px!important;
    }
}
</style>
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
   <div class="co_part-2">
        <div class="fix-part-2">
            @foreach($allbanner as $a)
            @if($a->name == 'Career')
            <div class="img1">
                <img src="uploads/{{$a->image}}">
            </div>
           
            <div class="about">
                <div class="container">
                    <h2>Career</h2>
                    <ul type="none">
                         <li><a href="{{url('/')}}"> Home</a></li>
                        <li><span class="fa fa-angle-right"></span></li>
                        <li class="bt">{{$a->page_name}}</li>
                    </ul>
                </div>
            </div>
             @endif
            @endforeach
        </div>
    </div>
    <div class="co_career">

         @foreach($wearehiring as $w)
          <div class="container">
            <div class="title-head">

                 @if ($message = Session::get('error'))
            <div  id="hideDiv" class="alert alert-success alert-block" >
                <!--     <input type="text" class="close" data-dismiss="alert"></input> -->
                <strong style="padding-top : 5px !important; display: inline-block;">{{ $message }}</strong>
             </div>
           @endif




                <h1 class="title">{{$w->heading}}</h1>
                <p>{!! $w->topdescription !!}</p>
            </div>
            <div class="row row2">
                <div class="col-lg-6 col-md-7 col-12">
                    <div class="career-info">
                        <h2>{{$w->title1}}<br><strong>{{$w->title2}}</strong></h2>
                        <p>{!! $w->description !!}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-12">
                    <div class="career-img">
                        <img src="uploads/{{$w->image}}">
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="co_benefit">
        <div class="container">
            <div class="title-head">
                <h1 class="title">Benefits</h1>
            </div>
            <div class="row row2">
                @foreach($benifits as $b)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                              <h2>{{$b->title}}</h2>
                            </div>
                            <div class="flip-card-back">
                                <p>{!!$b->description!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- <div class="co_post">
        <div class="container">
            <div class="title-head">
                <h1 class="title">Open Posts</h1>
            </div>
            <div class="gallery1">
                <ul class="controls">
                    <li class="buttons active" data-filter="all"><span><i class="checkbox1 far fa-check"></i></span>All</li>
                    <li class="buttons" data-filter="1"><span><i class="checkbox1 far fa-check"></i></span>Contract</li>
                    <li class="buttons" data-filter="2"><span><i class="checkbox1 far fa-check"></i></span>Full Time</li>
                    <li class="buttons" data-filter="3"><span><i class="checkbox1 far fa-check"></i></span>Internship</li>
                    <li class="buttons" data-filter="4"><span><i class="checkbox1 far fa-check"></i></span>Part-Time</li>
                </ul>
                <div class="image-container">

                    @foreach($position as $p)
                    <div class="post image {{$p->vacancy_type}}">
                        <h2>{{$p->name}}</h2>
                        <h6>NO of vacancy: {{$p->no_of_vacancy}}</h6>
                        <div class="button_container" data-toggle="modal" data-target="#form">
                            <a href="#">
                                <div class="btn-1"><span>Apply Now</span></div>
                            </a>
                        </div>
                    </div>

                    @endforeach
                 
                </div>
                <div class="load-more">
                    <a href="">Load More <i class="far fa-angle-down"></i></a>
                </div>
            </div>
        </div>
    </div> -->
    <div class="co_post">
        <div class="container">
            <div class="title-head">
                <h1 class="title">Open Posts</h1>
            </div>
            <div class="gallery1">
                <ul class="controls">
                    <li class="buttons active" data-filter="all"><span><i class="checkbox1 far fa-check"></i></span>All</li>
                    <li class="buttons" data-filter="1"><span><i class="checkbox1 far fa-check"></i></span>Contract</li>
                    <li class="buttons" data-filter="2"><span><i class="checkbox1 far fa-check"></i></span>Full Time</li>
                    <li class="buttons" data-filter="3"><span><i class="checkbox1 far fa-check"></i></span>Internship</li>
                    <li class="buttons" data-filter="4"><span><i class="checkbox1 far fa-check"></i></span>Part Time</li>
                </ul>
                <div class="image-container">
                @foreach($position as $p)
                    <div class="post image {{$p->vacancy_type}} ">
                        <div class="post-head">
                            <div class="post-head1">
                                <h2>{{$p->name}}</h2>
                                <h6>{{$p->country}}</h6>
                            </div>
                            <div class="post-head2">
                                <h5>No. of vacancy: {{$p->no_of_vacancy}} </h5>
                                @if($p->vacancy_type==1)
                                <h6>Contract</h6>
                                @elseif($p->vacancy_type==2)
                                 <h6>Full Time</h6>
                                @elseif($p->vacancy_type==3)
                                 <h6>Internship</h6>
                                 @else
                                 <h6>Part-Time</h6>
                                 @endif

                            </div>
                        </div>
                        <div class="accordion-container">
                            <div class="set">
                                <a>Responsibilities<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <p>{{$p->Responsibilities}}</p>
                                </div>
                            </div>
                            <div class="set">
                                <a>Requirements<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <ul class="post-tab_0">
                                        {!!$p->Requirements!!}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="button_container" data-toggle="modal" data-target="#form">
                            <a href="#">
                                <div class="btn-1"><span>Apply Now</span></div>
                            </a>
                        </div>
                    </div>

                    @endforeach
                   <!--  <div class="post image contract full">
                        <div class="post-head">
                            <div class="post-head1">
                                <h2>Driver</h2>
                                <h6>united states</h6>
                            </div>
                            <div class="post-head2">
                                <h5>full-time</h5>
                            </div>
                        </div>
                        <div class="accordion-container">
                            <div class="set">
                                <a>Responsibilities<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <p>This position is primarily responsible for safely driving a commercial vehicle and requires compliance with safety & DOT Regulations, continuous training, and customer service.</p>
                                </div>
                            </div>
                            <div class="set">
                                <a>Requirements<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <ul class="post-tab_0">
                                        <li>High School Degree or equivalent.</li>
                                        <li>Must have the ability to read, write, speak English, and perform simple mathematical calculations with general mental abilities to handle receipts, read maps, road signs, maintain logs, etc.</li>
                                        <li>A driver must be a minimum of 21 years of age, pass the DOT physical and eye examination and provide copies to us, as well as submit a current MVR on an annual basis</li>
                                        <li>Must pass a background check and motor vehicle check</li>
                                        <li>Must pass a drug and alcohol screen before the hire date and by random selection</li>
                                        <li>Pass a screening skills road test</li>
                                        <li>Must provide appropriate CDL and endorsements for the position</li>
                                        <li>Minimum of 2 years experience within the last 3 years</li>
                                        <li>Ability to follow written and/or oral instructions and operate electronic data telecommunications</li>
                                        <li>Ability to read, interpret and abide by DOT laws, rules, regulations policies, and/or procedures</li>
                                        <li>Detecting, eliminating, or minimizing safety hazards by maintaining accurate records and logs</li>
                                        <li>Loading/Unloading freight or assisting in the loading/unloading of freight if required by the customer</li>
                                        <li>Operate equipment, such as truck cab computers, phones, or global positioning systems (GPS) </li>
                                        <li>Report vehicle defects, accidents, traffic violations, or damage to the vehicles.</li>
                                        <li>Obtain receipts, signatures, and bills of lading for delivered goods and assignment details.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="button_container" data-toggle="modal" data-target="#form">
                            <a href="#">
                                <div class="btn-1"><span>Apply Now</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="post image full internship">
                       <div class="post-head">
                            <div class="post-head1">
                                <h2>Driver</h2>
                                <h6>united states</h6>
                            </div>
                            <div class="post-head2">
                                <h5>full-time</h5>
                            </div>
                        </div>
                        <div class="accordion-container">
                            <div class="set">
                                <a>Responsibilities<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <p>This position is primarily responsible for safely driving a commercial vehicle and requires compliance with safety & DOT Regulations, continuous training, and customer service.</p>
                                </div>
                            </div>
                            <div class="set">
                                <a>Requirements<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <ul class="post-tab_0">
                                        <li>High School Degree or equivalent.</li>
                                        <li>Must have the ability to read, write, speak English, and perform simple mathematical calculations with general mental abilities to handle receipts, read maps, road signs, maintain logs, etc.</li>
                                        <li>A driver must be a minimum of 21 years of age, pass the DOT physical and eye examination and provide copies to us, as well as submit a current MVR on an annual basis</li>
                                        <li>Must pass a background check and motor vehicle check</li>
                                        <li>Must pass a drug and alcohol screen before the hire date and by random selection</li>
                                        <li>Pass a screening skills road test</li>
                                        <li>Must provide appropriate CDL and endorsements for the position</li>
                                        <li>Minimum of 2 years experience within the last 3 years</li>
                                        <li>Ability to follow written and/or oral instructions and operate electronic data telecommunications</li>
                                        <li>Ability to read, interpret and abide by DOT laws, rules, regulations policies, and/or procedures</li>
                                        <li>Detecting, eliminating, or minimizing safety hazards by maintaining accurate records and logs</li>
                                        <li>Loading/Unloading freight or assisting in the loading/unloading of freight if required by the customer</li>
                                        <li>Operate equipment, such as truck cab computers, phones, or global positioning systems (GPS) </li>
                                        <li>Report vehicle defects, accidents, traffic violations, or damage to the vehicles.</li>
                                        <li>Obtain receipts, signatures, and bills of lading for delivered goods and assignment details.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="button_container" data-toggle="modal" data-target="#form">
                            <a href="#">
                                <div class="btn-1"><span>Apply Now</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="post image internship part contract">
                        <div class="post-head">
                            <div class="post-head1">
                                <h2>Driver</h2>
                                <h6>united states</h6>
                            </div>
                            <div class="post-head2">
                                <h5>full-time</h5>
                            </div>
                        </div>
                        <div class="accordion-container">
                            <div class="set">
                                <a>Responsibilities<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <p>This position is primarily responsible for safely driving a commercial vehicle and requires compliance with safety & DOT Regulations, continuous training, and customer service.</p>
                                </div>
                            </div>
                            <div class="set">
                                <a>Requirements<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <ul class="post-tab_0">
                                        <li>High School Degree or equivalent.</li>
                                        <li>Must have the ability to read, write, speak English, and perform simple mathematical calculations with general mental abilities to handle receipts, read maps, road signs, maintain logs, etc.</li>
                                        <li>A driver must be a minimum of 21 years of age, pass the DOT physical and eye examination and provide copies to us, as well as submit a current MVR on an annual basis</li>
                                        <li>Must pass a background check and motor vehicle check</li>
                                        <li>Must pass a drug and alcohol screen before the hire date and by random selection</li>
                                        <li>Pass a screening skills road test</li>
                                        <li>Must provide appropriate CDL and endorsements for the position</li>
                                        <li>Minimum of 2 years experience within the last 3 years</li>
                                        <li>Ability to follow written and/or oral instructions and operate electronic data telecommunications</li>
                                        <li>Ability to read, interpret and abide by DOT laws, rules, regulations policies, and/or procedures</li>
                                        <li>Detecting, eliminating, or minimizing safety hazards by maintaining accurate records and logs</li>
                                        <li>Loading/Unloading freight or assisting in the loading/unloading of freight if required by the customer</li>
                                        <li>Operate equipment, such as truck cab computers, phones, or global positioning systems (GPS) </li>
                                        <li>Report vehicle defects, accidents, traffic violations, or damage to the vehicles.</li>
                                        <li>Obtain receipts, signatures, and bills of lading for delivered goods and assignment details.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="button_container" data-toggle="modal" data-target="#form">
                            <a href="#">
                                <div class="btn-1"><span>Apply Now</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="post image full">
                        <div class="post-head">
                            <div class="post-head1">
                                <h2>Driver</h2>
                                <h6>united states</h6>
                            </div>
                            <div class="post-head2">
                                <h5>full-time</h5>
                            </div>
                        </div>
                        <div class="accordion-container">
                            <div class="set">
                                <a>Responsibilities<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <p>This position is primarily responsible for safely driving a commercial vehicle and requires compliance with safety & DOT Regulations, continuous training, and customer service.</p>
                                </div>
                            </div>
                            <div class="set">
                                <a>Requirements<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <ul class="post-tab_0">
                                        <li>High School Degree or equivalent.</li>
                                        <li>Must have the ability to read, write, speak English, and perform simple mathematical calculations with general mental abilities to handle receipts, read maps, road signs, maintain logs, etc.</li>
                                        <li>A driver must be a minimum of 21 years of age, pass the DOT physical and eye examination and provide copies to us, as well as submit a current MVR on an annual basis</li>
                                        <li>Must pass a background check and motor vehicle check</li>
                                        <li>Must pass a drug and alcohol screen before the hire date and by random selection</li>
                                        <li>Pass a screening skills road test</li>
                                        <li>Must provide appropriate CDL and endorsements for the position</li>
                                        <li>Minimum of 2 years experience within the last 3 years</li>
                                        <li>Ability to follow written and/or oral instructions and operate electronic data telecommunications</li>
                                        <li>Ability to read, interpret and abide by DOT laws, rules, regulations policies, and/or procedures</li>
                                        <li>Detecting, eliminating, or minimizing safety hazards by maintaining accurate records and logs</li>
                                        <li>Loading/Unloading freight or assisting in the loading/unloading of freight if required by the customer</li>
                                        <li>Operate equipment, such as truck cab computers, phones, or global positioning systems (GPS) </li>
                                        <li>Report vehicle defects, accidents, traffic violations, or damage to the vehicles.</li>
                                        <li>Obtain receipts, signatures, and bills of lading for delivered goods and assignment details.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="button_container" data-toggle="modal" data-target="#form">
                            <a href="#">
                                <div class="btn-1"><span>Apply Now</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="post image part">
                        <div class="post-head">
                            <div class="post-head1">
                                <h2>Driver</h2>
                                <h6>united states</h6>
                            </div>
                            <div class="post-head2">
                                <h5>full-time</h5>
                            </div>
                        </div>
                        <div class="accordion-container">
                            <div class="set">
                                <a>Responsibilities<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <p>This position is primarily responsible for safely driving a commercial vehicle and requires compliance with safety & DOT Regulations, continuous training, and customer service.</p>
                                </div>
                            </div>
                            <div class="set">
                                <a>Requirements<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <ul class="post-tab_0">
                                        <li>High School Degree or equivalent.</li>
                                        <li>Must have the ability to read, write, speak English, and perform simple mathematical calculations with general mental abilities to handle receipts, read maps, road signs, maintain logs, etc.</li>
                                        <li>A driver must be a minimum of 21 years of age, pass the DOT physical and eye examination and provide copies to us, as well as submit a current MVR on an annual basis</li>
                                        <li>Must pass a background check and motor vehicle check</li>
                                        <li>Must pass a drug and alcohol screen before the hire date and by random selection</li>
                                        <li>Pass a screening skills road test</li>
                                        <li>Must provide appropriate CDL and endorsements for the position</li>
                                        <li>Minimum of 2 years experience within the last 3 years</li>
                                        <li>Ability to follow written and/or oral instructions and operate electronic data telecommunications</li>
                                        <li>Ability to read, interpret and abide by DOT laws, rules, regulations policies, and/or procedures</li>
                                        <li>Detecting, eliminating, or minimizing safety hazards by maintaining accurate records and logs</li>
                                        <li>Loading/Unloading freight or assisting in the loading/unloading of freight if required by the customer</li>
                                        <li>Operate equipment, such as truck cab computers, phones, or global positioning systems (GPS) </li>
                                        <li>Report vehicle defects, accidents, traffic violations, or damage to the vehicles.</li>
                                        <li>Obtain receipts, signatures, and bills of lading for delivered goods and assignment details.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="button_container" data-toggle="modal" data-target="#form">
                            <a href="#">
                                <div class="btn-1"><span>Apply Now</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="post image contract full">
                        <div class="post-head">
                            <div class="post-head1">
                                <h2>Driver</h2>
                                <h6>united states</h6>
                            </div>
                            <div class="post-head2">
                                <h5>full-time</h5>
                            </div>
                        </div>
                        <div class="accordion-container">
                            <div class="set">
                                <a>Responsibilities<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <p>This position is primarily responsible for safely driving a commercial vehicle and requires compliance with safety & DOT Regulations, continuous training, and customer service.</p>
                                </div>
                            </div>
                            <div class="set">
                                <a>Requirements<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <ul class="post-tab_0">
                                        <li>High School Degree or equivalent.</li>
                                        <li>Must have the ability to read, write, speak English, and perform simple mathematical calculations with general mental abilities to handle receipts, read maps, road signs, maintain logs, etc.</li>
                                        <li>A driver must be a minimum of 21 years of age, pass the DOT physical and eye examination and provide copies to us, as well as submit a current MVR on an annual basis</li>
                                        <li>Must pass a background check and motor vehicle check</li>
                                        <li>Must pass a drug and alcohol screen before the hire date and by random selection</li>
                                        <li>Pass a screening skills road test</li>
                                        <li>Must provide appropriate CDL and endorsements for the position</li>
                                        <li>Minimum of 2 years experience within the last 3 years</li>
                                        <li>Ability to follow written and/or oral instructions and operate electronic data telecommunications</li>
                                        <li>Ability to read, interpret and abide by DOT laws, rules, regulations policies, and/or procedures</li>
                                        <li>Detecting, eliminating, or minimizing safety hazards by maintaining accurate records and logs</li>
                                        <li>Loading/Unloading freight or assisting in the loading/unloading of freight if required by the customer</li>
                                        <li>Operate equipment, such as truck cab computers, phones, or global positioning systems (GPS) </li>
                                        <li>Report vehicle defects, accidents, traffic violations, or damage to the vehicles.</li>
                                        <li>Obtain receipts, signatures, and bills of lading for delivered goods and assignment details.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="button_container" data-toggle="modal" data-target="#form">
                            <a href="#">
                                <div class="btn-1"><span>Apply Now</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="post image full internship">
                        <div class="post-head">
                            <div class="post-head1">
                                <h2>Driver</h2>
                                <h6>united states</h6>
                            </div>
                            <div class="post-head2">
                                <h5>full-time</h5>
                            </div>
                        </div>
                        <div class="accordion-container">
                            <div class="set">
                                <a>Responsibilities<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <p>This position is primarily responsible for safely driving a commercial vehicle and requires compliance with safety & DOT Regulations, continuous training, and customer service.</p>
                                </div>
                            </div>
                            <div class="set">
                                <a>Requirements<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <ul class="post-tab_0">
                                        <li>High School Degree or equivalent.</li>
                                        <li>Must have the ability to read, write, speak English, and perform simple mathematical calculations with general mental abilities to handle receipts, read maps, road signs, maintain logs, etc.</li>
                                        <li>A driver must be a minimum of 21 years of age, pass the DOT physical and eye examination and provide copies to us, as well as submit a current MVR on an annual basis</li>
                                        <li>Must pass a background check and motor vehicle check</li>
                                        <li>Must pass a drug and alcohol screen before the hire date and by random selection</li>
                                        <li>Pass a screening skills road test</li>
                                        <li>Must provide appropriate CDL and endorsements for the position</li>
                                        <li>Minimum of 2 years experience within the last 3 years</li>
                                        <li>Ability to follow written and/or oral instructions and operate electronic data telecommunications</li>
                                        <li>Ability to read, interpret and abide by DOT laws, rules, regulations policies, and/or procedures</li>
                                        <li>Detecting, eliminating, or minimizing safety hazards by maintaining accurate records and logs</li>
                                        <li>Loading/Unloading freight or assisting in the loading/unloading of freight if required by the customer</li>
                                        <li>Operate equipment, such as truck cab computers, phones, or global positioning systems (GPS) </li>
                                        <li>Report vehicle defects, accidents, traffic violations, or damage to the vehicles.</li>
                                        <li>Obtain receipts, signatures, and bills of lading for delivered goods and assignment details.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="button_container" data-toggle="modal" data-target="#form">
                            <a href="#">
                                <div class="btn-1"><span>Apply Now</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="post image internship part contract">
                        <div class="post-head">
                            <div class="post-head1">
                                <h2>Driver</h2>
                                <h6>united states</h6>
                            </div>
                            <div class="post-head2">
                                <h5>full-time</h5>
                            </div>
                        </div>
                        <div class="accordion-container">
                            <div class="set">
                                <a>Responsibilities<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <p>This position is primarily responsible for safely driving a commercial vehicle and requires compliance with safety & DOT Regulations, continuous training, and customer service.</p>
                                </div>
                            </div>
                            <div class="set">
                                <a>Requirements<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <ul class="post-tab_0">
                                        <li>High School Degree or equivalent.</li>
                                        <li>Must have the ability to read, write, speak English, and perform simple mathematical calculations with general mental abilities to handle receipts, read maps, road signs, maintain logs, etc.</li>
                                        <li>A driver must be a minimum of 21 years of age, pass the DOT physical and eye examination and provide copies to us, as well as submit a current MVR on an annual basis</li>
                                        <li>Must pass a background check and motor vehicle check</li>
                                        <li>Must pass a drug and alcohol screen before the hire date and by random selection</li>
                                        <li>Pass a screening skills road test</li>
                                        <li>Must provide appropriate CDL and endorsements for the position</li>
                                        <li>Minimum of 2 years experience within the last 3 years</li>
                                        <li>Ability to follow written and/or oral instructions and operate electronic data telecommunications</li>
                                        <li>Ability to read, interpret and abide by DOT laws, rules, regulations policies, and/or procedures</li>
                                        <li>Detecting, eliminating, or minimizing safety hazards by maintaining accurate records and logs</li>
                                        <li>Loading/Unloading freight or assisting in the loading/unloading of freight if required by the customer</li>
                                        <li>Operate equipment, such as truck cab computers, phones, or global positioning systems (GPS) </li>
                                        <li>Report vehicle defects, accidents, traffic violations, or damage to the vehicles.</li>
                                        <li>Obtain receipts, signatures, and bills of lading for delivered goods and assignment details.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="button_container" data-toggle="modal" data-target="#form">
                            <a href="#">
                                <div class="btn-1"><span>Apply Now</span></div>
                            </a>
                        </div>
                    </div> -->
                </div>
                <div class="load-more">
                    <a href="">Load More <i class="far fa-angle-down"></i></a>
                </div>
            </div>
        </div>
    </div>

 <div class="co_employment">
        <div class="container">
            <div class="title-head">
                <h1 class="title">COMMERCIAL DRIVER EMPLOYMENT APPLICATION</h1>
            </div>
         <form  method="post"  action="{{url('/employmentappliction')}}">
            @csrf
            <div class="first-section">
                <h2>APPLICANT INFORMATION</h2>
                <div class="employee-form">
                 
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                <table class="table table-bordered">
                                    <!-- <thead>
                                        <tr>
                                            <th scope="col">Day</th>
                                            <th scope="col">Article Name</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Shares</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead> -->
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="head_1">First Name</th>
                                            <td class="text_1"><input type="text" name="fname" required  autocomplete="off"></td>
                                            <th scope="row" class="head_1">Last Name</th>
                                            <td class="text_1"><input type="text" name="lname" required autocomplete="off"> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="head_1">Phone Number</th>
                                            <td class="text_1"><input type="number" name="mobileno" required autocomplete="off"></td>
                                            <th scope="row" class="head_1">Email</th>
                                            <td class="text_1"><input type="email" name="email" required autocomplete="off"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="head_1">DATE OF BIRTH</th>
                                            <td class="text_1"><input type="date" name="birthdate" required autocomplete="off"></td>
                                            <th scope="row" class="head_1">DATE OF APPLICATION</th>
                                            <td class="text_1"><input type="date" name="applicationdate" required autocomplete="off"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="head_1">POSITION APPLIED FOR</th>
                                            <td class="text_1"><input type="text" name="position" required autocomplete="off"></td>
                                            <th scope="row" class="head_1">DATE AVAILABLE FOR WORK</th>
                                            <td class="text_1"><input type="date" name="workdate" required autocomplete="off"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                                <div class="add-textfield">
                                    <p>Do you have the legal right to work in the United States?</p>
                                    <div class="checkbox_2">
                                        <label><input type="radio" class="radio" value="1"  id="1" name="permission" checked /><span>Yes</span></label>
                                        <label><input type="radio" class="radio" value="0" id="0" name="permission" /><span>No</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                 
                </div>
            </div>
            <div class="first-section">
                <h2>PREVIOUS THREE YEARS RESIDENCY</h2>
                <div class="employee-form">
                 
                        <div class="row">
                            <div class="col-12">
                                 <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">STREET</th>
                                            <th scope="col">CITY</th>
                                            <th scope="col">STATE</th>
                                            <th scope="col">ZIP CODE</th>
                                            <th scope="col"># OF YEARS AT ADDRESS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <th scope="row" class="head_1" name="current_status1" value="Current1">Current</th>
                                            <input type="hidden" name="current_status" value="CURRENT">
                                            <td class="text_1"><textarea type="text" name="current_street" rows="2" required autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="current_city" required autocomplete="off"></textarea></td>
                                            <td class="text_1"><input type="text" name="current_state" required autocomplete="off"></td>
                                            <td class="text_1"><input type="number" name="current_zipcode" required autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="current_address" required autocomplete="off"></textarea></td>
                                        </tr>
                                        <tr>
                                           
                                            <th scope="row" class="head_1" name="mailing_status1" value="MAILING1">MAILING</th>
                                             <input type="hidden" name="mailing_status" value="MAILING">
                                            <td class="text_1"><textarea type="text" name="mailing_street" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="mailing_city" autocomplete="off"></textarea></td>
                                            <td class="text_1"><input type="text" name="mailing_state" autocomplete="off"></td></input></td>
                                            <td class="text_1"><input type="number" name="mailing_zipcode" autocomplete="off"></td></input></td>
                                            <td class="text_1"><textarea type="text" name="mailing_address" autocomplete="off"></textarea></td>
                                        </tr>
                                        <tr>
                                           
                                            <th scope="row" class="head_1"  name="previous1_status1" value="PREVIOUS11" >PREVIOUS 1 YEAR</th>
                                             <input type="hidden" name="previous1_status" value="PREVIOUS1">
                                            <td class="text_1"><textarea type="text" name="previous1_street" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="previous1_city" autocomplete="off"></textarea></td>
                                            <td class="text_1"><input type="text" name="previous1_state" autocomplete="off"></input></td>
                                            <td class="text_1"><input type="number" name="previous1_zipcode" autocomplete="off"></input></td>
                                            <td class="text_1"><textarea type="text" name="previous1_address" autocomplete="off"></textarea></td>
                                        </tr>
                                        <tr>
                                           
                                            <th scope="row" class="head_1" name="previous2_status1" value="PREVIOUS21">PREVIOUS 2 YEAR</th>
                                             <input type="hidden" name="previous2_status" value="PREVIOUS2">
                                            <td class="text_1"><textarea type="text" name="previous2_street" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="previous2_city" autocomplete="off"></textarea></td>
                                            <td class="text_1"><input type="text" name="previous2_state" autocomplete="off"></td>
                                            <td class="text_1"><input type="number" name="previous2_zipcode" autocomplete="off"></input></td>
                                            <td class="text_1"><textarea type="text" name="previous2_address" autocomplete="off"></textarea></td>
                                        </tr>
                                        <tr>
                                            
                                            <th scope="row" class="head_1" name="previous3_status1" value="PREVIOUS31">PREVIOUS 3 YEAR</th>
                                            <input type="hidden" name="previous3_status" value="PREVIOUS3">
                                            <td class="text_1"><textarea type="text" name="previous3_street" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="previous3_city" autocomplete="off"></textarea></td>
                                            <td class="text_1"><input type="text" name="previous3_state" autocomplete="off"></td>
                                            <td class="text_1"><input type="number" name="previous3_zipcode" autocomplete="off"></input></td>
                                            <td class="text_1"><textarea type="text" name="previous3_address" autocomplete="off"></textarea></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                   
                </div>
            </div>
            <div class="first-section">
                <h2>LICENSE INFORMATION</h2>
                <div class="employee-form">
                   
                        <div class="row">
                            <div class="col-12">
                                <p class="info_1">No person who operates a commercial motor vehicle shall at any time have more than one driver’s license (49 CFR 383.21). I certify that I do not have more than one motor vehicle license, the information for which is listed below. Include all licenses held for the past 3 years; attach additional sheets if needed.</p>
                                 <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">STATE</th>
                                            <th scope="col">LICENSE #</th>
                                            <th scope="col">TYPE/CLASS</th>
                                            <th scope="col">ENDORSEMENTS</th>
                                            <th scope="col">EXPIRATION DATE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           <input type="hidden" name="currentlicense_stauts" value="current">
                                            <td class="text_1"><input type="text" name="currentlicense_state" required autocomplete="off"></td>
                                            <td class="text_1"><textarea type="text" name="currentlicense_licenseno" rows="2" required autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="currentlicense_class" required autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="currentlicense_endorsement" rows="2" required autocomplete="off"></textarea></td>
                                            <td class="text_1"><input type="date" name="currentlicense_expriedate" required autocomplete="off"></td>
                                        </tr>
                                        <tr><td colspan="5" style="text-align: center;">PREVIOUSLY HELD LICENSES</td></tr>
                                        <tr>
                                           <input type="hidden" name="previous1license_stauts" value="previous">
                                            <td class="text_1"><input type="text" name="previous1license_state" autocomplete="off"></td>
                                            <td class="text_1"><textarea type="text" name="previous1license_licenseno" rows="2" autocomplete="off" ></textarea></td>
                                            <td class="text_1"><textarea type="text" name="previous1license_class" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="previous1license_endorsement" rows="2" autocomplete="off"></textarea ></td>
                                            <td class="text_1"><input type="date" name="previous1license_expriedate" autocomplete="off"></td>
                                        </tr>
                                        <tr>
                                           <input type="hidden" name="previous2license_stauts"value="previous">
                                            <td class="text_1"><input type="text" name="previous2license_state" autocomplete="off"></td>
                                            <td class="text_1"><textarea type="text" name="previous2license_licenseno" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="previous2license_class" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="previous2license_endorsement" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><input type="date" name="previous2license_expriedate" autocomplete="off"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                   
                </div>
            </div>
            <div class="first-section">
                <h2>DRIVING EXPERIENCE</h2>
                <div class="employee-form">
                   
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">CLASS OF EQUIPMENT</th>
                                            <th scope="col">TYPE OF EQUIPMENT (VAN, TANK, FLAT, ETC.)</th>
                                            <th scope="col">DATE FROM</th>
                                            <th scope="col">DATE TO</th>
                                            <th scope="col">APPROX # OF MILES (TOTAL)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>  
                                            <th scope="row" class="head_1" name="straight_class1" value="STRAIGHT TRUCK1">STRAIGHT TRUCK</th>
                                            <input type="hidden" name="straight_class"value="STRAIGHT_TRUCK">
                                            <td class="text_1"><textarea type="text" name="straight_equipment" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><input type="date" name="straight_fromdate" autocomplete="off"></td>
                                            <td class="text_1"><input type="date" name="straight_todate" autocomplete="off"></td>
                                            <td class="text_1"><input type="number" name="straight_totalmile" autocomplete="off"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="head_1" name="semi_class1" value="STRACTOR & SEMI-TRAILER1">TRACTOR & SEMI-TRAILER</th>
                                             <input type="hidden" name="semi_class"value="STRACTOR & SEMI-TRAILER">
                                             <td class="text_1"><textarea type="text" name="semi_equipment" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><input type="date" name="semi_fromdate" autocomplete="off"></td>
                                            <td class="text_1"><input type="date" name="semi_todate" autocomplete="off"></td>
                                            <td class="text_1"><input type="number" name="semi_totalmile" autocomplete="off"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="head_1" name="tailer_class1" value="TRACTOR & 2 TRAILERS">TRACTOR & 2 TRAILERS</th>
                                             <input type="hidden" name="tailer_class"value="TRACTOR & 2 TRAILERS">
                                            <td class="text_1"><textarea type="text" name="tailer_equipment" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><input type="date" name="tailer_fromdate" autocomplete="off"></td>
                                            <td class="text_1"><input type="date" name="tailer_todate" autocomplete="off"></td>
                                            <td class="text_1"><input type="number" name="tailer_totalmile" autocomplete="off"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="head_1" name="tanker_class" value="TRACTOR & 2 TRAILERS">TRACTOR & TANKER</th>
                                             <input type="hidden" name="tanker_class"value="TRACTOR & 2 TRAILERS">
                                            <td class="text_1"><textarea type="text" name="tanker_equipment" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><input type="date" name="tanker_fromdate" autocomplete="off"></td>
                                            <td class="text_1"><input type="date" name="tanker_todate" autocomplete="off"></td>
                                            <td class="text_1"><input type="number" name="tanker_totalmile" autocomplete="off"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="head_1" name="other_class" value="TRACTOR & 2 TRAILERS">OTHER</th>
                                             <input type="hidden" name="other_class"value="TRACTOR & 2 TRAILERS">
                                           <td class="text_1"><textarea type="text" name="other_equipment" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><input type="date" name="other_fromdate" autocomplete="off"></td>
                                            <td class="text_1"><input type="date" name="other_todate" autocomplete="off"></td>
                                            <td class="text_1"><input type="number" name="other_totalmile" autocomplete="off"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                   
                </div>
            </div>
            <div class="first-section">
                <h2>ACCIDENT RECORD FOR THE PAST 3 YEARS</h2>
                <div class="employee-form">
                  
                        <div class="row">
                            <div class="col-12">
                                <p class="info_1 info_2">Attach additional sheet if more space is needed. Check this box if none  <label><input type="checkbox" class="radio" value="1" name="fooby[1][]" /></label> </p>
                                 <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">DATES(List most recent first)</th>
                                            <th scope="col">NATURE OF ACCIDENT (Head-on, rear-end, upset, etc.)</th>
                                            <th scope="col"># FATALITIES</th>
                                            <th scope="col"># INJURIES</th>
                                            <th scope="col">CHEMICAL SPILLS (Y/N)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           <input type="hidden" name="accidentrecord1" value="record1" >  
                                            <td class="text_1"><input type="date" name="record1_date" autocomplete="off"></td>
                                            <td class="text_1"><textarea type="text" name="record1_accident" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="record1_fatalities" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="record1_injuries" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><input type="tex" name="record1_spills" autocomplete="off"></td>
                                        </tr>
                                        <tr> 
                                            <input type="hidden" name="accidentrecord2" value="record2" >   
                                            <td class="text_1"><input type="date" name="record2_date" autocomplete="off"></td>
                                            <td class="text_1"><textarea type="text" name="record2_accident" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="record2_fatalities" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="record2_injuries" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><input type="tex" name="record2_spills" autocomplete="off"></td>
                                        </tr>
                                        <tr>
                                            <input type="hidden" name="accidentrecord3" value="record3" >    
                                            <td class="text_1"><input type="date" name="record3_date" autocomplete="off"></td>
                                            <td class="text_1"><textarea type="text" name="record3_accident" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="record3_fatalities" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="record3_injuries" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><input type="tex" name="record3_spills" autocomplete="off"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    
                </div>
            </div>
            <div class="first-section">
                <h2>TRAFFIC CONVICTIONS AND FORFEITURES FOR THE PAST 3 YEARS (OTHER THAN PARKING VIOLATIONS)</h2>
                <div class="employee-form">
                   
                        <div class="row">
                            <div class="col-12">
                                <p class="info_1 info_2">Attach additional sheet if more space is needed. Check this box if none  <label><input type="checkbox" class="radio" value="1" name="fooby[1][]" /></label> </p>
                                 <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">DATE CONVICTED <br> (Month/Year)</th>
                                            <th scope="col">VIOLATION</th>
                                            <th scope="col">STATE OF VIOLATION</th>
                                            <th scope="col">PENALTY (Forfeited bond, collateral, and/or points)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <input type="hidden" name="convicted1" value="convicted1">
                                            <td class="text_1"><input type="month" name="convicted1_month" autocomplete="off"></td>
                                            <td class="text_1"><textarea type="text" name="convicted1_violation" rows="2" autocomplete="off"> </textarea></td>
                                            <td class="text_1"><textarea type="text" name="convicted1_stateviolation" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="convicted1_penalty" rows="2" autocomplete="off"></textarea></td>
                                        </tr>
                                        <tr> 
                                         <input type="hidden" name="convicted2" value="convicted2"> 
                                            <td class="text_1"><input type="month" name="convicted2_month" autocomplete="off"></td>
                                            <td class="text_1"><textarea type="text" name="convicted2_violation" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="convicted2_stateviolation" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="convicted2_penalty" rows="2" autocomplete="off"></textarea></td>
                                        </tr>
                                        <tr>    
                                         <input type="hidden" name="convicted3" value="convicted3"> 
                                            <td class="text_1"><input type="month" name="convicted3_month" autocomplete="off"></td>
                                            <td class="text_1"><textarea type="text" name="convicted3_violation" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="convicted3_stateviolation" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="convicted3_penalty" rows="2" autocomplete="off"></textarea></td>
                                        </tr>
                                        <tr> 
                                          <input type="hidden" name="convicted4" value="convicted4"> 
                                            <td class="text_1"><input type="month" name="convicted4_month" autocomplete="off"></td>
                                            <td class="text_1"><textarea type="text" name="convicted4_violation" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="convicted4_stateviolation" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="convicted4_penalty" rows="2" autocomplete="off"></textarea></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                                <div class="add-textfield">
                                    <p>Have you ever been denied a license, permit, or privilege to operate a motor vehicle?</p>
                                    <div class="checkbox_2">
                                        <label><input class="explain-box" type="checkbox" class="radio" value="1" name="restriction" /><span>Yes</span></label>
                                        <label><input class="explain-box1" type="checkbox" class="radio" value="0" name="restriction" /><span>No</span></label>
                                    </div>
                                </div>
                                <div class="explain explain1">
                                    <p>If yes, explain<textarea type="text" name="restriction_description" rows="3"></textarea></p>
                                </div>
                                <div class="add-textfield">
                                    <p>Has any license, permit, or privilege ever been suspended or revoked?</p>
                                    <div class="checkbox_2">
                                        <label><input class="explain-box2" type="checkbox" class="radio" value="1" name="suspended" /><span>Yes</span></label>
                                        <label><input class="explain-box3" type="checkbox" class="radio" value="0" name="suspended" /><span>No</span></label>
                                    </div>
                                </div>
                                <div class="explain explain2">
                                    <p>If yes, explain<textarea type="text" name="suspended_description" rows="3" autocomplete="off"></textarea></p>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
            <div class="first-section">
                <h2>EMPLOYMENT HISTORY</h2>
                <div class="employee-form">
                   
                        <div class="row">
                            <div class="col-12">
                                <p class="info_1 info_3">The Federal Motor Carrier Safety Regulations (49 CFR 391.21)require that all applicants wishing to drive a commercial vehicle list all employment for the last three (3) years.<strong> In addition, if you have driven a commercial vehicle previously, you must provide employment history for an additional seven (7) years (for a total of ten (10) years). Any gaps in employment in excess of one (1) month must be explained.</strong></p>

                                <p class="info_1 info_3">Start with the last or current position, including any military experience, and work  backward (attach separate sheets if necessary). You are required to list the complete mailing address, including street number, city, state, zip; and complete all other information.</p>
                                <div class="table-1">
                                     <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="th1" scope="col" colspan="4">CURRENT (MOST RECENT) EMPLOYER</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <input type="hidden" name="current" value="CURRENT">
                                                <th scope="row" class="head_1">Name</th>
                                                <td class="text_1"><input type="text" name="current_cname" autocomplete="off" ></td>
                                                <th scope="row" class="head_1">Phone Number</th>
                                                <td class="text_1"><input type="number" name="current_cmobileno" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="head_1">POSITION HELD</th>
                                                <td class="text_1"><input type="text" name="current_position" autocomplete="off"></td>
                                                <th scope="row" class="head_1">Salary</th>
                                                <td class="text_1"><input type="number" name="current_salary" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="head_1">address</th>
                                                <td class="text_1"><textarea type="text" name="current_caddress" rows="3" autocomplete="off"></textarea></td>
                                                <th scope="row" class="head_1">REASON FOR LEAVING</th>
                                                <td class="text_1"><textarea type="text" name="current_reason" rows="3" autocomplete="off"></textarea></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="head_1">From month/year</th>
                                                <td class="text_1"><input type="month" name="current_frommonth" autocomplete="off"></td>
                                                <th scope="row" class="head_1">to month/year</th>
                                                <td class="text_1"><input type="month" name="current_tomonth" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="head_1">EXPLAIN ANY GAPS IN<br> EMPLOYMENT (Include<br>  month/year &reason)</th>
                                                <td class="text_1" colspan="4"><textarea type="text" name="current_explain" rows="3" autocomplete="off"></textarea></td> 
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                    <div class="add-textfield add-textfield1">
                                        <p>While employed here, were you subject to the Federal Motor Carrier Safety Regulations?</p>
                                        <div class="checkbox_2">
                                            <label><input type="checkbox" class="radio" value="1" name="current_regulation" /><span>Yes</span></label>
                                            <label><input type="checkbox" class="radio" value="0" name="current_regulation" /><span>No</span></label>
                                        </div>
                                    </div>
                                    <div class="add-textfield add-textfield1">
                                        <p>Was the job designated as a safety-sensitive function in any Department of Transportation-regulated mode subject to alcohol and controlled substances testing as required by 49 CFR, part 40?</p>
                                        <div class="checkbox_2">
                                            <label><input type="checkbox" class="radio" value="1" name="current_CFR" /><span>Yes</span></label>
                                            <label><input type="checkbox" class="radio" value="0" name="current_CFR" /><span>No</span></label>
                                        </div>
                                    </div> 
                                </div>
                                <div class="table-1">
                                     <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="th1" scope="col" colspan="4">SECOND (MOST RECENT) EMPLOYER</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <input type="hidden" name="second" value="SECOND" >
                                                <th scope="row" class="head_1">Name</th>
                                                <td class="text_1"><input type="text" name="second_cname" autocomplete="off"></td>
                                                <th scope="row" class="head_1">Phone Number</th>
                                                <td class="text_1"><input type="number" name="second_cmobileno" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="head_1">POSITION HELD</th>
                                                <td class="text_1"><input type="text" name="second_position" autocomplete="off"></td>
                                                <th scope="row" class="head_1">Salary</th>
                                                <td class="text_1"><input type="number" name="second_salary" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="head_1">address</th>
                                                <td class="text_1"><textarea type="text" name="second_caddress" rows="3" autocomplete="off"></textarea></td>
                                                <th scope="row" class="head_1">REASON FOR LEAVING</th>
                                                <td class="text_1"><textarea type="text" name="second_reason" rows="3" autocomplete="off"></textarea></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="head_1">From month/year</th>
                                                <td class="text_1"><input type="month" name="second_frommonth" autocomplete="off"></td>
                                                <th scope="row" class="head_1">to month/year</th>
                                                <td class="text_1"><input type="month" name="second_tomonth" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="head_1">EXPLAIN ANY GAPS IN<br> EMPLOYMENT (Include<br>  month/year &reason)</th>
                                                <td class="text_1" colspan="4"><textarea type="text" name="second_explain" rows="3" autocomplete="off"></textarea></td> 
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                    <div class="add-textfield add-textfield1">
                                        <p>While employed here, were you subject to the Federal Motor Carrier Safety Regulations?</p>
                                        <div class="checkbox_2">
                                            <label><input type="checkbox" class="radio" value="1" name="second_regulation" /><span>Yes</span></label>
                                            <label><input type="checkbox" class="radio" value="0" name="second_regulation" /><span>No</span></label>
                                        </div>
                                    </div>
                                    <div class="add-textfield add-textfield1">
                                        <p>Was the job designated as a safety-sensitive function in any Department of Transportation-regulated mode subject to alcohol and controlled substances testing as required by 49 CFR, part 40?</p>
                                        <div class="checkbox_2">
                                            <label><input type="checkbox" class="radio" value="1" name="second_CFR" /><span>Yes</span></label>
                                            <label><input type="checkbox" class="radio" value="0" name="second_CFR" /><span>No</span></label>
                                        </div>
                                    </div> 
                                </div>
                                <div class="table-1">
                                     <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="th1" scope="col" colspan="4">THIRD (MOST RECENT) EMPLOYER</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <input type="hidden" name="third" value="THIRD">
                                                <th scope="row" class="head_1">Name</th>
                                                <td class="text_1"><input type="text" name="third_cname" autocomplete="off"></td>
                                                <th scope="row" class="head_1">Phone Number</th>
                                                <td class="text_1"><input type="number" name="third_cmobileno" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="head_1">POSITION HELD</th>
                                                <td class="text_1"><input type="text" name="third_position" autocomplete="off"></td>
                                                <th scope="row" class="head_1">Salary</th>
                                                <td class="text_1"><input type="number" name="third_salary" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="head_1">address</th>
                                                <td class="text_1"><textarea type="text" name="third_caddress" rows="3" autocomplete="off"></textarea></td>
                                                <th scope="row" class="head_1">REASON FOR LEAVING</th>
                                                <td class="text_1"><textarea type="text" name="third_reason" rows="3" autocomplete="off"></textarea></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="head_1">From month/year</th>
                                                <td class="text_1"><input type="month" name="third_frommonth" autocomplete="off"></td>
                                                <th scope="row" class="head_1">to month/year</th>
                                                <td class="text_1"><input type="month" name="third_tomonth" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="head_1">EXPLAIN ANY GAPS IN<br> EMPLOYMENT (Include<br>  month/year &reason)</th>
                                                <td class="text_1" colspan="4"><textarea type="text" name="third_explain" rows="3" autocomplete="off"></textarea></td> 
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                    <div class="add-textfield add-textfield1">
                                        <p>While employed here, were you subject to the Federal Motor Carrier Safety Regulations?</p>
                                        <div class="checkbox_2">
                                            <label><input type="checkbox" class="radio" value="1" name="third_regulation" /><span>Yes</span></label>
                                            <label><input type="checkbox" class="radio" value="0" name="third_regulation" /><span>No</span></label>
                                        </div>
                                    </div>
                                    <div class="add-textfield add-textfield1">
                                        <p>Was the job designated as a safety-sensitive function in any Department of Transportation-regulated  subject to alcohol and controlled substances testing as required by 49 CFR, part 40?</p>
                                        <div class="checkbox_2">
                                            <label><input type="checkbox" class="radio" value="1" name="third_CFR" /><span>Yes</span></label>
                                            <label><input type="checkbox" class="radio" value="1" name="third_CFR" /><span>No</span></label>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                   
                </div>
            </div>
            <div class="first-section">
                <h2>EDUCATION</h2>
                <div class="employee-form">
                   
                        <div class="row">
                            <div class="col-12">
                                 <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">SCHOOL</th>
                                            <th scope="col">NAME & LOCATION</th>
                                            <th scope="col">COURSE OF STUDY</th>
                                            <th scope="col">YEARS COMPLETED</th>
                                            <th scope="col">GRADUATE Y/N</th>
                                            <th scope="col">DETAILS</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <tr>  

                                          
                                            <th scope="row" class="head_1">High School</th>
                                              <input type="hidden" name="eduction1" value="High School">
                                            <td class="text_1"><textarea type="text" name="school_name" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="school_study" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><input type="number" name="school_year" autocomplete="off"></td>
                                            <td class="text_1"><input type="text" name="school_graduate" autocomplete="off"></td>
                                            <td class="text_1"><textarea type="text" name="school_details" rows="2" autocomplete="off"></textarea></td>
                                        </tr>
                                        <tr>  
                                            <th scope="row" class="head_1">College</th>
                                              <input type="hidden" name="eduction2" value="College" >
                                            <td class="text_1"><textarea type="text" name="college_name" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="college_study" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><input type="number" name="college_year" autocomplete="off"></td>
                                             <td class="text_1"><input type="text" name="college_graduate" autocomplete="off"></td>
                                            <td class="text_1"><textarea type="text" name="college_details" rows="2" autocomplete="off"></textarea></td>
                                        </tr>
                                        <tr>  
                                            <th scope="row" class="head_1">Other</th>
                                            <input type="hidden" name="eduction3" value="Other">
                                            <td class="text_1"><textarea type="text" name="other_name" rows="2" autocomplete="off"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="other_study" rows="2" autocomplete="off"> </textarea></td>
                                            <td class="text_1"><input type="number" name="other_year" autocomplete="off"></td>
                                            <td class="text_1"><input type="text" name="other_graduate" autocomplete="off"></td>
                                            <td class="text_1"><textarea type="text" name="other_details" rows="2" v></textarea></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                   
                </div>
            </div>
            <div class="first-section">
                <h2>OTHER QUALIFICATIONS</h2>
                <div class="employee-form">
                   
                        <div class="row">
                            <div class="col-12">
                                <div class="last-quali text_1">
                                    <label>Please list any other qualifications that you have and which you believe should be considered.</label>
                                    <textarea type="text" name="other_qualifications" rows="3" autocomplete="off"></textarea>
                                </div>
                            </div>
                        </div>
                   
                </div>
            </div>
            <div class="first-section">
                <h2>to be read</h2>
                <div class="employee-form read">
                    <p> I authorize you to make investigations (including contacting current and prior employers) into my personal, employment, financial, medical history, and other related matters as may be necessary for arriving at an employment decision. I hereby release employers, schools, health care providers, and other persons from all liability in responding to inquiries and releasing information in connection with my application.</p>
                    <p>In the event of employment, I understand that false or misleading information given in my application or interview(s) may result in discharge. I also understand that I am required to abide by all rules and regulations of the Company.</p>
                    <p>I understand that the information I provide regarding my current and/or prior employers may be used, and those employer(s) will be contacted for the purpose of investigating my safety performance history as required by 49 CFR 391.23. I understand that I have the right to:</p>
                    <ul>
                        <li>Review information provided by current/previous employers;</li>
                        <li>Have errors in the information corrected by previous employers, and for those previous employers to resend the corrected information to the prospective employer; and</li>
                        <li>Have a rebuttal statement attached to the alleged erroneous information, if the previous employer(s) and I cannot agree on the accuracy of the information.</li>
                    </ul>
                    <p>This certifies that I completed this application and that all entries on it and information in it are true and complete to the best of my knowledge. Note: A motor carrier may require an applicant to provide more information than that required by the Federal Motor Carrier Safety Regulations.</p>
                </div>
            </div>
            <div class="button_container_11">
             <button value="submit">submit</button> 
            <!--  <div class="btn-1" value="submit"><span>submit</span></div>  -->
            </div>
        </form>

        </div>
    </div>
    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title" id="exampleModalLabel">Apply</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{url('/sendjobapplication')}}" enctype="multipart/form-data">
                      @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" id="" placeholder="Name" name="name" required autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-6">
                                <div class="form-group">
                                    <label for="email1">Email address</label>
                                    <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required autocomplete="off">
                                </div>
                            </div> 
                            <div class="col-lg-6 col-md-6 col-6">
                                <div class="form-group">
                                    <label for="">Apply For</label>
                                    <input type="text" class="form-control" id="vacancy" placeholder="Apply For" name="vacancy" required autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-6">
                                <div class="form-group">
                                    <label for="">Contact Number</label>
                                    <input type="text" class="form-control" id="mobileno" placeholder="Contact Number" name="mobileno" required autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-6">
                                <div class="form-group">
                                    <label for="">Experience </label>
                                    <input type="text" class="form-control" id="" placeholder="Experiance" name="experience" required autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group file1">
                                    <label for="myfile">Select a file</label>
                                    <input type="file" class="form-control" id="resume" name="resume" accept=".pdf,.doc" required autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="">Message</label>
                                    <textarea type="text" rows="3" class="form-control" id="description" name="description" placeholder="Message" required autocomplete="off"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-top-0 d-flex justify-content-center text-center">
                        <div class="sub2">
                            <input type="submit" value="Send Message">
                        </div>
                    </div>
                </form>
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

          $(function() {
                 setTimeout(function() { $("#hideDiv").fadeOut(1500); }, 3000)

             });

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


        $(document).ready(function() {
            $(".set").on("click", function() {
                if ($(this).hasClass("active")) {
                    $(this).removeClass("active");
                    $(this)
                        .children(".content")
                        .slideUp(200);
                    $(".set > a .set-plus")
                        .removeClass("fal fa-times")
                        .addClass("fa-plus");
                } 
                else {
                    $(".set > a .set-plus")
                        .removeClass("fal fa-times")
                        .addClass("fa-plus");
                    $(this)
                        .find(".set-plus")
                        .removeClass("fa-plus")
                        .addClass("fal fa-times");
                    $(".set").removeClass("active");
                    $(this).addClass("active");
                    $(".content").slideUp(200);
                    $(this)
                        .children(".content")
                        .slideDown(200);
                }
            });
        });


        $(document).ready(function(){
            $('.buttons').click(function(){
                $(this).addClass('active').siblings().removeClass('active');
                var filter = $(this).attr('data-filter')
                if(filter == 'all'){
                    $('.image').show(400);
                }else{
                    $('.image').not('.'+filter).hide(200);
                    $('.image').filter('.'+filter).show(400);
                }
            });
        });

        $(function () {
            $(".image-container .post").slice(0, 2).show();
            $("body").on('click touchstart', '.load-more', function (e) {
                e.preventDefault();
                $(".post:hidden").slice(0, 2).slideDown();
                if ($(".post:hidden").length == 0) {
                    $(".load-more").css('visibility', 'hidden');
                }
                $('html,body').animate({
                    scrollTop: $(this).offset().top
                }, 1000);
            });
        });

        // function([string1, string2],target id,[color1,color2])    
//  consoleText(['Click Me.', 'Click Me'], 'text',['#f17ac1','#f17ac1']);

// function consoleText(words, id, colors) {
//   if (colors === undefined) colors = ['#fff'];
//   var visible = true;
//   var con = document.getElementById('console');
//   var letterCount = 1;
//   var x = 1;
//   var waiting = false;
//   var target = document.getElementById(id)
//   target.setAttribute('style', 'color:' + colors[0])
//   window.setInterval(function() {

//     if (letterCount === 0 && waiting === false) {
//       waiting = true;
//       target.innerHTML = words[0].substring(0, letterCount)
//       window.setTimeout(function() {
//         var usedColor = colors.shift();
//         colors.push(usedColor);
//         var usedWord = words.shift();
//         words.push(usedWord);
//         x = 1;
//         target.setAttribute('style', 'color:' + colors[0])
//         letterCount += x;
//         waiting = false;
//       }, 1000)
//     } else if (letterCount === words[0].length + 1 && waiting === false) {
//       waiting = true;
//       window.setTimeout(function() {
//         x = -1;
//         letterCount += x;
//         waiting = false;
//       }, 1000)
//     } else if (waiting === false) {
//       target.innerHTML = words[0].substring(0, letterCount)
//       letterCount += x;
//     }
//   }, 120)
//   window.setInterval(function() {
//     if (visible === true) {
//       con.className = 'console-underscore hidden'
//       visible = false;

//     } else {
//       con.className = 'console-underscore'

//       visible = true;
//     }
//   }, 400)
// };

$("input:checkbox").on('click', function() {
  var $box = $(this);
  if ($box.is(":checked")) {
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});

$(".explain-box").click(function(){
    $(".explain1").show();
});

$(".explain-box1").click(function(){
    $(".explain1").hide();
});

$(".explain-box2").click(function(){
    $(".explain2").show();
});

$(".explain-box3").click(function(){
    $(".explain2").hide();
});




    </script>
</body>
</html>