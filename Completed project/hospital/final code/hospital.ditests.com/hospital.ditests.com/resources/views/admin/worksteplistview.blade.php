 @extends('admin.layouts.app')

   @section('content')

          <div class="page mt-4 hosting-page title1" style="display: block;">

            

                  <div class="mt-5">
                       <div class="list1">
                        <h4 class="mb-4">HOW TO WORK </h4>
                         <button class="btn1"><a href="{{url('admin/addwrokstep')}}"style="color:black">ADD</a></button>
                        
                       </div>

                     <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Step_No</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Update</th>
                                    <th>delete</th>
                                </tr>
                            </thead>
                         
                             <tbody>
                               @foreach($workstep as $w)
                               <tr class="workstep_{{$w->id}}">
                                    <td>
                                        <img src="/uploads/{{$w->image}}" width="60" height="60"><br>

                                       {{$w->image}}  
                                    </td>
                                    <td>
                                       {{$w->step_no}}
                                    </td>
                                    <td>
                                       {{$w->title}}
                                    </td>
                                    <td>
                                       {!!$w->description!!}
                                    </td>
                                   
                                   <td><button class="btn0 btn2"><a href="{{url('admin/updateworkstep')}}/{{$w->id}}" >Update</a></button></td> 
                                   <td><button class="btn3 btn0" onclick="deleteworkstep({{$w->id}})"><i class="fa fa-trash" aria-hidden="true"></button></td>          
                        
                                </tr>
                               
                                
                            </tbody>
                            @endforeach
                          
                        </table>
                    </div>

                  </div>

                </div>

        <script type="text/javascript">
        
           function deleteworkstep($id){

                 if(confirm("do you want delete this banner ?")){

                     $.ajax({

                              url:'deleteworkstep/'+$id,
                              type:'GET',
                              dataType: "json",

                   success: function(response){
        
                               $('.workstep_'+$id).hide();
          
                             },

                   error: function(response) {


                           alert('error');
          
                 
                           },        
          
                      });

                   }
               }  
      </script>

    @endsection
          
                 