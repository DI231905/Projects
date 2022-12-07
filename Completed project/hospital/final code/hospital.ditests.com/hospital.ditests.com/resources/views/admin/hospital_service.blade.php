@extends('admin.layouts.app')

@section('content')

  <div class="page mt-4 hosting-page title1" style="display: block;">



 <div class="mt-5">
                   
                   <h4 class="mb-4">Hospital Service page Banner</h4>
                    
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th> 
                                    <th>Page Name</th>   
                                    <th>Image</th> 
                                    <th>Update</th>
                                   
                                </tr>
                            </thead>
                           @foreach($allbanner as $a)
                           
                           @if($a->name=="Hospital Service")
                             <tbody>
                             
                               <tr>
                                    <td>
                                      {{$a->name}}
                                    </td>

                                      <td>
                                      {{$a->page_name}}
                                    </td>
                                   
                                    <td>

                                       <img src="/uploads/{{$a->image}}" width="400" height="200"><br>
                                       {{$a->image}}  
                                         
                                    </td>

                                     
                             <td><button class="btn0 btn2"><a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update</a></button></td>
                                   
                                </tr>
                                
                            </tbody>
                            @endif
                            @endforeach
                           
                        </table>
                    </div>
                 </div>





          <div class="mt-5">
                    <div class="list1">
                        <h4 class="mb-4">Hospital Service</h4>
                        <button class="btn1"><a  style="color: black"  href="{{url('admin/addnewservices')}}">ADD</a></button>
                    </div>
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                  
                                    <th>Title</th>
                                    <th>Description</th> 
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                           @foreach($services as $hs)
                             <tbody>
                             
                               <tr class="services_{{$hs->id}}">
                                    <td>

                                     <img src="/uploads/{{$hs->image}}" width="120" height="100"><br>
                                       {{$hs->image}}  
                                                     
                                    </td>
                                   
                                     <td>
                                      {{$hs->title}}
                                    </td>
                                   
                                    <td>
                                    {{ $hs->description }}
                                    </td>
                                    
                          <td><button class="btn0 btn2"><a href="{{url('admin/updateservice')}}/{{$hs->id}}">Update</a></button></td>
                                    <td><button class="btn3 btn0" onclick="deleteservice({{$hs->id}})"><i class="fa fa-trash" aria-hidden="true"></button></td>
                                </tr>
                                
                            </tbody>
                            @endforeach
                           
                        </table>
                    </div>
                 </div>
                 <script type="text/javascript">
                   

  function deleteservice($id){
    // alert('i am here');

     if(confirm("do you want delete this Inquiry ?")){
             $.ajax({

                url:'deleteservice/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.services_'+$id).hide();
          
                        },

      error: function(response){


               alert('error');
          
                 
                  },        
          
                });

          }
      } 
       

                 </script>
                 

       @endsection