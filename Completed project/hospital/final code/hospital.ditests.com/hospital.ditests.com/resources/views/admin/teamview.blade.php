  
@extends('admin.layouts.app')

@section('content')

    <div class="page mt-4 hosting-page title1" style="display: block;">

   <div class="mt-5">
                    <div class="list1">
                        <h4 class="mb-4"> Doctors Team </h4>
                        <button class="btn1"><a href="{{url('admin/addteam')}}"style="color:black">ADD</a></button>
                    </div>
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Qualification</th>
                                    <th>Title</th>
                                    <th>description</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                           
                             <tbody>
                              @foreach($team as $t)
                               <tr class="team_{{$t->id}}">
                                    <td>
                                        @if($t->image !=" ")
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
                                         {{$t->qualification}}
                                    </td>
                                    <td>
                                        {{$t->title}}
                                    </td>
                                   
                                     <td>
                                        {{$t->description}}
                                    </td>
                                    
                          <td><button class="btn0 btn2"><a href="{{url('admin/updateteam')}}/{{$t->id}}">Update</a></button></td>
                          <td><button class="btn3 btn0" onclick="deleteteam({{$t->id}})"><i class="fa fa-trash" aria-hidden="true"></button></td>
                                </tr>
                               @endforeach 
                            </tbody>
                            
                           
                        </table>
                    </div>
                 </div>
            </div>
        </div>
  <script type="text/javascript">
      
       function deleteteam($id){

     if(confirm("do you want delete this Team member ?")){
             $.ajax({

                url:'deleteteam/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.team_'+$id).hide();
          
                        },

      error: function(response) {


           alert('error');
          
    
                  },        
          
                });

          }
      }

  </script>

        @endsection
