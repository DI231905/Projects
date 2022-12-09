<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\support\facades\Redirect;
use Illuminate\support\facades\validator;

class serviceController extends Controller
{
      public function __construct(){

                $this->middleware('auth:admin');
        }


          public function addserviceview(){
  
        return view('admin.addservices');

       }

        public function storeservice(Request $request){


        $request->validate([

             'name' => 'required',
             'image'=>'required',
             'title'=>'required',
             'short_desc' => 'required', 
             'long_desc' => 'required', 

        ]);
       
         $name=$request->input('name');
         $file=$request->file('image');
         $title=$request->input('title');
         $short_desc=$request->input('short_desc');
         $long_desc=$request->input('long_desc');

   
        $imagename='';
        
        if ($file){
          
          $destinationPath='uploads';
          $imagename=time().'_'.$file->getClientOriginalName();

          $file->move($destinationPath,$imagename);
      
        }
/*
        $serviceimage='';

        if($file1){
            
            $destinationPath='uploads';
            $serviceimage=time().'_'.$file1->getClientOriginalName();
            $file1->move($destinationPath,$serviceimage);

        }*/


         DB::table('service')->insert([ 'title'=>$title, 'name'=>$name,'image'=>$imagename, 'short_desc'=>$short_desc,'long_desc'=>$long_desc]);
       
          return redirect('admin/home')->with('error','your service has been inserted sucessfully' );
          
    }


     public function deleteservice($id){


          $services= DB::table('service')->where('id', $id)->get();

         if ($services[0]->image!='') {

             unlink(public_path("/uploads/".$services[0]->image));

          
            }


      
        DB::table('service')->where('id', $id)->delete();

      return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);

    }

      public function updateservice($id){

    

      $service= DB::table('service')->where('id', $id)->get();
       
        //$work=DB::table('work')->where('id',$id)->get();
        $data['id']=$service[0]->id;
        $data['name']=$service[0]->name;
        $data['image']=$service[0]->image;
        $data['title']=$service[0]->title;
        $data['short_desc']=$service[0]->short_desc;
        $data['long_desc']=$service[0]->long_desc;
       
        return view('admin.updateservice',$data);

       
       }

  public function storeupdateservice(Request $request,$id){


      $request->validate([

            'name' => 'required',
            'title'=> 'required',
            'short_desc' => 'required',
            'long_desc' =>'required',
           
        ]);
       
           $name=$request->input('name');
           $short_desc=$request->input('short_desc');
           $long_desc=$request->input('long_desc');
           $title=$request->input('title');
           $file=$request->file('image');

        $imagename='';

        if($file){
         
          $destinationPath='uploads';
          $imagename=time().'_'.$file->getClientOriginalName();
    
           $file->move($destinationPath,$imagename);

           DB::table('service')->where('id', $id)->update(['image'=>$imagename]);

            if ($request->input('oldimage')!='') {

              unlink(public_path("/uploads/".$request->input('oldimage')));  
             }

           }
/*
             $imagename1=' ';

        if($file1){
         
          $destinationPath='uploads';
          $imagename1=time().'_'.$file1->getClientOriginalName();
    
           $file1->move($destinationPath,$imagename1);

           DB::table('service')->where('id', $id)->update(['service_image'=>$imagename1]);

            if ($request->input('oldserviceimage')!='') {

             unlink(public_path("/uploads/".$request->input('oldserviceimage')));

             }

           }*/

          DB::table('service')->where('id', $id)->update(['name'=>$name,'title'=>$title,'short_desc'=>$short_desc,'long_desc'=>$long_desc]);

           return redirect('admin/home')->with('error','your service has been updated sucessfully' );

    }



      public function addfeatures(){
  
        return view('admin.addhomeservice');

       }

        public function storefeatures(Request $request){


        $request->validate([

             'name' =>'required',
             'icon'=>'required',
             'description'=>'required', 

        ]);
       
         $name=$request->input('name');
         $icon=$request->input('icon');
         $description=$request->input('description');
        
    

         DB::table('features')->insert(['name'=>$name,'icon'=>$icon, 'description'=>$description]);
       
          return redirect('admin/home')->with('error','your features has been inserted sucessfully' );
          
    }


     public function deletefeatures($id){

      
        DB::table('features')->where('id', $id)->delete();

      return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);

    }

      public function updatefeatures($id){

    

      $features= DB::table('features')->where('id', $id)->get();
       
        //$work=DB::table('work')->where('id',$id)->get();
        $data['id']=$features[0]->id;
        $data['name']=$features[0]->name;
        $data['icon']=$features[0]->icon;
     
     
        $data['description']=$features[0]->description;
       
        return view('admin.updatehomeservice',$data);

       
       }

  public function storeupdatefeatures(Request $request,$id){


      $request->validate([

            'name' => 'required',
            'icon'=> 'required',
            'description' => 'required',
           
           
        ]);
       
           $name=$request->input('name');
           $icon=$request->input('icon');
           $description=$request->input('description');
        

    
          DB::table('features')->where('id', $id)->update(['name'=>$name,'icon'=>$icon,'description'=>$description]);

           return redirect('admin/home')->with('error','your features has been updated sucessfully' );

    }

    public function updatemission($id)
    {
      $mission=DB::table('mission')->where('id',$id)->get();

      $data['id']=$mission[0]->id;
      $data['image']=$mission[0]->image;
      $data['mission']=$mission[0]->mission;
      $data['value']=$mission[0]->value;
      $data['promise']=$mission[0]->promise;

       
        $data['mission_name']=$mission[0]->mission_name;
        $data['value_name']=$mission[0]->value_name;
        $data['promise_name']=$mission[0]->promise_name;
      

      return view('admin.updatemission',$data);
    }

    public function storeupdatemission(Request $request,$id)
    {
      $request->validate([

            'mission' => 'required',
            'value'=> 'required',
            'promise' => 'required',
            'mission_name' => 'required',
            'value_name' => 'required',
            'promise_name' => 'required',
           
           
        ]);

      $mission=$request->input('mission');
      $value=$request->input('value');
      $promise=$request->input('promise');
      $image=$request->file('image');
      $mission_name=$request->input('mission_name');
      $value_name=$request->input('value_name');
      $promise_name=$request->input('promise_name');



      $imagename='';

        if($image){
         
          $destinationPath='uploads';
          $imagename=time().'_'.$image->getClientOriginalName();
    
           $image->move($destinationPath,$imagename);

           DB::table('mission')->where('id', $id)->update(['image'=>$imagename]);

            if ($request->input('oldimage')!='') 
            {

           unlink(public_path("/uploads/".$request->input('oldimage')));  

             }

           }

           DB::table('mission')->where('id', $id)->update(['mission'=>$mission,'value'=>$value,'promise'=>$promise,'mission_name'=>$mission_name,'value_name'=>$value_name,'promise_name'=>$promise_name, ]);

           return redirect('admin/home')->with('error','your mission has been updated sucessfully' );

    }

    public function updatewhychooseus($id)
    {
      $whychooseus=DB::table('why_choose_us')->where('id',$id)->get();

      $data['id']=$whychooseus[0]->id;
      $data['image']=$whychooseus[0]->image;
      $data['title']=$whychooseus[0]->title;
      $data['description']=$whychooseus[0]->description;

      return view('admin.updatewhychooseus',$data);
    }




    public function storeupdatewhychooseus(Request $request,$id)
    {
      $request->validate([

            'title' => 'required',
            'description'=>'required',
          
        ]);

      $title=$request->input('title');
      $description=$request->input('description');
      $image=$request->file('image');
      $imagename='';

        if($image){
         
          $destinationPath='uploads';
          $imagename=time().'_'.$image->getClientOriginalName();
    
           $image->move($destinationPath,$imagename);

           DB::table('why_choose_us')->where('id', $id)->update(['image'=>$imagename]);

            if ($request->input('oldimage')!='') 
            {

               unlink(public_path("/uploads/".$request->input('oldimage')));  

             }

           }

           DB::table('why_choose_us')->where('id', $id)->update(['title'=>$title,'description'=>$description]);

           return redirect('admin/home')->with('error','your why choose us has been updated sucessfully' );

    }

      public function updateinquirycontent($id)
    {
      $inquirycontent=DB::table('inquirycontent')->where('id',$id)->get();

      $data['id']=$inquirycontent[0]->id;
      $data['title']=$inquirycontent[0]->title;
      $data['subtitle']=$inquirycontent[0]->subtitle;
      $data['description']=$inquirycontent[0]->description;

      return view('admin.updateinquirycontent',$data);
    }

    public function storeinquirycontent(Request $request,$id)
    {
      $request->validate([

            'title' => 'required',
            'subtitle' => 'required',
            'description'=>'required',
          
        ]);

      $title=$request->input('title');
      $subtitle=$request->input('subtitle');
      $description=$request->input('description');

      DB::table('inquirycontent')->where('id',$id)->update(['title'=>$title,'subtitle'=>$subtitle,'description'=>$description]);

      return redirect('admin/home')->with('error','your inquiry content has been updated sucessfully' );
    }

    public function update_we_are_hiring($id)
    {
      $hiring=DB::table('we_are_hiring')->where('id',$id)->get();

      $data['id']=$hiring[0]->id;
      $data['image']=$hiring[0]->image;
      $data['heading']=$hiring[0]->heading;
      $data['topdescription']=$hiring[0]->topdescription;
      $data['title1']=$hiring[0]->title1;
      $data['title2']=$hiring[0]->title2;
      $data['description']=$hiring[0]->description;

      return view('admin.updatehiring',$data);
    }

    public function store_we_are_hiring(Request $request,$id)
    {
      $request->validate([

            'heading'=>'required',
            'topdescription'=>'required',
            'title1' => 'required',
            'title2' => 'required',
            'description'=>'required',
          
        ]);

      $heading=$request->input('heading');
      $topdescription=$request->input('topdescription');
      $title1=$request->input('title1');
      $title2=$request->input('title2');
      $description=$request->input('description');
      $image=$request->file('image');
      $oldimage=$request->input('oldimage');

      $imagename='';

      if($image)
      {
          
        $destinationPath='uploads';
        $imagename=time().'_'.$image->getClientOriginalName();
    
        $image->move($destinationPath,$imagename);

        DB::table('we_are_hiring')->where('id', $id)->update(['image'=>$imagename]);

        if ($request->input('oldimage')!='') 
        {

          unlink(public_path("/uploads/".$request->input('oldimage')));  

        }

      }

      DB::table('we_are_hiring')->where('id',$id)->update(['heading'=>$heading,'topdescription'=>$topdescription,'title1'=>$title1,'title2'=>$title2,'description'=>$description]);

      return redirect('admin/home')->with('error','your we are hiring content has been updated sucessfully' );
    }

}
