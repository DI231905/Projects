@extends('layouts.app')

@section('content') 

  <div class="co-banner1">
         @foreach($allbanner as $a)
            @if($a->name == 'Diagnostic Services')
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
    <div class="co_service service_1">
        <div class="container">
            <div class="row">
            	
            @foreach($services as $s)
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="Service-details">
                        <div class="inner-service">
                            <div class="service-img">
                                <img class="s_1" src="uploads/{{$s->image2}}">
                                <img class="s_2" src="uploads/{{$s->image1}}">
                            </div>
                            <h4>{{$s->title}}</h4>
                            <p>{{$s->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
              
            </div>
        </div>
    </div>


@endsection