<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="icon" type="image/png" href="/image/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  	<style type="text/css">

  		.form{
  			width: 40%;
  			margin: 10px auto;
  			border : 2px solid black;
  			padding: 20px;
  			box-sizing: border-box;
  		}
  		.form h3{
  			font-size: 18px;
  		}

  		.form ul{
  			padding-left: 0;
  			margin: 0;
  		}
  		.form li{
  			font-size: 14px;
  			list-style-type: none;
  			padding-left: 0;
  			margin: 0;
  		}
  		.form textarea{
  			width: 100%;
  			height: auto;
  		}
  		.btn{

  			background-color:#f17ac1 ;
  			color: white;
  			margin-left: 630px;
  		}

  		.btn a{

  			color: white;
  		}

  	@media only screen and (min-width: 1024px) and (max-width: 1260px){

  		
  			.form{
  				width: 80%;
  			}

  			.btn{

  			background-color:#f17ac1 ;
  			color: white;
  			margin-left: 400px!important;
  		}
  		}

  		@media only screen and (min-width: 768px) and (max-width: 1023px){
               
  			.form{
  				width: 80%;
  			}
  			.btn{

  			
  			margin-left: 300px!important;
  		}

         }

  		@media only screen and (max-width :767px)
  		{
  			.form{
  				width: 100%;
  			}
  			.btn{

  			
  			margin-left: 100px!important;
  		}

  		}

  	</style>
</head>
<body>
	<div class="form">
		    <h3 class="text-center">Personal Detail</h3>
		   <ul>
		   	<li><b>Name     :</b> {{$name}} </li>
		   	<li><b>Phone No :</b> {{$mobileno}} </li>
		   	<li><b>Email    :</b> {{$email}} </li>
		   </ul>
	</div>


	<div class="form">
		    <h3 class="text-center">Shipping origin</h3>
		   <ul>
		   	<li><b>Zip code             :</b>  {{$from_zip}} </li>
		   	<li><b>Date                 :</b>  {{$date}} </li>

           @if($from_location==1)
		   	<li><b>location             :</b>  Business with loading dock or forklift </li>
		   	 @elseif($from_location==2)
		   	<li><b>location             :</b>Business without loading dock or forklift</li>

		   	 @elseif($from_location==3)
		   	<li><b>location             :</b>Residential or limited access </li>
		   	 @elseif($from_location==4)
		   	<li><b>location             :</b>Tradeshow or convention </li>
		   	 @elseif($from_location==5)
		   	<li><b>location             :</b>Construction site</li>
		     @elseif($from_location==6)
		   	<li><b>location             :</b>Drop off at carrier terminal</li>
		   	@else
		    <li><b>location             :</b>         </li>
             @endif
		   </ul>
	</div>

		<div class="form">
		    <h3 class="text-center">Shipping destination</h3>
		   <ul>
		   	<li><b>Zip code             :</b>  {{$to_zip}} </li>
		   @if($from_location==1)
		   	<li><b>location             :</b>  Business with loading dock or forklift </li>
		   	 @elseif($from_location==2)
		   	<li><b>location             :</b>Business without loading dock or forklift</li>

		   	 @elseif($from_location==3)
		   	<li><b>location             :</b>Residential or limited access </li>
		   	 @elseif($from_location==4)
		   	<li><b>location             :</b>Tradeshow or convention </li>
		   	 @elseif($from_location==5)
		   	<li><b>location             :</b>Construction site</li>
		     @elseif($from_location==6)
		   	<li><b>location             :</b>Drop off at carrier terminal</li>
		   	@else
		    <li><b>location             :</b>         </li>
             @endif
		   </ul>
	</div>

	<div class="form">
		    <h3 class="text-center">What Are You Shipping?</h3>
		   <ul>
		   	@if($shipping_unit==1)
		   	<li><b>Shipping units             :</b> Full Truckload </li>
            @elseif($shipping_unit==2)
            <li><b>Shipping units             :</b> Pallets (48"x40") </li>
            @elseif($shipping_unit==3)
            <li><b>Shipping units             :</b>Pallets (48"x48")</li>
            @elseif($shipping_unit==4)
            <li><b>Shipping units             :</b> Pallets (60"x48")</li>
            @elseif($shipping_unit==5)
            <li><b>Shipping units             :</b> Pallets (enter dimensions) </li>
            @elseif($shipping_unit==6)
            <li><b>Shipping units             :</b> Bags </li>
            @elseif($shipping_unit==7)
            <li><b>Shipping units             :</b> Bales</li>
            @elseif($shipping_unit==8)
            <li><b>Shipping units             :</b> Boxes </li>
            @elseif($shipping_unit==9)k
            <li><b>Shipping units             :</b> Bundles </li>
            @elseif($shipping_unit==10)
            <li><b>Shipping units             :</b> Carpets </li>
            @elseif($shipping_unit==11)
            <li><b>Shipping units             :</b> Coils </li>
            @elseif($shipping_unit==12)
            <li><b>Shipping units             :</b> Crates </li>
            @elseif($shipping_unit==13)
            <li><b>Shipping units             :</b> Cylinders </li>
            @elseif($shipping_unit==14)
            <li><b>Shipping units             :</b> Drums </li>
            @elseif($shipping_unit==15)Pails
            <li><b>Shipping units             :</b> Pails </li>
            @elseif($shipping_unit==16)
            <li><b>Shipping units             :</b> Reels </li>
            @elseif($shipping_unit==17)
            <li><b>Shipping units             :</b> Rolls </li>
            @elseif($shipping_unit==18)
            <li><b>Shipping units             :</b> Tubes/Pipes </li>
            @else
            <li><b>Shipping units             :</b>  </li>
            @endif

		   	<li><b>Total weight                :</b> {{$total_weight}} </li>
		   	<li><b>Weight unit            :</b> {{$Weight_unit}} </li>

		   	<li><b>Good type               :</b> {{$good_type}} </li>
		 
		   	<li><b>Number of Pieces         :</b> {{$number_of_piece}} </li>


        <li><b>Other service         :</b>  </li>
        @foreach($get_queto_service as $q)

        @if($q->qutoe_service==1)
         <li> Shipment Contains Hazardous Materials</li>
        @elseif($q->qutoe_service==2) 
         <li> These items are Non Stackable</li>
         @endif
        @endforeach

		   </ul>
	</div>

	<div class="form">
		    <h3 class="text-center">Dimensions</h3>
		   <ul>
		   	<li><b>Length(in)*           :</b> {{$lenght}} </li>
		   	<li><b>Width(in)*                 :</b>{{$width}} </li>
		   	<li><b>Height(in)*           :</b> {{$height}}
		   	<li><b>Approx value              :</b>{{$approx_value}}</li>
		   	<li><b>Class (if Freight):         :</b> {{$Freight}} </li>
		   	@if($Commodities=="Select a Commodity")
		   	<li><b>Class (if Commodity):         </b>  </li>
		   	@else
		    <li><b>Class (if Commodity):         </b>{{$Commodity}} </li>
		    @endif
		   	<li><b>Shipment destination         :</b> {{$ship_decs}} </li>
		   </ul>
	</div>

	<div class="form">
		<h3 class="text-center">Special Delivery Instruction:</h3>
		@if($instructions==1)
		<p>No additional instructions needed</p>
		@elseif($instructions==2)
		<p>Schedule appointment</p>
		@elseif($instructions==3)
		<p>Notify by phone on arrival</p>
		@else
		<p></p>
		@endif

	</div>

<button class="btn"><a href="{{url('admin/home')}}">Back to home ?</a></button>
	
</body>
</html> 