     
@extends('admin.layouts.app')

@section('content')

  <div class="page mt-4 hosting-page title1" style="display: block;">

       <div class="mt-5">
                      <h4 class="mb-4">History</h4>
                    
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th> 
                                    <th>signature Image</th> 
                                    <th>Name</th> 
                                    <th>Image Title</th>
                                     <th>Title</th>
                                    <th>Description</th> 
                                     <th>Designation</th>
                                    <th>Update</th>
                                   
                                </tr>
                            </thead>
                            @foreach($homeaboutus as $h)
                             <tbody>
                             
                               <tr class="banner_{{$h->id}}">
                                    <td>

                                     <img src="/uploads/{{$h->image}}" width="200" height="200"><br>
                                      {{$h->image}}  
                                         
                                    </td>
                                     <td>

                                     <img src="/uploads/{{$h->sign_image}}" width="200" height="200"><br>
                                      {{$h->sign_image}}  
                                         
                                    </td>
                                    <td>
                                      {{$h->name}}
                                    </td>
                                      <td>
                                      {!!$h->imagetitle!!}
                                    </td>

                                     <td>
                                      {{$h->title}}
                                    </td>
                                     <td>
                                      {{$h->Designation}}
                                    </td>
                                   
                                    <td>
                                      {!! $h->description !!}
                                    </td>
                                    
                              <td><button class="btn0 btn2"><a href="{{url('admin/updatehomeaboutus')}}/{{$h->id}}">Update</a></button></td>
                                   
                                </tr>
                                
                            </tbody>
                            @endforeach
                           
                        </table>
                    </div>
                 </div>   
               </div>
            @endsection