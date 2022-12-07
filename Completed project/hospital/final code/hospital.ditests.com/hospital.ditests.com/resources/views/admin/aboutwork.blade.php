@extends('admin.layouts.app')

@section('content')

  <div class="page mt-4 hosting-page title1" style="display: block;">

  	  <div class="mt-5">
                       <div class="list1">
                        <h4 class="mb-4">What We Do</h4>
                        
                       </div>

                     <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                  <!--   <th>Image</th>
                                    <th>Mission</th>
                                    <th>Value</th>
                                    <th>Promise</th> -->
                                    <th>Images</th>
                                </tr>
                            </thead>
                         
                             <tbody>
                              @foreach($about_work as $aw)
                                <tr>
                                	 @foreach($about_workimage as $ai)

                                	   @if($aw->id == $ai->work_id)

                                        <td>
                                           <img src="/uploads/{{$ai->image}}" width="200" height="200"><br>

                                           {{$ai->image}}  
                                        </td>
                                      @endif
                                    @endforeach

                                 </tr> <br>
                                       
                                  <div class="data">
                                      <b>Title</b>
                                  </div>

                                   
                                   <div class="data">
                              
                                    {{$aw->title}}

                                  </div> <br>
                                  <div  class="data">
                                      <b>Main Title</b> 
                                  	</div>
                                   
                                   <div  class="data">
                      
                                   
                                       {{$aw->main_title}}
                                   

                                   </div><br>

                                   
                                  
                                  
                                   <tr>
                                   
                                    <td><button class="btn0 btn2"><a href="{{url('admin/updateaboutwork')}}/{{$aw->id}}" >Update</a></button></td>
                                  </tr>
                                
                            </tbody>
                            @endforeach
                          
                        </table>
                    </div>

                  </div>

              </div>


               <div class="page mt-4 hosting-page title1" style="display: block;">
          <div class="mt-5">
                    <div class="list1">
                        <h4 class="mb-4">WORK BENIFITS </h4>
                        <button class="btn1"><a href="{{url('admin/addworkbenifits')}}">ADD</a></button>
                    </div>
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Icon</th>
                                    <th>Title</th>
                                    <th>Description</th> 
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                           @foreach($work_benifits as $wb)
                             <tbody>
                             
                               <tr class="workbenifits_{{$wb->id}}">
                                    <td>

                                       <i class="{{$wb->icon}}"></i> 
                                        
                                         
                                    </td>

                                     <td>
                                      {{$wb->title}}
                                    </td>
                                   
                                    <td>
                                    {{ $wb->description }}
                                    </td>
                                    
                          <td><button class="btn0 btn2"><a href="{{url('admin/updateworkbenifits')}}/{{$wb->id}}">Update</a></button></td>
                                    <td><button class="btn3 btn0" onclick=" deleteworkbenifits({{$wb->id}})"><i class="fa fa-trash" aria-hidden="true"></button></td>
                                </tr>
                                
                            </tbody>
                            @endforeach
                           
                        </table>
                    </div>
                 </div>

                 <script type="text/javascript">

            function  deleteworkbenifits($id){
 
     if(confirm("do you want delete this Inquiry ?")){
             $.ajax({

                url:' deleteworkbenifits/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.workbenifits_'+$id).hide();
          
                        },

      error: function(response){


               alert('error');
          
                 
                  },        
          
                });

          }
      } 
       
                   

                 </script>
                   

  <style type="text/css">
  	.data{

  		margin-left: 25px;
  	}

  </style>
  @endsection

 