@extends('layouts.app')

@section('content')

    <div class="co_part-2">
        <div class="fix-part-2">
            @foreach($allbanner as $a)
            @if($a->name == 'Services')
            <div class="img1">
                <img src="uploads/{{$a->image}}">
            </div>
           
            <div class="about">
                <div class="container">
                    <h2>Our Services</h2>
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
    <div class="co_service">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 service-flex">
                    <ul class="nav nav-tabs nav1" id="myTab" role="tablist">
                     @foreach($services as $key =>$s)
                        <li class="nav-item">
                            <a class="nav-link " id="{{$key}}-tab" data-toggle="tab" href="#{{$key}}" role="tab" aria-controls="{{$key}}" aria-selected="false">{{$s->title}}</a>
                        </li>   
                        @endforeach   
                      
                    </ul>
                    <div class="contact-tab1">
                        <h2>We Are Transport & Logistics Experts</h2>
                        <div class="btn_container">
                            <a class="quote_id" href="{{url('/contact')}}">
                                <div class="btn-top"><span>Contact Us</span></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content" id="myTabContent">
                     @foreach($services as $key =>$sr)
                        <div class="tab-pane fade show" id="{{$key}}" role="tabpanel" aria-labelledby="{{$key}}-tab" >
                            <div class="service-img">
                                <img src="uploads/{{$sr->image}}">
                            </div>
                            <div class="service-info1">
                                <h1>{{$sr->name}}</h1>
                              
                              </div>
                       <div class="set-dec">
                            {!! $sr->long_desc  !!}
                        </div> 

                      
                       <!--  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="service-img">
                                <img src="image/service-1.jpg">
                            </div>
                            <div class="service-info1">
                                <h1>Your Dependable Full Truckload Transportation Company</h1>
                                <p>We’re your reliable full truckload transportation company in North Carolina. No matter how large or small your product is—and no matter the size of your total shipment—R&R Transportation, Inc. has both the truck drivers and equipment to get it there on time. Centrally located in Greensboro, North Carolina, we provide full truckload shipping and logistics services for our customers throughout the East Coast. Our family-run business values hard work, honesty, respect, attention to detail, commitment, teamwork, and personal service with a smile. With you’ll find that our work environment is built on courtesy, friendliness, top-notch service, dedication, and enthusiasm. We are committed to providing our customers with exceptional service.</p>
                                <div class="set-dec">
                                    <h6>Our full truckload and next-day trucking services provide the following trailer sizes with air-ride options for optimal cargo protection:</h6>
                                    <ul>
                                        <li>48-foot trailers 53-foot trailers</li>
                                        <li>Flatbed trailers</li>
                                    </ul>
                                </div>
                                <div class="set-dec">
                                    <h6>Refrigerated trailers R&R Transportation Inc. specializes in the following truckload transportation services in North Carolina:</h6>
                                    <ul>
                                        <li>Same-day local deliveries Next-day transfers
                                            <ul>
                                                <li>Full truckload transports</li>
                                                <li>24/7 trucking services</li>
                                                <li>Freight Shipping Services</li>
                                            </ul>
                                        </li>
                                        <li>Business Shipments</li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
 -->
                     
                    </div>
                     @endforeach   
                </div>
            </div>
        </div>
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


        $('.nav li a').click(function(){
  
     $('.tab-pane').hide();
     $('.nav li a.active').removeClass('active');
     $(this).addClass('active');
     
     var panel = $(this).attr('href');
     $(panel).fadeIn(1000);
     
     return false;  // prevents link action
    
  });  // end click 

     $('.nav li:first a').click();

    </script>
 @endsection