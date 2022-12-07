 @extends('admin.layouts.app')

   @section('content')

          <div class="page mt-4 hosting-page title1" style="display: block;">

          
                  <div class="mt-5">
                       <div class="list1">
                        <h4 class="mb-4">Record List </h4>
                         <button class="btn1"><a href="{{url('admin/addnewrecord')}}"style="color:black">ADD</a></button>
                        
                       </div>

                     <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Total Record</th>
                                    <th>Update</th>
                                    <th>delete</th>
                                </tr>
                            </thead>
                         
                             <tbody>
                               @foreach($record as $r)
                               <tr class="record_{{$r->id}}">
                                   
                                    <td>
                                       {{$r->title}}
                                    </td>
                                    <td>
                                       {{$r->title_record }}
                                    </td>
                                   
                                   <td><button class="btn0 btn2"><a href="{{url('admin/updaterecord')}}/{{$r->id}}">Update</a></button></td> 
                                   <td><button class="btn3 btn0" onclick="deleterecord({{$r->id}})"><i class="fa fa-trash" aria-hidden="true"></button></td>          
                        
                                </tr>  
                            </tbody>
                            @endforeach
                          
                        </table>
                    </div>

                  </div>

                </div>

        <script type="text/javascript">
        
           function deleterecord($id){

                 if(confirm("do you want delete this data ?")){

                     $.ajax({

                              url:'deleterecord/'+$id,
                              type:'GET',
                              dataType: "json",

                   success: function(response){
        
                               $('.record_'+$id).hide();
          
                             },

                   error: function(response) {


                           alert('error');
          
                 
                           },        
          
                      });

                   }
               }  
      </script>

    @endsection