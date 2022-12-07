             

 @extends('admin.layouts.app')

   @section('content')

         <div class="page mt-4 hosting-page title1" style="display: block;">

               <div class="mt-5">
                    <div class="list1">
                        <h4 class="mb-4">Mission-vision</h4>
                       
                    </div>
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Icon</th>
                                  
                                    <th>Title</th>
                                    <th>Description</th> 
                                    <th>Update</th>
                                    
                                </tr>
                            </thead>
                           @foreach($mission_vision as $m)
                             <tbody>
                             
                               <tr>
                                    <td>
                                      
                                       <i class="{{$m->icon}}"></i>                                        
                                         
                                    </td>

                                     <td>
                                      {{$m->title}}
                                    </td>
                                   
                                    <td>
                                    {{ $m->description }}
                                    </td>
                                    
                                   <td><button class="btn0 btn2"><a href="{{url('admin/updatemissionvision')}}/{{$m->id}}">Update</a></button></td>
                                    
                                </tr>
                                
                            </tbody>
                            @endforeach
                           
                        </table>
                    </div>
                 </div>
            @endsection
                 
                 
                 