<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\carbon;
use DB;
use Hash;
use \Crypt;
use Illuminate\support\facades\Auth;
use Illuminate\support\facades\Redirect;
use Illuminate\support\facades\validator;

class AboutUsController extends Controller
{
     public function aboutusBannerlist(){

           $allbanner=DB::table('banner_image')->get();
           $data['allbanner']=$allbanner;
         

             return view('admin.aboutusbannerlist',$data);
 
         }

       
       
            public function updatebannerimg($id)
          {
            $allbanner= DB::table('banner_image')->where('id', $id)->get(); 

            $name=$allbanner[0]->name;

              $data['id']=$allbanner[0]->id;
              $data['image']=$allbanner[0]->image;
              $data['name']=$allbanner[0]->name;
              $data['page_name']=$allbanner[0]->page_name;

               return view('admin.updatebannerimage',$data);
            
          }

          public function storeupdatebannerimg(Request $request,$id)
          {

            
             $image=$request->file('image');
             $page_name=$request->input('page');
              $name=$request->input('name');
   
             $imagename='';

            if($image)
            {
              $destinationPath='uploads';
              $imagename=time().'_'.$image->getClientOriginalName();
    
              $image->move($destinationPath,$imagename);

              DB::table('banner_image')->where('id', $id)->update(['image'=>$imagename]);

              if ($request->input('oldimage')!='') 
              {
                  unlink(public_path("/uploads/".$request->input('oldimage')));  
              }

             
              }

             DB::table('banner_image')->where('id', $id)->update(['page_name'=>$page_name]);

              if($name=="About Us"){

                return redirect('admin/aboutusBannerlist')->with('error',' update banner image succcesfully!!!!');
             }

              elseif($name=="Doctors"){

                return redirect('admin/doctorbanner')->with('error',' update banner image succcesfully!!!!');
             }
              elseif($name=="Gallery"){

                return redirect('admin/gallarybanner')->with('error',' update banner image succcesfully!!!!');
             }
            elseif($name=="Hospital Service"){

                return redirect('admin/hospital_service')->with('error',' update banner image succcesfully!!!!');
             }
              elseif($name=="Diagnostic Services"){

                return redirect('admin/diagnostic_service')->with('error',' update banner image succcesfully!!!!');
             }

              elseif($name=="Contact Us"){

                return redirect('admin/diagnostic_service')->with('error',' update banner image succcesfully!!!!');
             }
          }


          

         public function aboutusdescription(){

             $about_description=DB::table('about_description')->get();
             $data['about_description']=$about_description;

             $about_images=DB::table('about_images')->get();
             $data['about_images']=$about_images;
         
             return view('admin.aboutus',$data);
 
         }


          public function  updateaboutus($id){

              $about_description=DB::table('about_description')->where('id',$id)->get();
              $data['id']=$about_description[0]->id;
              $data['title']=$about_description[0]->title;
              $data['main_title']=$about_description[0]->main_title;
              $data['description']=$about_description[0]->description;
           
             $about_images=DB::table('about_images')->where('about_id',$id)->get();
             $data['about_images']=$about_images;
         
             return view('admin.updateaboutus',$data);
 
         }

         public function storeaboutus(Request $request,$id){

         	 $request->validate([

                  'title' => 'required', 
                  'main_title' => 'required',
                  'description' => 'required',
            
            ]);
       
            $title=$request->input('title');
            $main_title=$request->input('main_title');
            $description=$request->input('description');


                 $file=$request->file('file');

          if($file !=''){


              $filename='';
          
       
              foreach($file as $key =>$f) {

               $destinationPath='uploads';
               $filename=time().'_'.$f->getClientOriginalName();
 
               $f->move($destinationPath,$filename);

                DB::table('about_images')->insert(['image'=>$filename,'about_id'=>$id]);
             
               }
           }

             DB::table('about_description')->where('id',$id)->update(['title'=>$title,'main_title'=>$main_title,'description'=>$description]);

             return redirect('admin/aboutusdescription')->with('error','your about us data updated sucessfully!!');

         }


          public function deleteimage($id){


     	   $about_images=DB::table('about_images')->where('id', $id)->get();

           if($about_images[0]->image!='') {

               unlink(public_path("/uploads/".$about_images[0]->image));

              }


  
        DB::table('about_images')->where('id', $id)->delete();

      return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);

    }


      public function ourmissionvision(){

           $mission_vision=DB::table('mission-vision')->get();
           $data['mission_vision']=$mission_vision;
         

             return view('admin.missionvisionview',$data);
 
         }

        

          public function updatemissionvision($id){

              $mission_vision=DB::table('mission-vision')->where('id',$id)->get();
              $data['id']=$mission_vision[0]->id;
              $data['title']=$mission_vision[0]->title;
               $data['icon']=$mission_vision[0]->icon;  
              $data['description']=$mission_vision[0]->description;
           
         
             return view('admin.updatemissionvision',$data);
 
          }

             public function storemissionvision(Request $request,$id){


             $request->validate([

             'title' =>'required',
             'icon'=>'required',
             'description'=>'required', 

          ]);
       
           $title=$request->input('title');
           $icon=$request->input('icon');
           $description=$request->input('description');
        
    

          DB::table('mission-vision')->where('id', $id)->update(['title'=>$title,'icon'=>$icon,'description'=>$description]);

           return redirect('admin/ourmissionvision')->with('error','your data has been updated sucessfully' );

          
    }

         public function aboutwork(){

      	     $about_work=DB::table('about_work')->get();
             $data['about_work']=$about_work;

             $about_workimage=DB::table('about_workimage')->get();
             $data['about_workimage']=$about_workimage;

            $work_benifits=DB::table('work_benifits')->get();
             $data['work_benifits']=$work_benifits;
  
         
            return view('admin.aboutwork',$data);


      }

      

       public function  updateaboutwork($id){

             $about_description=DB::table('about_work')->where('id',$id)->get();
              $data['id']=$about_description[0]->id;
              $data['title']=$about_description[0]->title;
              $data['main_title']=$about_description[0]->main_title;
           
           
             $about_workimage=DB::table('about_workimage')->get();
             $data['about_workimage']=$about_workimage;


             return view('admin.updateaboutwork',$data);
 
         }


   public function storeaboutwork(Request $request,$id){

         	 $request->validate([

                  'title' => 'required', 
                  'main_title' => 'required',
                 
            
            ]);
       
            $title=$request->input('title');
            $main_title=$request->input('main_title');
            $description=$request->input('description');


               $file=$request->file('file');

           if($file !=''){

              $filename='';
          
              foreach($file as $key =>$f) {

               $destinationPath='uploads';
               $filename=time().'_'.$f->getClientOriginalName();
 
               $f->move($destinationPath,$filename);

                DB::table('about_workimage')->insert(['image'=>$filename,'work_id'=>$id]);
             
               }
           }

             DB::table('about_work')->where('id',$id)->update(['title'=>$title,'main_title'=>$main_title]);

             return redirect('admin/aboutwork')->with('error','your what we do data updated sucessfully!!');

         }

           public function deleteworkimage($id){


     	   $about_workimage=DB::table('about_workimage')->where('id', $id)->get();

           if($about_workimage[0]->image!='') {

               unlink(public_path("/uploads/".$about_workimage[0]->image));

              }

         DB::table('about_workimage')->where('id', $id)->delete();

      return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);

    }

    


        public function addworkbenifits(){
  
        return view('admin.addworkbenifits');

       }

        public function storeworkbenifits(Request $request){


        $request->validate([

             'title' =>'required',
             'icon'=>'required',
             'description'=>'required', 

        ]);
       
         $title=$request->input('title');
         $icon=$request->input('icon');
         $description=$request->input('description');
        
    

         DB::table('work_benifits')->insert(['title'=>$title,'icon'=>$icon,'description'=>$description]);
       
          return redirect('admin/aboutwork')->with('error','your work benifits has been inserted sucessfully' );
          
    }


     public function deletefeatures($id){

      
        DB::table('features')->where('id', $id)->delete();

      return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);

    }

      public function updateworkbenifits($id){

    

      $work_benifits= DB::table('work_benifits')->where('id', $id)->get();
       
        //$work=DB::table('work')->where('id',$id)->get();
        $data['id']=$work_benifits[0]->id;
        $data['title']=$work_benifits[0]->title;
        $data['icon']=$work_benifits[0]->icon;
        $data['description']=$work_benifits[0]->description;
       
        return view('admin.updateworkbenifits',$data);

       
       }

  public function storeupdateworkbenifits(Request $request,$id){


      $request->validate([

            'title' => 'required',
            'icon'=> 'required',
            'description' => 'required',
           
           
        ]);
       
           $title=$request->input('title');
           $icon=$request->input('icon');
           $description=$request->input('description');
        

    
          DB::table('work_benifits')->where('id', $id)->update(['title'=>$title,'icon'=>$icon,'description'=>$description]);

           return redirect('admin/aboutwork')->with('error','your work benifits has been updated sucessfully' );

    }

      public function deleteworkbenifits($id){

      
        DB::table('work_benifits')->where('id', $id)->delete();

      return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);

    }

         public function whychooseus(){

           $whychooseus=DB::table('whychooseus')->get();
           $data['whychooseus']=$whychooseus;

            $benifits=DB::table('benifits')->get();
           $data['benifits']=$benifits;
  
  
            return view('admin.whychooseus',$data);

        }

       public function updatewhychooseus($id){

        $whychooseus= DB::table('whychooseus')->where('id', $id)->get();
      
        $data['id']=$whychooseus[0]->id;
        $data['title']=$whychooseus[0]->title;
        $data['main_title']=$whychooseus[0]->main_title;
        $data['image']=$whychooseus[0]->image;
        $data['description']=$whychooseus[0]->description;
       
        return view('admin.updatewhychooseus',$data);


       }

       

        public function storewhychooseus(Request $request ,$id){

         $request->validate([

            'title' => 'required',
            'main_title' => 'required',
            'description' => 'required',
           
           ]);
       
           $title=$request->input('title');
           $main_title = $request->input('main_title');
           $description=$request->input('description');
           $file=$request->file('image');
        
           $imagename=' ';

            if($file){
         
           $destinationPath='uploads';
           $imagename=time().'_'.$file->getClientOriginalName();
    
           $file->move($destinationPath,$imagename);

           DB::table('whychooseus')->where('id', $id)->update(['image'=>$imagename]);

            if ($request->input('oldimage')!='') {


                 unlink(public_path("/uploads/".$request->input('oldimage')));  

             }

           }

          DB::table('whychooseus')->where('id', $id)->update(['title'=>$title ,'main_title'=>$main_title,'description'=>$description]);

           return redirect('admin/whychooseus')->with('error',' update why choose us data succcesfully!!!!');
 
          }

            public function addbenifits(){
  
        return view('admin.addbenifits');

       }

        public function storebenifits(Request $request){


        $request->validate([

             'name' =>'required',
             'icon'=>'required',
             'description'=>'required', 

        ]);
       
         $name=$request->input('name');
         $icon=$request->input('icon');
         $description=$request->input('description');
        
    

         DB::table('benifits')->insert(['name'=>$name,'icon'=>$icon, 'description'=>$description]);
       
          return redirect('admin/whychooseus')->with('error','your benifits has been inserted sucessfully' );
          
    }


     public function deletebenifits($id){

      
        DB::table('benifits')->where('id', $id)->delete();

      return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);

    }

      public function updatebenifits($id){

    

      $benifits= DB::table('benifits')->where('id', $id)->get();
       
        //$work=DB::table('work')->where('id',$id)->get();
        $data['id']=$benifits[0]->id;
        $data['name']=$benifits[0]->name;
        $data['icon']=$benifits[0]->icon;
     
     
        $data['description']=$benifits[0]->description;
       
        return view('admin.updatebenifits',$data);

       
       }

  public function storeupdatebenifits(Request $request,$id){


      $request->validate([

            'name' => 'required',
            'icon'=> 'required',
            'description' => 'required',
           
           
        ]);
       
           $name=$request->input('name');
           $icon=$request->input('icon');
           $description=$request->input('description');
        

    
          DB::table('benifits')->where('id', $id)->update(['name'=>$name,'icon'=>$icon,'description'=>$description]);

           return redirect('admin/whychooseus')->with('error','your benifits has been updated sucessfully' );

    }

    

         public function achivementlist(){

           $achivement=DB::table('achivement')->get();
           $data['achivement']=$achivement;      
  
           return view('admin.achivementlist',$data);

        }

        

          public function addachivement(){
         
            return view('admin.addachivement');
        }
      public function storeachivement(Request $request){
   
               $request->validate([

                  'file' => 'required',
              
                
                  ]);

                 $file=$request->file('file');

                 $filename='';
       
         foreach($file as $key =>$f) {

             $destinationPath='uploads';
             $filename=time().'_'.$f->getClientOriginalName();
 
             $f->move($destinationPath,$filename);

             DB::table('achivement')->insert(['file'=>$filename]);
             
             
             }
 
              return redirect('admin/achivementlist')->with('error','your file insert sucessfully!!');
          } 

          

         public function deleteachivment($id){


         $achivement=DB::table('achivement')->where('id', $id)->get();

           if($achivement[0]->file!='') {

               unlink(public_path("/uploads/".$achivement[0]->file));

              }

         DB::table('achivement')->where('id', $id)->delete();

      return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);

    }


    

       public function doctorbanner(){

            $allbanner=DB::table('banner_image')->get();
           $data['allbanner']=$allbanner;
         
           return view('admin.doctorbanner',$data);

        }



       public function teamdescription(){

           $teamdescription=DB::table('teamdescription')->get();
           $data['teamdescription']=$teamdescription;      
  
           return view('admin.teamdescriptionview',$data);

        }

          public function updateteamdescription($id){

              $teamdescription=DB::table('teamdescription')->where('id',$id)->get();
              $data['id']=$teamdescription[0]->id;
              $data['title']=$teamdescription[0]->title;
              $data['main_title']=$teamdescription[0]->main_title;
              $data['description']=$teamdescription[0]->description;
              
             return view('admin.updateteamdescription',$data);
 
           }

         public function storeteamdescription(Request $request,$id){

           $request->validate([

                  'title' => 'required', 
                  'main_title' => 'required',
                  'description' => 'required',
            
            ]);
       
            $title=$request->input('title');
            $main_title=$request->input('main_title');
            $description=$request->input('description'); 


             DB::table('teamdescription')->where('id',$id)->update(['title'=>$title,'main_title'=>$main_title,'description'=>$description]);

             return redirect('admin/teamdescription')->with('error','your team page description data updated sucessfully!!');

         }

          public function teamview(){

           $team=DB::table('team')->get();
           $data['team']=$team;      
  
           return view('admin.teamview',$data);

        }

         public function addteam(){

           return view('admin.addteamview');

        }

          public function storeteam(Request $request){


         $request->validate([

            'name' => 'required',
            'qualification' => 'required',
            'title' => 'required',
            'description' => 'required',
                   

        ]);
       

        $name=$request->input('name');
        $file=$request->file('image');
        $qualification=$request->input('qualification');
        $title=$request->input('title');
        $description=$request->input('description');
        $imagename=' ';

        if ($file) {
          
          $destinationPath='uploads';
          $imagename=time().'_'.$file->getClientOriginalName();

         $file->move($destinationPath,$imagename);
      
        }
  
         DB::table('team')->insert(['name'=>$name,'image'=>$imagename,'qualification'=>$qualification,'title'=>$title,'description'=>$description]);
       
          return redirect('admin/teamview')->with('error',' Insert Team member data succcesfully!!!!');

          }

       public function deleteteam($id){


        $team= DB::table('team')->where('id', $id)->get();

         if ($team[0]->image!='') {

            unlink(public_path("/uploads/".$team[0]->image));


          }

        DB::table('team')->where('id', $id)->delete();

   return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);


     
          } 

      public function updateteam($id){

       $team= DB::table('team')->where('id', $id)->get();
      
        $data['id']=$team[0]->id;
        $data['name']=$team[0]->name;
        $data['image']=$team[0]->image;
        $data['qualification']=$team[0]->qualification;
        $data['title']=$team[0]->title;
        $data['description']=$team[0]->description;
  
        return view('admin.updateteam',$data);   

        }

      public function storeupdateteam(Request $request,$id){


           $request->validate([

            'name' => 'required',
            'qualification' => 'required',
            'title' => 'required',
            'description' => 'required',
           
           
        ]);
       
        $name=$request->input('name');
        $file=$request->file('image');
        $qualification=$request->input('qualification');
        $title=$request->input('title');
        $description=$request->input('description');
       
        $imagename=' ';

        if($file){
         
          $destinationPath='uploads';
          $imagename=time().'_'.$file->getClientOriginalName();
    
           $file->move($destinationPath,$imagename);

           DB::table('team')->where('id', $id)->update(['image'=>$imagename]);

            if ($request->input('oldimage')!='') {

                unlink(public_path("/uploads/".$request->input('oldimage'))); 

             }

           }

          DB::table('team')->where('id', $id)->update(['name'=>$name,'qualification'=>$qualification,'title'=>$title,'description'=>$description]);

           return redirect('admin/teamview')->with('error',' update Team member data succcesfully!!!!');;

          }


          public function gallaryview(){

            $gallary=DB::table('gallary')->get();
            $data['gallary']=$gallary;   

            return view('admin.gallaryview',$data);
  

          }

         public function gallarybanner(){

             $allbanner=DB::table('banner_image')->get();
             $data['allbanner']=$allbanner;
         
           return view('admin.gallarybanner',$data);

        }


          

              public function addgallary(){
         
              return view('admin.gallary');
        }
      public function storegallary(Request $request){
   
               $request->validate([

                  'file' => 'required',
              
                  'file.*' =>'mimes:mp4,jpeg,jpg,png','max:40000'
  
                  ]);

                 $file=$request->file('file');
                 $filename=' ';
       
         foreach($file as $key =>$f) {

             $destinationPath='uploads';
             $filename=time().'_'.$f->getClientOriginalName();


             $extenstion ='.'.$f->getClientOriginalExtension();
        
              echo $filename; echo '<br>';
              echo $extenstion;

             $f->move($destinationPath,$filename);

             DB::table('gallary')->insert(['file'=>$filename,'extension'=>$extenstion]);
             
             
             }
 
              return redirect('admin/gallaryview')->with('error','your file insert sucessfully!!');
          } 



     public function deletegallaryimage($id){

        $gallary= DB::table('gallary')->where('id', $id)->get();

         if ($gallary[0]->file!='') {

            unlink(public_path("/uploads/".$gallary[0]->file));

          }

        DB::table('gallary')->where('id', $id)->delete();
    }


    public function hospital_service(){

        $allbanner=DB::table('banner_image')->get();
        $data['allbanner']=$allbanner;
         

        $services=DB::table('services')->get();
        $data['services']=$services;

      return view('admin.hospital_service',$data);
    }


      public function addnewservices(){

      return view('admin.addnewservice',$data);
    }

     public function storeservice(Request $request){


        $request->validate([

             'name' =>'required',
             'image'=>'required',
           
             'description'=>'required', 

        ]);
       
         $name=$request->input('name');
         $file=$request->file('image');
         $description=$request->input('description');
        /* $type1=$request->input('type');

         $type=DB::table('service_type')->where('id', $type1)->get();
         $service_type=$type[0]->id;
*/
           $imagename='';
        
           if($file){
          
               $destinationPath='uploads';
               $imagename=time().'_'.$file->getClientOriginalName();
               $file->move($destinationPath,$imagename);
       
              }
    

         DB::table('services')->insert(['title'=>$name,'image'=>$imagename, 'description'=>$description]);

         
          return redirect('admin/hospital_service')->with('error','your service has been inserted sucessfully' );
         
    }

      public function updateservice($id){

    

      $services= DB::table('services')->where('id', $id)->get();
       
        //$work=DB::table('work')->where('id',$id)->get();
        $data['id']=$services[0]->id;
        $data['name']=$services[0]->title;
        $data['image']=$services[0]->image;
       
        $data['description']=$services[0]->description;

       /* $service_type=DB::table('service_type')->get();
        $data['service_type']=$service_type;*/
       
        return view('admin.updateserviceview',$data);

       
       }

       public function storeupdateservice(Request $request,$id){


      $request->validate([

           'name' =>'required',
             
           /*  'type'=>'required',*/
             'description'=>'required', 
           
           
        ]);
       
           $name=$request->input('name');
           $file=$request->file('image');
          /* $type=$request->input('type');*/
   
           $description=$request->input('description');

             $imagename='';

            if($file){
         
               $destinationPath='uploads';
               $imagename=time().'_'.$file->getClientOriginalName();
               $file->move($destinationPath,$imagename);

               DB::table('services')->where('id', $id)->update(['image'=>$imagename]);

              if($request->input('oldimage')!='') {

                    unlink(public_path("/uploads/".$request->input('oldimage')));  
                 }
              }
        

    
          DB::table('services')->where('id', $id)->update(['title'=>$name,'description'=>$description]);

          return redirect('admin/hospital_service')->with('error','your service has been inserted sucessfully' );
        
    }

        public function deleteservice($id){


        $services= DB::table('services')->where('id', $id)->get();

         if ($services[0]->image!='') {

            unlink(public_path("/uploads/".$services[0]->image));


          }

        DB::table('services')->where('id', $id)->delete();

   return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);


     
          } 
public function diagnostic_service(){

        $allbanner=DB::table('banner_image')->get();
        $data['allbanner']=$allbanner;
         

        $services=DB::table('service1')->get();
        $data['services']=$services;

      return view('admin.diagnostic_service',$data);
    }

    public function addnewservices1(){

      return view('admin.addnewservice1');
    }

     public function storeservice1(Request $request){


        $request->validate([

             'name' =>'required',
             'image'=>'required',
             'image1'=>'required',
             'description'=>'required', 

        ]);
       
         $name=$request->input('name');
         $file=$request->file('image');
          $file1=$request->file('image1');
         $description=$request->input('description');
        /* $type1=$request->input('type');

         $type=DB::table('service_type')->where('id', $type1)->get();
         $service_type=$type[0]->id;
*/
           $imagename='';
        
           if($file){
          
               $destinationPath='uploads';
               $imagename=time().'_'.$file->getClientOriginalName();
               $file->move($destinationPath,$imagename);
       
              }

                  $imagename1='';
        
           if($file1){
          
               $destinationPath='uploads';
               $imagename1=time().'_'.$file1->getClientOriginalName();
               $file1->move($destinationPath,$imagename1);
       
              }
    
    

         DB::table('service1')->insert(['title'=>$name,'image1'=>$imagename, 'image2'=>$imagename1,'description'=>$description]);

         
          return redirect('admin/diagnostic_service')->with('error','your service has been inserted sucessfully' );
         
    }

      public function updateservice1($id){

    

      $services= DB::table('service1')->where('id', $id)->get();
       
        //$work=DB::table('work')->where('id',$id)->get();
        $data['id']=$services[0]->id;
        $data['name']=$services[0]->title;
        $data['image']=$services[0]->image1;
        $data['image1']=$services[0]->image2;
       
        $data['description']=$services[0]->description;

       /* $service_type=DB::table('service_type')->get();
        $data['service_type']=$service_type;*/
       
        return view('admin.updateserviceview1',$data);

       
       }

       public function storeupdateservice1(Request $request,$id){


      $request->validate([

           'name' =>'required',
             
         
             'description'=>'required', 
           
           
        ]);
       
           $name=$request->input('name');
           $file=$request->file('image');
            $file1=$request->file('image1');
   
           $description=$request->input('description');

            $imagename='';

            if($file){
         
               $destinationPath='uploads';
               $imagename=time().'_'.$file->getClientOriginalName();
               $file->move($destinationPath,$imagename);

               DB::table('service1')->where('id', $id)->update(['image1'=>$imagename]);

              if($request->input('oldimage')!='') {

                    unlink(public_path("/uploads/".$request->input('oldimage')));  
                 }
              }

                $imagename1='';

            if($file1){
         
               $destinationPath='uploads';
               $imagename1=time().'_'.$file1->getClientOriginalName();
               $file1->move($destinationPath,$imagename1);

               DB::table('service1')->where('id', $id)->update(['image2'=>$imagename1]);

              if($request->input('oldimage1')!='') {

                    unlink(public_path("/uploads/".$request->input('oldimage1')));  
                 }
              }
        

    
          DB::table('service1')->where('id', $id)->update(['title'=>$name,'description'=>$description]);

          return redirect('admin/diagnostic_service')->with('error','your service has been inserted sucessfully' );
        
    }

        public function deleteservice1($id){


        $services= DB::table('service1')->where('id', $id)->get();

         if ($services[0]->image1!='') {

            unlink(public_path("/uploads/".$services[0]->image1));


          }

            if ($services[0]->image2!='') {

            unlink(public_path("/uploads/".$services[0]->image2));


          }


        DB::table('service1')->where('id', $id)->delete();

   return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);

 }

    



    public function admindetail(){


        $admindetail=DB::table('admindetail')->get();
        $data['admindetail']=$admindetail;


        $email=DB::table('email')->get();
        $data['email']=$email;


        $mobile_number=DB::table('mobile_number')->get();
        $data['mobile_number']=$mobile_number;

        return view('admin.admindetailview',$data);


    }

    public function updateadmindetail($id){

       $admindetail= DB::table('admindetail')->where('id', $id)->get();

         $data['id']=$admindetail[0]->id;
         $data['name']=$admindetail[0]->name;
         $data['image']=$admindetail[0]->image;
       /*  $data['email']=$admindetail[0]->email;
         $data['mobileno']=$admindetail[0]->mobileno;*/
         $data['address']=$admindetail[0]->address;
         $data['fb_link']=$admindetail[0]->fb_link;
         $data['insta_link']=$admindetail[0]->insta_link;
         $data['twitter_link']=$admindetail[0]->twitter_link;


        $email=DB::table('email')->get();
        $data['email1']=$email;


        $mobile_number=DB::table('mobile_number')->get();
        $data['mobile_number1']=$mobile_number;
   

       return view('admin.updateadminview',$data);

    }

       public function deletemobileno($id){

    $mobileno=DB::table('mobile_number')->where('id', $id)->get();

      $admin_id=$mobileno[0]->admin_id;

      DB::table('mobile_number')->where('id',$id)->delete();

        return redirect('admin/updateadmindetail/'.$admin_id);

      }  

    public function deleteemail($id){

    $email=DB::table('email')->where('id', $id)->get();

      $admin_id=$email[0]->admin_id;

      DB::table('email')->where('id',$id)->delete();

        return redirect('admin/updateadmindetail/'.$admin_id);

      }

      public function storeadmindetail(Request $request, $id){

           $request->validate([

             'name' => 'required',
            
             'address' => 'required',
            
               
           ]);
       
           $name=$request->input('name');
           $file=$request->file('image');

           $email=$request->input('email');
           $emails=$request->input('emails');


           $mobileno=$request->input('mobileno');
           $mobilenos=$request->input('mobilenos');


              $address=$request->input('address');
              $fb_link=$request->input('fb_link');
              $insta_link=$request->input('insta_link');
              $twitter_link=$request->input('twitter_link');
             
           $imagename='';

            if($file){
         
               $destinationPath='uploads';
               $imagename=time().'_'.$file->getClientOriginalName();
               $file->move($destinationPath,$imagename);

               DB::table('admindetail')->where('id', $id)->update(['image'=>$imagename]);

              if($request->input('oldimage')!='') {

                    unlink(public_path("/uploads/".$request->input('oldimage')));  
                 }
              }

            DB::table('admindetail')->where('id', $id)->update(['name'=>$name,'address'=>$address,'fb_link'=>$fb_link,'insta_link'=>$insta_link,'twitter_link'=>$twitter_link]);

            if($mobileno!=''){

               DB::table('mobile_number')->insert(['mobileno'=>$mobileno,'admin_id'=>$id]);

              }

        

            if($mobilenos!=null){
            
              for($i=0; $i<count($mobilenos); $i++){

                    $mobilenos_info=$mobilenos[$i];

                   DB::table('mobile_number')->insert(['mobileno'=>$mobilenos_info,'admin_id'=>$id]);
  
                }
            }

            if($email!=''){

               DB::table('email')->insert(['email'=>$email,'admin_id'=>$id]);

              }


            if($emails!=null){
            
              for($i=0; $i<count($emails); $i++){

                    $email_info=$emails[$i];

                   DB::table('email')->insert(['email'=>$email_info,'admin_id'=>$id]);
  
                }
            }



           return redirect('admin/admindetail')->with('error',' update Admin detail data succcesfully!!!!');


      }   

         

     public function contactusbanner(){

        $allbanner=DB::table('banner_image')->get();
        $data['allbanner']=$allbanner;
           
        return view('admin.contactusbanner',$data);
     }

      public function footeraboutlist(){

       $footer_about=DB::table('footer_about')->get();
          $data['footer_about']=$footer_about;
           
        return view('admin.footeraboutlist',$data);
     }

        public function footer_about($id)
          {
            $footerabout=DB::table('footer_about')->where('id',$id)->get();

            $data['id']=$footerabout[0]->id;
            $data['description']=$footerabout[0]->description;

            return view('admin.footer_about',$data);
          }

          public function store_footer_about(Request $request,$id)
          {
            $request->validate([
              'description'=>'required',
            ]);

            $description=$request->input('description');

            DB::table('footer_about')->where('id',$id)->update(['description'=>$description]);

            return redirect('admin/footeraboutlist')->with('error','update footer about succcesfully!!!!');
          }



     
   


    

    

   
    




}
