<!DOCTYPE html>
<html>
<head>
    <title>R&R Transportation Inc.</title>
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
            <h4 class="mb-4">UPDATE HOME PAGE BANNER </h4>
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
                 <form  action="{{url('admin/storeupdatebanner')}}/{{$id}}" enctype="multipart/form-data" method="POST" >
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
                                <label>Title</label>
                            </div>
                            <div class="col-md-12 data">
                                <input type="text" placeholder="Enter Title" name="title" value="{{$title}}" >
                            </div>   
                        </div>

                         <div class="part part1">
                            <div class="col-md-12 label">
                                <label>Main Title</label>
                            </div>
                              @foreach($more_maintitle as  $key =>$m)
                             <div class="col-md-12 data" style="display:flex; margin-top: 10px; ">
                                <button style="color:white; background-color:#f17ac1;">Main Title{{$key+1}}</button>
                                <input type="text" placeholder="" name="daydata" value="{{$m->more_maintitle}}" readonly>
                                <button style=" background-color:black; "><a style=" color: white!important" href="{{url('admin/deletemaintitle')}}/{{$m->id}}">Delete</a></button>
                            </div>

                            @endforeach   

                             <div class="col-md-12 data data1" tyle="margin-top:10px">
                             <div class=" data1" style="top margin :15px">
                                <input  type="text" placeholder="Enter main title" name="maintitle" value="" >

                               <button  id="removeRow" type="button" class="btn-remove">Remove</button>

                             <div id="newRow"></div>
                              <button id="addRow" type="button" class="btn-remove btn-add1">Add more </button>
                              </div>
                          </div>
                    </div> 

                        <!--  <div class="part part1">
                            <div class="col-md-12 label">
                                <label>Days Information</label>
                            </div>
                            <div class="col-md-12 data data1" >
                            <div class="days data1">
                            
                             <textarea name="day" placeholder="please enter full day information" autocomplete="off"required >
                            </textarea>
                            </div>
                            <button  id="removeRow" type="button" class="btn-remove">Remove</button>
                             <div id="newRow"></div>
                            <button id="addRow" type="button" class="btn-remove btn-add1">Add days</button>
                       </div>
                    </div>  -->

                     <div class="upload">
                        <button class="btn1">Update</button> 
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
            html += ' <input type="text" placeholder="Enter main title" name="maintitles[]" value="" >';
            html += '<button id="removeRow" type="button" class="btn-remove">Remove</button>';
            html += '</div>';
           

            $('#newRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow', function () {
            $(this).closest('.days').remove();
        });
        
</script>
</body>
</html>