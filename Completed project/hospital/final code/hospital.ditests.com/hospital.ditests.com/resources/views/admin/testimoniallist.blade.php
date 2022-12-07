@extends('admin.layouts.app')

@section('content')

 <div class="page mt-4 hosting-page title1" style="display: block;">
                <div class="mt-5">
                    <div class="list1">
                        <h4 class="mb-4">Testimonial </h4>
                        <button class="btn1"><a href="{{url('admin/addtestimonial')}}">ADD</a></button>
                    </div>
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Occupation</th>
                                    <th>Description</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                   
                                </tr>
                            </thead>
                              @foreach($testimonial as $t)
                             <tbody>
                             
                               <tr class="testimonial_{{$t->id}}">
                                    <td>
                                        @if($t->image !="")
                                        <img src="/uploads/{{$t->image}}" width="60" height="60"><br>
                                         {{$t->image}} 
                                         @else
                                         <img src="/image/team.png" width="60" height="60">
                                         @endif
                                    </td>

                                    <td>
                                       {{$t->name}} 
                                    </td>
                                    <td>
                                       {{$t->occupation}} 
                                    </td>
                                     <td>
                                      {{$t->description}} 

                                    </td>

                                  <td><button class="btn0 btn2"><a href="{{url('admin/updatetestimonial')}}/{{$t->id}}">Update</a></button></td>

                                  <td><button class="btn3 btn0" onclick="deletetestimonial({{$t->id}})"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                </tr>
                                
                            </tbody>
                            @endforeach
                          </table>
                       </div>  
                     </div> 
                 </div>
                 <script type="text/javascript">
                 	

                 	  function deletetestimonial($id){

     if(confirm("do you want delete this testimonial ?")){
             $.ajax({

                url:'deletetestimonial/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.testimonial_'+$id).hide();
          
                        },

      error: function(response) {


           alert('error');
          
 

                 
                  },        
          
                });

          }
      }

                 </script>

        @endsection