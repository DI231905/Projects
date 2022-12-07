 
@extends('admin.layouts.app')

@section('content')

    <div class="page mt-4 hosting-page title1" style="display: block;">

              <div class="mt-5">
                     <div class="list1">
                       <h4 class="mb-4"> GALLERY VIEW  </h4>
                        <button class="btn1"><a href="{{url('admin/addgallary')}}" style="color:black">ADD</a></button>
                     </div>
                    
                    <div class="detail" style="display:flex; flex-wrap:wrap ;" > 
                        @foreach($gallary as $g)
                         
                         <div class="image_{{$g->id}}">
 
                          @if ('.mp4'===$g->extension)
                         <div class="gallery">
                          <a target="_blank" href="/uploads/{{$g->file}}">
                            <iframe width="250" height="300" src="/uploads/{{$g->file}}" frameborder="0" allowfullscreen autoplay="false">
                            </iframe>
                              </a>
                             <div class="desc"><button  class="btnsubmit" onclick="deleteimage({{$g->id}})">Delete video</button>
                               </div>

                           </div>
                            
                          @else
                         <div class="gallery">
                          <a target="_blank" href="/uploads/{{$g->file}}">
                          <img src="/uploads/{{$g->file}}" alt="Cinque Terre" width="250" height="200">
                           </a>
                          <div class="desc"><button  class="btnsubmit" onclick="deleteimage({{$g->id}})">Delete Image</button>
                               </div>
                             </div>  
                          @endif    
                           
                      </div>  
                       @endforeach   
                    </div>
                   

                </div>
        </div> 
      </div>
      <style type="text/css">
        .gallery{
          margin-top: 15px;
          margin-right: 10px;
        }
      </style>
      <script type="text/javascript">

               function deleteimage($id){

     if(confirm("do you want delete this Inquiry ?")){
             $.ajax({

                url:'deletegallaryimage/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                     
          
                        },

      error: function(response) {


          $('.image_'+$id).hide();
          
                 
                  },        
          
                });

          }
      }  
        

      </script>
      @endsection