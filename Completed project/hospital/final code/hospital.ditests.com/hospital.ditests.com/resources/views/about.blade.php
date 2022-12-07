@extends('layouts.app')

@section('content') 

<style type="text/css">
    .bor:last-child {
        border: none;
     }
</style>

    <div class="co-banner1">
          @foreach($allbanner as $a)
            @if($a->name == 'About Us')
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
    <div class="in_about">
          <div class="container">
             @foreach($about_description as $keys=>$ad)
                <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-about">
                        @foreach($about_images as $keys=>$ai)
                        @if($keys<3)
                        @if($keys==0)
                        <figure class="image-1 "><img src="uploads/{{$ai->image}}" alt=""></figure>
                        @elseif($keys==1)
                        <figure class="image-2 zoom"><img src="uploads/{{$ai->image}}" alt=""></figure>
                        @elseif($keys==3)
                        <figure class="image-3 zoom"><img src="uploads/{{$ai->image}}" alt=""></figure>
                        @else
                      
                        @endif
                        @else
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="about_disc">
                                    <h4>{{$ad->title}}</h4>
                                    <h3>{{$ad->main_title}}</h3>
                                   {!!$ad->description!!}
                      </div>
                </div>
                </div>
             @endforeach
          </div>
    </div>
    <div class="our">
          <div class="try_circle_first hidden-xs hidden-sm">
                 <img src="image/right_cycle1.png" alt="circle">
            </div>
            <div class="try_circle_second hidden-xs hidden-sm">
                   <img src="image/right_cycle2.png" alt="circle">
            </div>
          <div class="container">
                <div class="row">

                    @foreach($mission_vision as $m)
                      <div class="col-lg-6 col-md-6 bor">
                            <div class="our_mission">
                                  <div class="round_img1">
                                     <a href="#"><i class="{{$m->icon}}"></i></a>
                                  </div>           
                                     <h3>{{$m->title}}</h3>
                                     <p>{{$m->description}}</p>
                             </div>
                       </div>
                      @endforeach
                          
                </div>
          </div>
    </div>
    <div class="what">
          <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">

                          <div class="what_img">
                                 <img src="uploads/{{$about_workimage}}">
                          </div>
                    </div>
                    <div class="col-lg-6 col-md-6">

                     @foreach($about_work as $aw)
                        <div class="what_inner">
                            <h4>{{$aw->title}}</h4>
                            <h3>{{$aw->main_title}}</h3>
                            <div class="what_sub">
                                <div class="row">
                                    @foreach($work_benifits as $wb)
                                    <div class="cl-intro">
                                        <div class="round_img2">
                                            <a href="#"><i class="{{$wb->icon}}"></i></a>
                                        </div>
                                        <h3>{{$wb->title}}</h3>
                                        <p>{{$wb->description}}</p>
                                    </div>
                                    @endforeach
                                   
                                </div>
                            </div>
                            @endforeach
                            <div class="box-button">
                                <a href="{{url('/contact')}}" class="banner-btn theme-btn" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight">
                                    <span class="btn-title">Contact Now</span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
    </div>
    <div class="choose">
        @foreach($whychooseus as $wc)
        <div class="container">
            <div class="row row1">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="choose_disc">
                        <h4>{{$wc->title}}</h4>
                        <h3>{{$wc->main_title}}</h3>
                        <p>{{$wc->description}}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="choose_inner">
                        <div class="choose_img">
                            <img src="uploads/{{$wc->image}}" alt="image">
                        </div>
                        <div class="choose-inner">
                           <img src="image/image-5.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="ch_disc">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="ch_disc_main">

                        @foreach($benifits as $b)
                       <div class="col-box">
                             <div class="round_img2">
                                 <a href="#"><i class="{{$b->icon}}"></i></a>
                             </div>
                            <div class="ch_disc_inner">
                                  <h2 >{{$b->name}}</h2>
                                  <p>{{$b->description}}</p>
                            </div>
                        </div>
                        @endforeach
                       
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="certi">
        <div class="container">
            <h3>Our Achievements</h3>
            <div class="row__1 cer_slider">

                 @foreach($achivement as $a)
                  <div class="col-lg">
                        <div class="ce_inner">
                              <img src="uploads/{{$a->file}}">
                        </div>
                  </div>
                  @endforeach
                 
            </div>
        </div>
    </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script type="text/javascript" src="https://cldup.com/S6Ptkwu_qA.js"></script>
    <script type="text/javascript">

         $('.cer_slider').slick({
              dots: false,
              infinite: true,
              autoplay: true,
              autoplaySpeed: 1000,
              speed: 800,
              slidesToShow:3,
              adaptiveHeight: true,
              prevArrow: '<div class="slide-arrow2 prev-arrow2"><i class="fa fa-angle-left"></i></div>',
              nextArrow: '<div class="slide-arrow2 next-arrow2"><i class="fa fa-angle-right"></i></div>',
              responsive: [
                    {
                      breakpoint: 1024,
                      settings: {
                        slidesToShow: 3,
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
        

    </script>
   
 @endsection