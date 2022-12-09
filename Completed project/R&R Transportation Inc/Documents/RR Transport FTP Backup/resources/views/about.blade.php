@extends('layouts.app')

@section('content') 

<div class="co_part-2">
         <div class="fix-part-2">
            @foreach($allbanner as $a)
            @if($a->name == 'About Us')
            <div class="img1">
                <img src="uploads/{{$a->image}}">
            </div>
          
            <div class="about">
                <div class="container">
                    <h2>About</h2>
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
     <div class="co_about2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="about2-img">
                        <img src="image/service-3.jpg">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                     @foreach($mission as $m)
                    <div class="co_tab">
                        <div class="apple-tabs">
                            <ul>
                                <li>
                                    <a href="#Beyonce"><span>{!!$m->mission_name!!}</span></a>
                                </li>
                                <li>
                                    <a href="#Fergie"><span>{!!$m->value_name!!}</span></a>
                                </li>
                                <li>
                                    <a href="#Rihanna"><span>{!!$m->promise_name!!}</span></a>
                                </li>
                            </ul>
                            <div class="contents">
                               
                                <div id="Beyonce">
                                    <div class="main-box">
                                        <p>{!!$m->mission!!}</p>
                                    </div>
                                </div>
                                <div id="Fergie">
                                    <div class="main-box">
                                        <p>{!!$m->value!!}</p>
                                    </div>
                                </div>
                                <div id="Rihanna">
                                    <div class="main-box">
                                        <p>{!!$m->promise!!}</p>
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
    <!-- <div class="co_why">
        <div class="container">
            <div class="row">
                @foreach($whychooseus as $w)
                <div class="col-lg-6">
                    <div class="why-img">
                        <img src="uploads/{{$w->image}}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-content">
                       
                        <h3>{{$w->title}}</h3>
                        <p>{!!$w->description!!}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> -->
    <div class="co_faq">
        <div class="container">
            <div class="title-head">
                <h1 class="title">Frequently Asked Questions</h1>
               
            </div>
            <div class="row set-faq">
                <div class="col-lg-6">
                    <div class="port1">
                        <div class="accordion-container">
                         @foreach($faq as $key =>$q)

                         @if ($key % 2 ==0)
                             <div class="set">
                                <a>{{$q->question}}<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <p>{!! $q->answer !!}</p>
                                </div>
                            </div>
                          @endif 

                         @endforeach  
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="port1">
                        <div class="accordion-container">
                        @foreach($faq as $key =>$q)

                         @if ($key % 2 !=0)
                             <div class="set">
                                <a>{{$q->question}}<i class="fa fa-plus"></i></a>
                                <div class="content">
                                      <p>{!! $q->answer !!}</p>
                                </div>
                            </div>
                          @endif 

                         @endforeach  

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script type="text/javascript">
        $(".apple-tabs").tabs({ 
            show: { effect: "slide", direction: "left", duration: 200, easing: "easeOutBack" } ,
            hide: { effect: "slide", direction: "right", duration: 200, easing: "easeInQuad" } 
        });

        $(window).scroll(function(){
            if ($(this).scrollTop() > 50) {
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
      $(".set > a i")
        .removeClass("fal fa-times")
        .addClass("fa-plus");
    } else {
      $(".set > a i")
        .removeClass("fal fa-times")
        .addClass("fa-plus");
      $(this)
        .find("i")
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
    </script>
   
 @endsection