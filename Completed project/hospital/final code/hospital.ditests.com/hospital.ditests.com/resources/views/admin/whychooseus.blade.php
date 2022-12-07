@extends('admin.layouts.app')

@section('content')

  <div class="page mt-4 hosting-page title1" style="display: block;">

  	  <div class="mt-5">
                       <div class="list1">
                        <h4 class="mb-4">Why Choose Us</h4>
                        
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
                              @foreach($whychooseus as $w)
                                <tr>
                                	

                                        <td>
                                           <img src="/uploads/{{$w->image}}" width="200" height="200"><br>

                                           {{$w->image}}  
                                        </td>
                                  

                                 </tr> <br>
                                       
                                  <div class="data">
                                      <b>Title</b>
                                  </div>

                                   
                                   <div class="data">
                              
                                    {{$w->title}}

                                  </div> <br>
                                  <div  class="data">
                                      <b>Main Title</b> 
                                  	</div>
                                   
                                   <div  class="data">
                      
                                   
                                       {{$w->main_title}}
                                   

                                   </div><br>

                                     <div  class="data">
                                      <b>Description</b> 
                                    </div>
                                   
                                   <div  class="data">
                      
                                   
                                       {{$w->description}}
                                   

                                   </div><br>
                                  
                                   <tr>
                                   
                                    <td><button class="btn0 btn2"><a href="{{url('admin/updatewhychooseus')}}/{{$w->id}}">Update</a></button></td>
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
                        <h4 class="mb-4">BENIFITS</h4>
                        <button class="btn1"><a href="{{url('admin/addbenifits')}}"style="color:black">ADD</a></button>
                    </div>
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Icon</th>
                                  
                                    <th>Name</th>
                                    <th>Description</th> 
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                           @foreach($benifits as $b)
                             <tbody>
                             
                               <tr class="benifits_{{$b->id}}">
                                    <td>

                                       <i class="{{$b->icon}}"></i>
                                        
                                         
                                    </td>

                                     <td>
                                      {{$b->name}}
                                    </td>
                                   
                                    <td>
                                    {{ $b->description }}
                                    </td>
                                    
                          <td><button class="btn0 btn2"><a href="{{url('admin/updatebenifits')}}/{{$b->id}}">Update</a></button></td>
                                    <td><button class="btn3 btn0" onclick="deletebenifits({{$b->id}})"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                </tr>
                                
                            </tbody>
                            @endforeach
                           
                        </table>
                    </div>
                 </div>
               </div>


           
                 <script type="text/javascript">

            function  deletebenifits($id){
 
     if(confirm("do you want delete this Inquiry ?")){
             $.ajax({

                url:' deletebenifits/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.benifits_'+$id).hide();
          
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

 