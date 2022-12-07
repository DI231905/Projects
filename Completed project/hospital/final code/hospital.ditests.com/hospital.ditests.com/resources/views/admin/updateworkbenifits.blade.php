<!DOCTYPE html>
<html>
<head>
    <title>Mangala Diagnostic Centre</title>
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
            <h4 class="mb-4">ADD NEW WORK BENIFITS</h4>
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
                 <form  action="{{url('admin/storeupdateworkbenifits')}}/{{$id}}" enctype="multipart/form-data" method="POST" >
                         @csrf


                           <div class="part">
                            <div class="col-md-12 label">
                                <label>Icon</label>
                            </div>

      
                            <div class="col-md-12 data">
                                <input type="text" placeholder="Enter enter your service Icon ex. fas fa-wifi" name="icon" value="{{$icon}}"required>
                            </div>   
                            <h6 class="iconurl">For select icons <a href="https://fontawesome.com/v5.15/icons?d=gallery&p=2"><b>Click here.</b></a></h6>
                        </div>              

                        
                
                        
                    
                          <div class="part">
                            <div class="col-md-12 label">
                                <label>Title</label>
                            </div>
                            <div class="col-md-12 data">
                                <input type="text" placeholder="Enter title" name="title" value="{{$title}}"required>
                            </div>   
                        </div> 
                        

                        <div class="part part1">
                            <div class="col-md-12 label">
                                <label>Description</label>
                            </div>
                            <div class="col-md-12 data">
                                   <textarea placeholder="Enter text.."  name="description" value="{{$description}}"  required>{{$description}}</textarea>
                            </div>   
                        </div>
                        
                        <div class="main-button">
                            <button class="btn1">Update</button> 
                       
                       <a href="{{url('admin/aboutwork')}}"> Back to Home?</a>
                            
                        </div>
            
                    </form>       
                        
                </div>  
            </div>
        </div>
    </div>

    

   
<style type="text/css">
.iconurl{
       margin-left: 15px;
}
</style>
</body>
</html>