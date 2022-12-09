
@extends('layouts.app')

@section('content') 
     <div class="co_part-2">
        <div class="fix-part-2">
            @foreach($allbanner as $a)
            @if($a->name == 'Our Team')
            <div class="img1">
                <img src="uploads/{{$a->image}}">
            </div>
            
           
            <div class="about">
                <div class="container">
                    <h2>team</h2>
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
    <div class="co_team">
        <div class="container">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul> -->
                <div class="carousel-inner">

                    @foreach($owner as $o)
                    <div class="carousel-item active">
                        <div class="row row1">
                            <div class="col-lg-4 col-md-6">
                                <div class="team-img">
                          @if($o->image !=" ")
                            <img src="uploads/{{$o->image}}">
                            @else
                            <img src="image/team.png">
                            @endif
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6">
                                <div class="team-info">
                                    <h3>{{$o->name}}</h3>
                                    <p>{{$o->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="carousel-item">
                        <div class="row row1">
                            <div class="col-lg-6 col-md-6">
                                <div class="team-img">
                                    <img src="image/team.png">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="team-info">
                                    <h3>Ferris Evans</h3>
                                    <p>Ferris started as a part-time employee and transitioned to a full-time schedule. He has now been with our company for more than seven years, and we are happy that he decided to be a larger part of the R&R Transportation family. Ferris is a wonderful asset, and he has built great relationships with our customers. On his days off, Ferris loves spending time with his son.</p>
                                    <ul class="social-link social-link1">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
   <!--  <div class="co_inner-team">
        <div class="container">
            <div class="slider slider-nav">
                @foreach($team as $t)
                <div>
                    <div class="inner-team">
                        <div class="inner-team-img">
                            @if($t->image !=" ")
                            <img src="uploads/{{$t->image}}">
                            @else
                            <img src="image/team.png">
                            @endif
                        </div>
                        <div class="inner-team-info">
                              <h5 class="member-text">{{$t->name}}</h5>
                            <p>{{$t->description}}</p>
                        </div>
                        <div class="team-social">
                            <div class="share">
                                <i class="fas fa-share-alt"></i>
                            </div>
                            <ul class="social-link social-link1">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                 @endforeach
            </div>
        </div>
    </div> -->

    <div class="co_inner-team co_inner-team1">
        <div class="container">
            <div class="slider slider-nav-1">
                 @foreach($team as $t)
                <div>
                    <div class="inner-team1">
                         <div class="row">
                            <div class="col-lg-5 col-md-5 col-12">
                                <div class="inner-team-img1">
                                    @if($t->image !=" ")
                                    <img src="uploads/{{$t->image}}">
                                    @else
                                    <img src="image/team.png">
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-12">
                                <div class="inner-team-info1">
                                      <h5 class="member-text1">{{$t->name}}</h5>
                                   <span data-collapse-limit="180"> {{$t->description}}</span>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
                 @endforeach
            </div>
            </div>
        </div>
    </div>
   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
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

         $(".inner-team").mouseover(function(){
            $(".team-arrow").addClass('hide-arrow');
        });

 $(".inner-team").mouseout(function(){
            $(".team-arrow").removeClass('hide-arrow');
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



        $('.slider-nav').slick({
            autoplay: false,
            autoplaySpeed: 1500,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            prevArrow: '<div class="team-arrow slide-arrow prev-arrow"><i class="far fa-angle-left"></i></div>',
            nextArrow: '<div class="team-arrow slide-arrow next-arrow"><i class="far fa-angle-right"></i></div>',
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
        $(document).ready(function() {
  var ellipsesText = "...";
  var expandText = "Read more";
  var collapseText = "Read less";
  $('.inner-team-info1 span').each(function() {
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

  $(".inner-team-info1 span .trigger").click(function(){
    if($('.expanded-content').is(":visible")) {
      $(this).html(expandText);
    } else {
      $(this).html(collapseText);
    }
    $(this).siblings('.ellipses').toggle();
    $(this).siblings('.expanded-content').toggle();
  });
});

$('.slider-nav-1').slick({
            autoplay: false,
            autoplaySpeed: 1500,
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false,
            prevArrow: '<div class="team-arrow slide-arrow prev-arrow"><i class="far fa-angle-left"></i></div>',
            nextArrow: '<div class="team-arrow slide-arrow next-arrow"><i class="far fa-angle-right"></i></div>',
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
            slidesToScroll: 1
          },
        },
      ],
        });
    </script>
  @endsection