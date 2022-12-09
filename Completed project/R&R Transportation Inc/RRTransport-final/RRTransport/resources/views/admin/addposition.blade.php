<!DOCTYPE html>
<html>
<head>
    <title>R&R Transportation Inc.</title>
    <link rel="stylesheet" type="text/css" href="/css/upload.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css">
      <link rel="icon" type="image/png" href="/image/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body class="body"> 
                      
    <div class="page my-4 title1">
        <div class="mt-5">
            <h4 class="mb-4">ADD NEW OPEN POSITION</h4>
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
                 <form  action="{{url('admin/storeposition')}}" enctype="multipart/form-data" method="POST" >
                         @csrf
                       
                          <div class="part">
                            <div class="col-md-12 label">
                                <label>Position Name</label>
                            </div>
                            <div class="col-md-12 data">
                                <input type="text" placeholder="Enter Position Name" name="name" value=""required autocomplete="off">
                            </div>   
                        </div> 

                          <div class="part">
                            <div class="col-md-12 label">
                                <label>Number Of Vacancy</label>
                            </div>
                            <div class="col-md-12 data">
                               <input type="number" placeholder="Enter number of vacancy" name="no_of_vacancy" value=""required autocomplete="off">
                            </div>   
                        </div> 

                        <div class="part">
                            <div class="col-md-12 label">
                                <label>Type of Vacancy</label>
                            </div>
                            <div class="col-md-12 data">
                               <select name="vacancy_type" id="vacancy" required>
                                         <option value="">Select type</option>

                                        @foreach($position_type as $p)
                                      
                                         <option value="{{ $p->id }}">{{ $p->name }}</option>
                                      @endforeach

                                  </select>
                            </div>   
                        </div> 

                           <div class="part">
                            <div class="col-md-12 label">
                                <label>Country Name</label>
                            </div>
                            <div class="col-md-12 data">
                               <input type="text" placeholder="Country Name" name="country" value=""required autocomplete="off">
                            </div>   
                        </div>  

                          <div class="part part1">
                            <div class="col-md-12 label">
                                <label>Responsibilities</label>
                            </div>
                            <div class="col-md-12 data">
                                <textarea placeholder="Enter text.." name="Responsibilities" value=" "></textarea>
                            </div>   
                        </div>

                         <div class="part">
                            <div class="col-md-12 label">
                                <label>Requirements</label>
                            </div>
                            <div class="col-md-12 data">
                                 <textarea placeholder="Enter text.."  name="Requirements" value="" id="summernote" required></textarea>
                            </div>   
                        </div> 
 
  
                        <div class="main-button">
                            <button class="btn1">Add</button> 
                       
                         <a href="{{url('admin/home')}}"> Back to Home ?</a>
                            
                        </div>

                         
              
            
                    </form> 
       
                </div>
                
            </div>
        </div>
    </div>
     

   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>

       
 <script type="text/javascript">

    $('textarea#summernote').summernote({
        placeholder: 'Hello bootstrap 4',
        tabsize: 2,
        height: 100,
  toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        //['fontname', ['fontname']],
       // ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'hr']],
        //['view', ['fullscreen', 'codeview']],
        ['help', ['help']]
      ],
      });
     


 </script>

</body>
</html>