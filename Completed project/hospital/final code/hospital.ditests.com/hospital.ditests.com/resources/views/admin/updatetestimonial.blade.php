<!DOCTYPE html>
<html>
<head>
    <title>Mangala Diagnostic Centre</title>
    <link rel="stylesheet" type="text/css" href="/css/upload.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="icon" type="image/png" href="/image/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body class="body"> 
                       
    <div class="page my-4 title1">
        <div class="mt-5">
            <h4 class="mb-4">UPDATE TESTIMONIAL</h4>
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
                 <form  action="{{url('admin/storeupdatetestimonial')}}/{{$id}}" enctype="multipart/form-data" method="POST" >
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
                                <label>Name</label>
                            </div>
                          <div class="col-md-12 data">
                                <input type="text" placeholder="Enter Name" name="name" value="{{$name}}">
                          </div>
                       </div>
                        <div class="part">
                            <div class="col-md-12 label">
                                <label>Occupation</label>
                            </div>
                            <div class="col-md-12 data">
                                <input type="text" placeholder="Enter Occupation" name="occupation" value="{{$occupation}}">
                            </div>   
                        </div>
                        <div class="part part1">
                            <div class="col-md-12 label">
                                <label>Description</label>
                            </div>
                            <div class="col-md-12 data">
                                <textarea placeholder="Enter text.." name="description" value="{{$description}}">{{$description}}</textarea>
                            </div>   
                        </div>

                        <div class="upload">
                        <button class="btn1">Upload</button> 
                        <a href="{{url('admin/testimoniallist')}}">Back to Home?</a>       
                    </div>
                    </form> 
                    
                        
                </div>
               
            </div>
        </div>
    </div>
         

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
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

</script>
</body>
</html>