@extends('admin.layouts.app')

@section('content')

  <div class="page mt-4 hosting-page title1" style="display: block;">
             <div class="mt-5">
                     <div class="list1">
                       <h4 class="mb-4">Inquiry </h4>
                        
                    </div>
                       <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                        
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Mobile no</th>      
                                    <th>Description</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                             @foreach($enquires as $e)
                            <tbody>

                                <tr class="enquires_{{$e->id}}">
                                    <td>
                                        
                                      {{$e->fname}}  
                                         
                                    </td>
                                     <td>
                                        
                                      {{$e->lname}}  
                                         
                                    </td>
                                    <td>
                                        {{$e->email}}
                                    </td>
                                   
                                    <td>
                                        {{$e->mobileno}}
                                   </td>
                                  
                                  <td>{{$e->description}}</td>


                         
                                    <td><button class="btn3 btn0" onclick="deleteinquiry({{$e->id}})"><i class="fa fa-trash" aria-hidden="true"></a></button></td>
                                </tr>
                          
                            </tbody>
                            @endforeach
                             
                        </table>
                    </div>
                </div>
           </div>

           <script type="text/javascript">


            function deleteinquiry($id){

     if(confirm("do you want delete this record ?")){
             $.ajax({

                url:'deleteenquiry/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.enquires_'+$id).hide();
          
                        },

      error: function(response) {


           alert('error');
          
                 
                  },        
          
                });

          }
      }

      
           </script>

       @endsection