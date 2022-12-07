@extends('admin.layouts.app')

@section('content')

  <div class="page mt-4 hosting-page title1" style="display: block;">

  	  <div class="mt-5">
                       <div class="list1">
                        <h4 class="mb-4">Team Page Description</h4>
                        
                       </div>

                     <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                  <!--   <th>Image</th>
                                    <th>Mission</th>
                                    <th>Value</th>
                                    <th>Promise</th> -->
                                   
                                </tr>
                            </thead>
                         
                             <tbody>
                              @foreach($teamdescription as $td)
                               
                                  <br>   
                                  <div class="data">
                                      <b>Title</b>
                                  </div>

                                   
                                   <div class="data">
                              
                                    {{$td->title}}

                                  </div> <br>
                                  <div  class="data">
                                      <b>Main Title</b> 
                                  	</div>
                                   
                                   <div  class="data">
                      
                                   
                                       {{$td->main_title}}
                                   

                                   </div><br>

                                   
                                  
                                   <div  class="data">
                                     <b>Description</b>
                                    </div>
                                    <div class="data">

                                    
                                       {!!$td->description!!}
                                  
                                   </div><br>
                                   <tr>
                                   
                                    <td><button class="btn0 btn2"><a href="{{url('admin/updateteamdescription')}}/{{$td->id}}">Update</a></button></td>
                                  </tr>
                                 @endforeach
                            </tbody>
                           
                          
                        </table>
                    </div>

                  </div>

  </div>

  <style type="text/css">
  	.data{

  		margin-left: 25px;
  	}

  </style>
  @endsection