@extends('admin.layouts.app')

@section('content')

  <div class="page mt-4 hosting-page title1" style="display: block;">

  	  <div class="mt-5">
                       <div class="list1">
                        <h4 class="mb-4">About Us</h4>
                        
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
                              @foreach($about_description as $ad)
                                <tr>
                                	 @foreach($about_images as $ai)

                                	   @if($ad->id == $ai->about_id)

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
                              
                                    {{$ad->title}}

                                  </div> <br>
                                  <div  class="data">
                                      <b>Main Title</b> 
                                  	</div>
                                   
                                   <div  class="data">
                      
                                   
                                       {{$ad->main_title}}
                                   

                                   </div><br>

                                   
                                  
                                   <div  class="data">
                                     <b>Description</b>
                                    </div>
                                    <div class="data">

                                    
                                       {!!$ad->description!!}
                                  
                                   </div><br>
                                   <tr>
                                   
                                    <td><button class="btn0 btn2"><a href="{{url('admin/updateaboutus')}}/{{$ad->id}}" >Update</a></button></td>
                                  </tr>
                                
                            </tbody>
                            @endforeach
                          
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