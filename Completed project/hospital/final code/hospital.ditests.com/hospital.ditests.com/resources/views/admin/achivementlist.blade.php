            
@extends('admin.layouts.app')

@section('content')

    <div class="page mt-4 hosting-page title1" style="display: block;">

            <div class="mt-5">
                     <div class="list1">
                       <h4 class="mb-4"> ACHIVEMENT IMAGE  </h4>
                        <button class="btn1"><a href="{{url('admin/addachivement')}}" style="color:black">ADD</a></button>
                     </div>
                    
                    <div class="detail" style="display:flex; flex-wrap:wrap ;" > 
                        @foreach($achivement as $a)
                         
                         <div class="image_{{$a->id}}">
 
                         <div class="gallery">
                          <a target="_blank" href="/uploads/{{$a->file}}">
                          <img src="/uploads/{{$a->file}}" alt="Cinque Terre" width="250" height="200">
                           </a>
                          <div class="desc"><button  class="btnsubmit" onclick="deleteimage({{$a->id}})">Delete Image</button>
                               </div>
                             </div>  
                           
                           
                      </div>  
                       @endforeach   
                    </div>
                   

                </div>
           </div>

           <script type="text/javascript">
             
              function deleteimage($id){

     if(confirm("do you want delete this Inquiry ?")){
             $.ajax({

                url:'deleteachivments/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.image_'+$id).hide();
          
                        },

      error: function(response) {


           alert('error');
          
                 
                  },        
          
                });

          }
      }  

   </script>
   <style type="text/css">
     .gallery{

          margin-top: 15px;
          margin-right: 15px;
     }

   </style>

           @endsection