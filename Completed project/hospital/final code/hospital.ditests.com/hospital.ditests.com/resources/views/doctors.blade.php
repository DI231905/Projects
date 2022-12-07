@extends('layouts.app')

@section('content') 

  <div class="co-banner1">
          @foreach($allbanner as $a)
            @if($a->name == 'Doctors')
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
    <div class="doctor">
    	<div class="title2 mb-60 text-center">
            <h4>{{$title}}</h4>
            <h2>{{$main_title}}</h2>
            <p>{!!$description!!}</p>
        </div>
        <div class="container">
			<div class="row">
				@foreach($team as $t)
				<div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-4">
					<div class="single-doctor">
						<img class="img-fluid" src="uploads/{{$t->image}}" alt="">
						<div class="single-doctor-info">
							<h4>{{$t->name}}</h4>
							<span>{{$t->qualification}}</span> 
						</div>
						<div class="single-doctor-mask">
							<div class="single-doctor-inner">
								<h5>{{$t->title}}</h5>
								<p>{{$t->description}}</p>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				
			</div>
        </div>
    </div>


@endsection