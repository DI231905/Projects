@extends('admin.layouts.app')

@section('content')

  <div class="page mt-4 hosting-page title1" style="display: block;">
          <div class="mt-5">
                    <div class="list1">
                        <h4 class="mb-4">FEATURES</h4>
                        <button class="btn1"><a href="{{url('admin/addfeatures')}}">ADD</a></button>
                    </div>
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Icon</th>

                                    <th>HoverIcon</th>
                                  
                                    <th>Name</th>
                                    <th>Description</th> 
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                           @foreach($features as $f)
                             <tbody>
                             
                               <tr class="features_{{$f->id}}">
                                    <td>

                                     <img src="/uploads/{{$f->icon}}" width="120" height="100"><br>
                                       {{$f->icon}}  
                                        
                                         
                                    </td>

                                     <td>

                                     <img src="/uploads/{{$f->icon1}}" width="120" height="100"><br>
                                       {{$f->icon1}}  
                                        
                                         
                                    </td>

                                     <td>
                                      {{$f->name}}
                                    </td>
                                   
                                    <td>
                                    {{ $f->description }}
                                    </td>
                                    
                          <td><button class="btn0 btn2"><a href="{{url('admin/updatefeatures')}}/{{$f->id}}">Update</a></button></td>
                                    <td><button class="btn3 btn0" onclick="deletefeatures({{$f->id}})"><i class="fa fa-trash" aria-hidden="true"></button></td>
                                </tr>
                                
                            </tbody>
                            @endforeach
                           
                        </table>
                    </div>
                 </div>
                 <script type="text/javascript">
                   

  function deletefeatures($id){
    // alert('i am here');

     if(confirm("do you want delete this Inquiry ?")){
             $.ajax({

                url:'deletefeatures/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.features_'+$id).hide();
          
                        },

      error: function(response){


               alert('error');
          
                 
                  },        
          
                });

          }
      } 
       

                 </script>
                 

       @endsection