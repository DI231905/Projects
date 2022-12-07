@extends('admin.layouts.app')

@section('content')

  <div class="page mt-4 hosting-page title1" style="display: block;">
             <div class="mt-5">
                    <h4 class="mb-4"> Footer About Us  </h4>
                     <div class="detail">
                       <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Description</th>
                                   
                                </tr>
                            </thead>
                               @foreach($footer_about as $fa)
                             <tbody>
                                
                                <tr>
                                    <td>
                                        {!! $fa->description !!}
                                    </td>
                                
                    
                                  
                               <td><button class="btn0 btn2"><a href="{{url('admin/footer_about')}}/{{$fa->id}}" >Update</a></button></td>
                                   
                               
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                 </div>
           
              </div> 
           </div>
           @endsection
