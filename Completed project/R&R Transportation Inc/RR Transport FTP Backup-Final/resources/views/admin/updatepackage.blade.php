<!DOCTYPE html>
<html>
<head>
    <title>R&R Transportation Inc.</title>
      <link rel="stylesheet" type="text/css" href="/css/main-dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="icon" type="image/png" href="/image/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body class="body"> 
                      
            

    <div class="page my-4 title1">
        <div class="mt-5">
            <h4 class="mb-4">UPDATE PACKAGE</h4>
            <div class="detail">
                <div class="form">

                      @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li  style="color:red;">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif 
                 <form  action="{{url('admin/storeupdatepackage')}}/{{$id}}" enctype="multipart/form-data" method="POST" >
                         @csrf
                        <div class="part">
                            <div class="col-md-12 label">
                                <label>Image</label>
                            </div>
                            <div class="col-md-12">
                                  <input type="file" value="{{$image}}" name="image" accept="image/*"  onchange="readURL(this);" />
                                  <img id="blah" src="/uploads/{{$image}}" width="120" height="120" />

                                <input type="hidden" name="oldimage" value="{{$image}} "/>
                             </div>   
                        </div>


                          <div class="part">
                            <div class="col-md-12 label">
                                <label>Packages</label>
                            </div>
                            <div class="col-md-12 data">
                               <select name="packages" value= "" >
                                 <option>Select package Type</option>
                                @foreach ($package_type as $p)
                                 <option value="{{ $p->id }}"{{$p->id== $ptype_id ? 'selected' : ''}}>{{ $p->type_name}}</option>
                              @endforeach
                              </select>
                            </div>
                        </div>                      

                           <div class="part">
                            <div class="col-md-12 label">
                                <label>Tittle</label>
                            </div>
                            <div class="col-md-12 data">
                                <input type="text" placeholder="Enter Tour Tittle" name="tittle" value="{{$tittle}}" >
                            </div>   
                        </div>

                         <div class="part">
                            <div class="col-md-12 label">
                                <label>Type of Tour</label>
                            </div>
                            <div class="col-md-12 data">
                            <select name="tour_type" value="" >
                             <option>Select Tour Type</option>

                               @foreach ($tour_type as $t)
                                 <option value="{{ $t->id }}"{{$t->id== $t_id ? 'selected' : ''}}>{{ $t->tour_type}}</option>
                               @endforeach    
                           </select>
                            </div>
                        </div>      

                          <div class="part">
                            <div class="col-md-12 label">
                                <label>Country</label>
                            </div>
                            <div class="col-md-12 data">
                              <select name="country" id="country" >
                                         <option value="" >Select Country</option>

                                        @foreach ($country as $c)
                                         <option value="{{ $c->id }}"{{$c->id== $country_id ? 'selected' : ''}}>{{ $c->name }}</option>
                                      @endforeach

                                  </select>
                            </div>
                             @csrf
                        </div> 

                        <div class="part">
                            <div class="col-md-12 label">
                                <label>City</label>
                            </div>
                            <div class="col-md-12 data">
                                <select name="city" id="city" >

                                   <option value="{{$city_id}}">{{$city}}</option>
                                           
                               </select> 
                            </div>
                        </div> 

                        <div class="part">
                            <div class="col-md-12 label">
                                <label>Days</label>
                            </div>
                          <div class="col-md-12 data">
                                <input type="number" placeholder="Enter Days" name="numberofday" value="{{$numberofday}}" >
                          </div>
                       </div>
                        <div class="part">
                            <div class="col-md-12 label">
                                <label>Price</label>
                            </div>
                            <div class="col-md-12 data">
                                <input type="number" placeholder="Enter Price Number" name="price" value="{{$price}}" >
                            </div>   
                        </div>
                          <div class="part part1">
                            <div class="col-md-12 label">
                                <label>short Description</label>
                            </div>
                            <div class="col-md-12 data">
                                <textarea placeholder="Enter text.." name="short_desc" value="{{$short_desc}}">{{$short_desc}}</textarea>
                            </div>   
                        </div>

                         <div class="part part1">
                            <div class="col-md-12 label">
                                <label>Days Information</label>
                            </div>
                              @foreach($days_info as  $key =>$d)
                             <div class="col-md-12 data" style="display:flex; margin-top: 10px; ">
                                <button style="color:white; background-color:rgb(19 96 103);">Day {{$key+1}}</button>
                                <input type="text" placeholder="" name="daydata" value="{{$d->days_info}}" readonly>
                                <button style="background-color:rgb(19 96 103); color: white!imortant;"><a href="{{url('admin/deletedayinfo')}}/{{$d->id}}">Delete</a></button>
                            </div>

                            @endforeach   

                            <div class="col-md-12 data data1" style="margin-top:10px" >
                            <div class="days data1">
                            
                             <textarea name="day" placeholder="please enter full day information" autocomplete="off" >
                            </textarea>
                            </div>
                            <button  id="removeRow" type="button" class="btn-remove">Remove</button>
                             <div id="newRow"></div>
                            <button id="addRow" type="button" class="btn-remove btn-add1">Add days</button>
                       </div>
                    </div> 

                      <div class="part part1">
                            <div class="col-md-12 label">
                                <label>Inclusion</label>
                            </div>
                            <div class="col-md-12 data">
                                <textarea placeholder="Enter text.." name="inclusion" value="{{$inclusion}}">{{$inclusion}}</textarea >
                            </div>   
                        </div>
                         <div class="part part1">
                            <div class="col-md-12 label">
                                <label>Exclusion</label>
                            </div>
                            <div class="col-md-12 data">
                                <textarea placeholder="Enter text.." name="exclusion" value="{{$exclusion}}">{{$exclusion}}</textarea >
                            </div>   
                        </div>
                          <div class="part part1">
                            <div class="col-md-12 label">
                                <label>General Information</label>
                            </div>
                            <div class="col-md-12 data">
                                <textarea placeholder="Enter text.." name="general_info" value="{{$general_info}}">{{$general_info}}</textarea >
                            </div>   
                        </div>
                          <div class="part part1">
                            <div class="col-md-12 label">
                                <label>Large Description</label>
                            </div>
                            <div class="col-md-12 data">
                                <textarea placeholder="Enter text.." name="long_desc" value="{{$long_desc}}">{{$long_desc}}</textarea >
                            </div> 

                        </div>

                     <div class="upload">
                        <button class="btn3">Update</button> 
                        <a href="{{url('admin/home')}}">Back to Home?</a>       
                      </div>  
                        </div>

                    </form>     
                </div>
            </div>
        </div>
    </div>
  
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
 <script type="text/javascript">
         function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(130)
                        .height(130);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

          $("#addRow").click(function () {
            var html = '';
           
            html += '<div class="days">';
            html += ' <textarea name="days[]"  placeholder="please enter full day information" autocomplete="off"></textarea>';
            html += '<button id="removeRow" type="button" class="btn-remove">Remove</button>';
            html += '</div>';
           

            $('#newRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow', function () {
            $(this).closest('.days').remove();
        });

          $(document).ready(function(){

            $('select[name="country"]').on('change',function(){
                var id=$(this).val();
                console.log(id);
 
           if(id){

                $.ajax({

                    url:'getcity/'+id,
                     type:'GET',
                     dataType:'json',
              success:function(data){

                    console.log(data);


                     
                  /*  var json = JSON.stringify(data);
                      console.log(json);

                    */

                      $('select[name="city"]').empty(); 

                       $('select[name="city"]').append('<option>Select City</option>');


                       $.each(data,function(key,value){

                       $('select[name="city"]')
                    
                       .append('<option value="'+value.id+'">'+value.name+'</option>');
                     });

                   }

                }); 
              }else{

                   $('select[name="city"]').empty();
              }
               
            });
       
        });   


</script>
</body>
</html>