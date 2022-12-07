@extends('admin.layouts.app')

@section('content')

    <div class="page mt-4 hosting-page title1" style="display: block;"><div class="mt-5">
                   
                   <h4 class="mb-4">Gallery page Banner</h4>
                    
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th> 
                                    <th>Page Name</th>   
                                    <th>Image</th> 
                                    <th>Update</th>
                                   
                                </tr>
                            </thead>
                           @foreach($allbanner as $a)
                           
                           @if($a->name=="Gallery")
                             <tbody>
                             
                               <tr>
                                    <td>
                                      {{$a->name}}
                                    </td>

                                      <td>
                                      {{$a->page_name}}
                                    </td>
                                   
                                    <td>

                                       <img src="/uploads/{{$a->image}}" width="400" height="200"><br>
                                       {{$a->image}}  
                                         
                                    </td>

                                     
                             <td><button class="btn0 btn2"><a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update</a></button></td>
                                   
                                </tr>
                                
                            </tbody>
                            @endif
                            @endforeach
                           
                        </table>
                    </div>
                 </div>
               </div>
              @endsection