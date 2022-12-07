@extends('layouts.app')

@section('content') 

<style type="text/css">
   .text_1{
    -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
   } 
</style>

<div class="co_banner">
        <div class="owl-carousel owl-theme">

         @foreach($banner as $b)
            <div class="item">
                <div class="banner-image">
                    <img src="uploads/{{$b->image}}">
                </div>
                <div class="banner-content">
                    <h2 data-animation-in="flipInY" data-animation-out="animate-out fadeOutUp">{{$b->title}}</h2>

                       @foreach($maintitle as $m)

                            @if($b->id == $m->banner_id)

                              <p data-animation-in="flipInX" data-animation-out="animate-out fadeOutLeft">{{$m->more_maintitle}}</p>

                            @endif
                             
                            @endforeach

                 

                    <a href="{{url('/about')}}" class="banner-btn theme-btn" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight"><span class="btn-title">read more</span>
                        <span></span><span></span><span></span><span></span><span></span></a>
                </div>
            </div>
            @endforeach
            <!-- <div class="item">
                <div class="banner-image">
                    <img src="image/banner-2.jpg">
                </div>
                <div class="banner-content">
                    <h2 data-animation-in="flipInY" data-animation-out="animate-out fadeOutUp">Get Better Care For Your Health</h2>
                    <p data-animation-in="flipInX" data-animation-out="animate-out fadeOutLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id dolor pulvinar, mollis orci vitae, molestie elit. Maecenas scelerisque ipsum nibh, id imperdiet nulla lobortis nec.</p>
                    <a href="about.html" class="banner-btn theme-btn" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight">
                        <span class="btn-title">read more</span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div> -->
        </div>
    </div>
    <div class="co_facility">
        <div class="container">
            <div class="row">
                 @foreach($features as $f)
                <div class="col-lg-4 col-md-6 col-12 d-flex">
                    <div class="facility">
                        <div class="inner-facility">
                            <img class="v-1" src="uploads/{{$f->icon}}">
                            <img class="v-2" src="uploads/{{$f->icon1}}">
                            <h2>{{$f->name}}</h2>
                            <p>{{$f->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </div>
    <div class="co_about">
        <div class="container">
       
            <div class="row row1">
                <div class="col-lg-6 col-md-12">
                    <div class="inner-about">
                        <div class="about-img1">
                            <img src="uploads/{{$image}}">
                        </div>
                        <h2><strong>{{$int}}</strong>{!!$words !!} </h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-info">
                        <h2>{{$title}}</h2>
                        <p>{!! $description !!}</p>
                        <div class="author">
                            <div class="signature">
                                <img src="uploads/{{$sign_image}}" alt="signature">
                            </div>
                            <div class="intro">
                                <h5>{{$name}}</h5>
                                <span>{{$Designation}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="co_service">
        <div class="container">
            <h2 class="title">OUR SERVICES</h2>
            <div class="service-slider">
                @foreach($services as $keys=>$s)
                <div>
                    <div class="Service-details">
                        <div class="inner-service">
                            <div class="service-img">
                                <img class="s_1" src="uploads/{{$s->image2}}">
                                <img class="s_2" src="uploads/{{$s->image1}}">
                            </div>
                            <h4>{{$s->title}}</h4>
                            <p class="text_1">{{$s->description}}</p>
                            <div class="bottom">
                                <span>{{$keys+1}}</span>
                                <a href="{{url('/diagnostic_services')}}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
             
            </div>
        </div>
    </div>
    <div class="co_work">
        <div class="container">
            <h2 class="title">how to work</h2>
            <div class="inner-work">
                <div class="row">
                    
                    @foreach($workstep as $w)
                    <div class="col-lg-3 col-md-6 col-12 main-work">
                        <div class="set-work">
                            <div class="work-img">
                                <img src="uploads/{{$w->image}}">
                                <div class="process-num"><span class="number">0{{$w->step_no}}</span></div>
                            </div>
                            <div class="work-content">
                                <h5>{{$w->title}}</h5>
                                <p>{{$w->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  
                </div>
            </div>
        </div>
    </div>
    <div class="co_counter">
        <div class="counter-overlay">
        <div class="container">
            <div class="row">
                @foreach($record as $r)
                <div class="col-6 col-lg-3 col-md-3 count_1">
                    <div class="count-up">
                        <p class="counter-count">{{$r->title_record}}</p>
                        <h3>{{$r->title}}</h3>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
        </div> 
    </div>
    <div class="co_testimonial">
        <div class="container">
            <h2 class="title">Testimonials</h2>
            <div class="main main1">
                <div class="client-slider">
                    
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

    <!------------- Inquiry-modal ------------>
   


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
    </script>
    @endsection
