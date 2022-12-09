@extends('layouts.app')

@section('content')

<div class="co_part-2">
        <div class="fix-part-2">
            @foreach($allbanner as $a)
            @if($a->name == 'Gallery')
            <div class="img1">
                <img src="uploads/{{$a->image}}">
            </div>
         
            <div class="about">
                <div class="container">
                    <h2>Gallery</h2>
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
    <div class="co_gallery">
        <div class="container">
            <div class="gallery">

               @foreach($gallary as $g)


              @if ('.mp4'===$g->extension)

              <a href="uploads/{{$g->file}}" data-lightbox="homePortfolio">
                <iframe width="560" height="315" src="uploads/{{$g->file}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay="false"></iframe>
            </a>


               @else
                   @if($g->id % 2==0 )
                   <a href="uploads/{{$g->file}}" data-lightbox="homePortfolio">
                   <img src="uploads/{{$g->file}}"/></a>
                   @else
                    <a href="uploads/{{$g->file}}" data-lightbox="homePortfolio" class="big">
                   <img src="uploads/{{$g->file}}"/></a>
                    @endif 

             @endif  

             @endforeach  
                         

         
           </div>
        </div>
    </div>
<style>
    
    .lightbox, .lightboxOverlay {
    z-index: 9999999 !important;
}
</style>
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
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
        
    </script>




@endsection