@extends('admin.layouts.app')

@section('content')

  <div class="page mt-4 hosting-page title1" style="display: block;">



 <div class="mt-5">
                   
                   <h4 class="mb-4">Diagnostic Services page Banner</h4>
                    
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
                           
                           @if($a->name=="Diagnostic Services")
                             <tbody>
                             
                               <tr>
                                    <td>
                                      {{$a->name}}
                                    </td>

                                      <td>
                                      {{$a->page_name}}
                                    </td>
                                   
                                    <td>

                                       <img src="/uploads/{{$a->image}}" width="120" height="100"><br>
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
                        <h4 class="mb-4">Diagnostic Services</h4>
                        <button class="btn1"><a  style="color: black"  href="{{url('admin/addnewservices1')}}">ADD</a></button>
                    </div>
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th> 
                                    <th>Hover Image</th> 
                                    <th>Title</th>
                                    <th>Description</th> 
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                           @foreach($services as $hs)
                             <tbody>
                             
                               <tr class="services1_{{$hs->id}}">
                                    <td>

                                     <img src="/uploads/{{$hs->image1}}" width="120" height="100"><br>
                                       {{$hs->image1}}  
                                                     
                                    </td>
                                    <td>

                                     <img src="/uploads/{{$hs->image2}}" width="120" height="100"><br>
                                       {{$hs->image2}}  
                                                     
                                    </td>
                                   
                                     <td>
                                      {{$hs->title}}
                                    </td>
                                   
                                    <td>
                                    {{ $hs->description }}
                                    </td>
                                    
                          <td><button class="btn0 btn2"><a href="{{url('admin/updateservice1')}}/{{$hs->id}}">Update</a></button></td>
                                    <td><button class="btn3 btn0" onclick="deleteservice1({{$hs->id}})"><i class="fa fa-trash" aria-hidden="true"></button></td>
                                </tr>
                                
                            </tbody>
                            @endforeach
                           
                        </table>
                    </div>
                 </div>
                 <script type="text/javascript">
                   

  function deleteservice1($id){
    // alert('i am here');

     if(confirm("do you want delete this Inquiry ?")){
             $.ajax({

                url:'deleteservice1/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.services1_'+$id).hide();
          
                        },

      error: function(response){


               alert('error');
          
                 
                  },        
          
                });

          }
      } 
       

                 </script>
                 

       @endsection