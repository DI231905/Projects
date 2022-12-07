@extends('layouts.app')

@section('content') 


 <div class="co-banner1">
         @foreach($allbanner as $a)
            @if($a->name == 'Hospital Service')
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
	<div class="co_hs-service">
		<div class="container">
			<div class="row">
				
				@foreach($services as $s)
				<div class="col-lg-4 col-md-6 col-12">
					<div class="hs_inner-service">
						<div class="hs_icon">
							<img src="uploads/{{$s->image}}">
						</div>
						<h2>{{$s->title}}</h2>
						<p>{{$s->description}}</p>
					</div>
				</div>
				@endforeach
				
			</div>
		</div>
	</div>


@endsection