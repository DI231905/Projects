@extends('admin.layouts.app')

@section('content')

  <div class="page mt-4 hosting-page title1" style="display: block;">

                 <div class="mt-5">

                   <div class="list1">   
                  <h4 class="mb-4">ADMIN DETAIL LIST</h4>
                    
                    </div>
                    
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>   
                                    <th>Name</th>
                                    <th>Email</th> 
                                    <th>Mobile NO</th> 
                                    <th>Address</th> 
                                    <th>Facebook URL</th> 
                                    <th>Instagram URL</th>
                                    <th>Twitter URL</th>  
                                    <th>Update</th>
                                   
                                </tr>
                            </thead>
                           @foreach($admindetail as $a)
                             <tbody>
                             
                               <tr>
                                    <td>

                                       <img src="/uploads/{{$a->image}}" width="120" height="100"><br>
                                       {{$a->image}}  
                                         
                                    </td>

                                     <td>
                                      {{$a->name}}
                                    </td>

                                     <td>
                                      
                                      @foreach($email as $e)
                                        @if($a->id == $e->admin_id)
                                        <li>{{$e->email}}</li>
                                        @endif
                                     @endforeach
                                    </td>

                                     <td>

                                      @foreach($mobile_number as $m)
                                        @if($a->id == $m->admin_id)
                                        <li>{{$m->mobileno}}</li>
                                        @endif
                                     @endforeach
                                    </td>

                                     <td>
                                      {{$a->address}}
                                    </td>
                                     <td>
                                      {{$a->fb_link}}
                                    </td>
                                     <td>
                                      {{$a->insta_link}}
                                    </td>
                                     <td>
                                      {{$a->twitter_link}}
                                    </td>
                                    
                           <td><button class="btn0 btn2"><a href="{{url('admin/updateadmindetail')}}/{{$a->id}}">Update</a></button></td>

                                                
                            
                            
                                </tr>
                                
                            </tbody>
                            @endforeach
                           
                        </table>
                    </div>
                 </div>  
           </div>

           @endsection
                 
                  
                 
             
                 


               
                
                
                
                

              
               
        