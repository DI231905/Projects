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
            <h4 class="mb-4">ADD HOME PAGE BANNER </h4>
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
                 <form  action="{{url('admin/storehomebanner')}}" enctype="multipart/form-data" method="POST" >
                         @csrf
                        <div class="part">
                            <div class="col-md-12 label">
                                <label>Image</label>
                            </div>
                            <div class="col-md-12">
                                  <input type="file" value="" name="image" accept="image/*"  onchange="readURL(this);" />
                                  <img id="blah" src="#" alt="" />

                               
                             </div>   
                        </div>                           

                           <div class="part">
                            <div class="col-md-12 label">
                                <label>Title</label>
                            </div>
                            <div class="col-md-12 data">
                                <input type="text" placeholder="Enter Title" name="title" value="" >
                            </div>   
                        </div>
 

                        <div class="part">
                            <div class="col-md-12 label">
                                <label>Short Description</label>
                            </div>
                          <div class="col-md-12 data data1">
                             <div class=" data1">
                                <input  type="text" placeholder="Enter here" name="short_description" value="" >

                               <button  id="removeRow" type="button" class="btn-remove">Remove</button>

                             <div id="newRow"></div>
                            <button id="addRow" type="button" class="btn-remove btn-add1">Add more </button>
                              </div>
                          </div>
                       </div>

                     <div class="upload">
                        <button class="btn1">Add</button> 
                        <a href="{{url('admin/viewBannerlist')}}">Back to Home?</a>       
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
            html += ' <input type="text" placeholder="Enter here" name="short_descriptions[]" value="" >';
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