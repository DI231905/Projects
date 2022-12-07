@extends('admin.layouts.app')

@section('content')

  <div class="page mt-4 hosting-page title1" style="display: block;">
             
                <div class="mt-5">
                    <h4 class="mb-4">GET IN TOUCH </h4>
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                     <th>Mobile NO</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                              @foreach($contact_us as $cu)
                            <tbody>
                             
                                <tr class="contact_{{$cu->id}}">
                                    <td>
                                      {{$cu->name}}
                                    </td>
                                

                                    <td>
                                        {{$cu->email}}
                                    </td>
                                     <td>
                                        {{$cu->mobileno}}
                                    </td>
                                    <td>
                                       {{$cu->subject}}
                                    </td>
                                    <td>
                                       {{$cu->description}}
                                   </td>
                        
                                    <td><button class="btn3 btn0" onclick="deletecontact({{$cu->id}})"><i class="fa fa-trash" aria-hidden="true"></button></td>
                                </tr>
                                
                            </tbody>
                            @endforeach
                        
                        </table>
                    </div>
                </div> 
         
           </div>

           <script type="text/javascript">

function deletecontact($id){

     if(confirm("do you want delete this message ?")){
             $.ajax({

                url:'deletecontact/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.contact_'+$id).hide();
          
                        },

      error: function(response) {


           alert('error');
          
    
                  },        
          
                });

          }
      }


          

      
           </script>

       @endsection