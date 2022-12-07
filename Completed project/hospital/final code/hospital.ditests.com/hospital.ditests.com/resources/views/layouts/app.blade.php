<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mangala Diagnostic Centre</title>
    <link rel="stylesheet" type="text/css" href="/css/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
     <link rel="icon" href="image/logo.png">
     <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="body">
    <div class="co_header">
        <div class="container">
            <div class="header-1">
                <div class="row row1">
                    <div class="col-lg-3 col-md-2">
                        <ul class="social-link text-center">
                            <li><a href="{{$fb_link}}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{$twitter_link}}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{$insta_link}}"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-9 col-md-10">
                        <ul class="social-link social-link1">
                        <li>
                            <a href="mailto:{{$email1}}"><i class="fas fa-envelope"></i>
                            <span>{{$email1}}</span></a>
                        </li>
                        <li>
                            <a href="tel:{{$mobileno1}}"><i class="fas fa-phone-alt"></i>
                            <span>{{$mobileno1}}</span></a>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="inner-header" id="dynamic">
        <div class="container">
            <div class="header-2">
                <div class="row row1">
                    <div class="col-lg-3 col-md-2">
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="image/logo.png"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-8">
                        <div class="menu-desk">
                            <ul class="menu1 cleafix">
                                  <li><a href="{{url('/')}}">Home</a></li>
                                  <li><a href="{{url('/about')}}">About Us</a></li>
                                  <li><a href="{{url('/doctors')}}">Doctors</a></li>
                                  <li class="parent"><a href="">Services</a>
                                    <ul class="children">
                                      <li><a href="{{url('/hospital_service')}}">Hospital</a></li>
                                      <li><a href="{{url('/diagnostic_services')}}">Diagnostic</a></li>
                                    </ul>
                                  </li>
                                  <li><a href="{{url('/gallary')}}">Gallery</a></li>
                                  <li><a href="{{url('/contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                     <div class="col-lg-2 col-md-2">
                        <div class="enquiry-btn" data-toggle="modal" data-target="#myModal"><i class="fal fa-arrow-circle-right"></i>Get Inquiry</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu" id="dynamic1">
        <div class="inner_m_manu">
            <div class="row row_1 ">
                <div class="col-md-6 col-6">
                    <ul class="social-link social-link1">
                        <li>
                            <a href="mailto:{{$email1}}"><i class="fas fa-envelope"></i></a>
                        </li>
                        <li>
                            <a href="tel:{{$mobileno1}}"><i class="fas fa-phone-alt"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-6">
                    <div class="enquiry-btn" data-toggle="modal" data-target="#myModal"><i class="fal fa-arrow-circle-right"></i> Get Inquiry</div>
                </div>
            </div>
        </div>
        <div class="row row_1 pa_1">
            <div class="col-md-6 col-6">
                <div class="logo">
                      <a href="{{url('/')}}"><img src="image/logo.png"></a>
                </div>      
            </div>
            <div class="col-md-6 col-6">
                 <div id="mySidepanel" class="sidepanel" style="height: 0px;">
                    <div class="m_menu">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="far fa-times-circle"></i></a>    
                        <a class="link" href="{{url('/')}}">Home</a>
                        <a class="link" href="{{url('/about')}}">About Us</a>
                        <a class="link" href="{{url('/doctors')}}">Doctors</a>
                        <a class="link ss_1">Services <i class="fal fa-chevron-down"></i></a>
                            <ul class="service-dropdown">
                                <li><a class="link" href="{{url('/hospital_service')}}">Hospital</a></li>
                                <li><a href="{{url('/diagnostic_services')}}">Diagnostic</a></li>
                            </ul>
                        <a class="link" href="{{url('/gallary')}}">Gallery</a>
                        <a class="link" href="{{url('/contact')}}">Contact Us</a>
                            
                    </div>
                </div>
                <button class="openbtn" onclick="openNav()"><i class="far fa-bars"></i></button>
            </div>
        </div> 
    </div>


    <div id="pageMessages"></div>
	<div>
  @yield('content')
</div>
 <div class="co_footer">
        <div class="footer-img"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-12 col-12">
                    <div class="footer f_about">
                        <h2 class="f-title">about us</h2>
                        <p>{!!$footer_about!!}</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-2 col-md-5 order_1 col-12">
                    <div class="footer footer1">
                        <h2 class="f-title">quick link</h2>
                        <a href="{{url('/about')}}">About us</a>
                        <a href="{{url('/hospital_service')}}">services</a>
                        <a href="{{url('/doctors')}}">doctors</a>
                        <a href="{{url('/contact')}}">contact us</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-7 order_2 col-12">
                    <div class="footer">
                        <h2 class="f-title">contact us</h2>
                        <ul class="con-home">
                            <li><i class="fa fa-home" aria-hidden="true"></i>
                                <p data-collapse-limit="120">{{$address}}</p>
                            </li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                <p><a href="mailto:{{$email1}}">{{$email1}}</a></p>    
                            </li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>
                                <p><a href="tel:{{$mobileno1}}">{{$mobileno1}}</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="site-footer-bottom">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer-bottom__inner">
                            <div class="site-footer-bottom__left">
                                <p>© Copyright 2021 by <a href="#">Layerdrops.com</a></p>
                            </div>
                            <div class="site-footer__social">
                                <a href="{{$twitter_link}}"><i class="fab fa-twitter"></i></a>
                                <a href="{{$fb_link}}"><i class="fab fa-facebook"></i></a>
                                <a href="{{$insta_link}}"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy">
        <a class="up-btn show-Z" href="#">
            <span class="fa fa-angle-double-up"></span>
        </a>
    </div>

     <div class="modal modal-address" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">GET INQUIRY</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" class="b-detail form12" id="sendmessage" name="sendmessage" method="POST">
                       @csrf
                        <div class="row">
                            <div class="col-md-6 check">
                                <input type="text" placeholder="First name" name="fname" id="fname" required autocomplete="off">
                            </div>
                            <div class="col-md-6 check">
                                <input type="text" placeholder="Last name" name="lname" id="lname" required autocomplete="off">
                            </div>
                            <div class="col-md-6 check">
                                <input type="email" placeholder="Email address" name="email" id="email" required autocomplete="off">
                            </div>
                            <div class="col-md-6 check">
                                <input type="number" placeholder="Phone Number" name="mobileno" id="mobileno" required autocomplete="off">
                            </div>
                            <div class="col-md-12 check">
                                <textarea type="number" placeholder="Message" name="description" id="description" rows="5" required autocomplete="off"></textarea>
                            </div>
                        </div>
                        <button class="btn_acele btn_black" id="submit" type="submit">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script type="text/javascript">
        $(window).scroll(function(){
            if ($(this).scrollTop() > 50) {
                $('#dynamic').addClass('newClass');
            } else {
                $('#dynamic').removeClass('newClass');
            }
        });

        $(window).scroll(function(){
            if ($(this).scrollTop() > 50) {
                $('#dynamic1').addClass('newClass');
            } else {
                $('#dynamic1').removeClass('newClass');
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
        
        $('.ss_1').click(function(){
          $('.service-dropdown').slideToggle();
        });

          $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': jQuery('#token').val()
        }
    });



    $("#submit").click(function(e){

     var param = $("#sendmessage").serialize();
     console.log(param);
     e.preventDefault();

        $.ajax({
           url:'/getinquiry',  
                   
           method:'POST',
          /* data:{

          "_token": "{{ csrf_token() }}", 
            param,

           },*/

           data:param,



        
   success: function(dataResult){
                  console.log(dataResult.success);
                
                  if(dataResult.success==200){

                    createAlert('','Success!','Your Inquiry submitted successfully!!.','success',true,true,'pageMessages');

                      $( '#sendmessage' ).each(function(){
                          this.reset();
                         });  

                       /* $('#myModal').modal('hide');  */  
                
                      }else{   
                     createAlert('','opps!','some value are missing!!.','danger',true,true,'pageMessages');

                    
              }
          }
       });
});




        $(document).ready(function (){
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                loop:true,
                margin:0,
                navSpeed:500,
                nav:true,
                dots: false,
                autoplay: true,
                items:1,
                navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
                responsive:{
                  0:{
                      items:1
                  },
                  600:{
                      items:1
                  },
                  1000:{
                      items:1
                }
            }
        });

        $('.service-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            focusOnSelect: true,
            prevArrow: '<div class="service-arrow slide-arrow prev-arrow"><i class="far fa-chevron-left"></i></div>',
            nextArrow: '<div class="service-arrow slide-arrow next-arrow"><i class="far fa-chevron-right"></i></div>',
            responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
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

        $('.client-slider').slick({
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
                    slidesToScroll: 1,
                  },
                },
            ],
        });

        $('.partner-slider').slick({
            autoplay: true,
            autoplaySpeed: 1500,
            slidesToShow: 5,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            focusOnSelect: true,
            // prevArrow: '<div class="service-arrow slide-arrow prev-arrow"><i class="far fa-chevron-left"></i></div>',
            // nextArrow: '<div class="service-arrow slide-arrow next-arrow"><i class="far fa-chevron-right"></i></div>',
            responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    adaptiveHeight: true,
                  },
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                  },
                },
            ],
        });

        $('.counter-count').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
                }, {          
                //chnage count up speed here
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });

          // add animate.css class(es) to the elements to be animated
          function setAnimation ( _elem, _InOut ) {
            // Store all animationend event name in a string.
            // cf animate.css documentation
            var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

            _elem.each ( function () {
              var $elem = $(this);
              var $animationType = 'animated ' + $elem.data( 'animation-' + _InOut );

              $elem.addClass($animationType).one(animationEndEvent, function () {
                $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
              });
            });
          }

        // Fired before current slide change
          owl.on('change.owl.carousel', function(event) {
              var $currentItem = $('.owl-item', owl).eq(event.item.index);
              var $elemsToanim = $currentItem.find("[data-animation-out]");
              setAnimation ($elemsToanim, 'out');
          });

        // Fired after current slide has been changed
          var round = 0;
          owl.on('changed.owl.carousel', function(event) {

              var $currentItem = $('.owl-item', owl).eq(event.item.index);
              var $elemsToanim = $currentItem.find("[data-animation-in]");
            
              setAnimation ($elemsToanim, 'in');
          })
          
          owl.on('translated.owl.carousel', function(event) {
            console.log (event.item.index, event.page.count);
            
              if (event.item.index == (event.page.count - 1))  {
                if (round < 1) {
                  round++
                  console.log (round);
                } else {
                  owl.trigger('stop.owl.autoplay');
                  var owlData = owl.data('owl.carousel');
                  owlData.settings.autoplay = true; //don't know if both are necessary
                  owlData.options.autoplay = true;
                  owl.trigger('refresh.owl.carousel');
                }
              }
          });

        });  

        function openNav() {
            document.getElementById("mySidepanel").style.height = "100%";
            }
            function closeNav() {
                document.getElementById("mySidepanel").style.height = "0";
            }
            
             $(document).on("click", '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });


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
    }, 3000);
  }
}

  $(function() {
                 setTimeout(function() { $("#hideDiv").fadeOut(1500); }, 3000)

             });
     
    </script>

    <style type="text/css">
        
    #pageMessages {
    position: fixed;
    top: 10%;
    right: 15px;
    width: 30%;
    z-index: 999999999;
}

.alert {
  position: relative;
}

.alert .close {
  position: absolute;
  top: 5px;
  right: 5px;
  font-size: 1em;
}

.alert .fa {
  margin-right:.3em;
}




    </style>

</body>
</html>