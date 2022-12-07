@extends('admin.layouts.app')

@section('content')

  <div class="page mt-4 hosting-page title1" style="display: block;">
          <div class="mt-5">
              <div class="list1">
                  <h4 class="mb-4"> Home Page Banner List</h4>
                  <button class="btn1"><a href="{{url('admin/addhomebanner')}}" style="color:black;">ADD</a></button>
              </div>
               <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>   
                                    <th>Title</th>
                                    <th>Main Heading</th> 
                                    <th>Update</th>
                                   
                                </tr>
                            </thead>
                           @foreach($banner as $b)
                             <tbody>
                             
                               <tr class="banner_{{$b->id}}">
                                    <td>

                                       <img src="/uploads/{{$b->image}}" width="400" height="200"><br>
                                       {{$b->image}}  
                                         
                                    </td>

                                     <td>
                                      {{$b->title}}
                                    </td>

                                     <td>
                                      @foreach( $more_maintitle as $m)
                                        @if($b->id == $m->banner_id)
                                        <li>{{$m->more_maintitle}}</li>
                                        @endif
                                     @endforeach
                                    </td>
                                    
                           <td><button class="btn0 btn2"><a href="{{url('admin/updatebanner')}}/{{$b->id}}">Update</a></button></td>

                              <td><button class="btn3 btn0" onclick="deletehomebanner({{$b->id}})"><i class="fa fa-trash" aria-hidden="true"></button></td>                      
                            
                            
                                </tr>
                                
                            </tbody>
                            @endforeach
                           
                        </table>
                    </div>
          </div>
      </div>
      <script type="text/javascript">
        
         function deletehomebanner($id){

     if(confirm("do you want delete this banner ?")){
             $.ajax({

                url:'deletehomebannerdata/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.banner_'+$id).hide();
          
                        },

      error: function(response) {


           alert('error');
          
                 
                  },        
          
                });

          }
      }  
      </script>

       @endsection