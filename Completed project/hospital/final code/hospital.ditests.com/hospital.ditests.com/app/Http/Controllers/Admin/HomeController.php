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

class HomeController extends Controller
{
   
  

     /*-------    banner list view -----------  */

        public function viewBannerlist(){

           $banner=DB::table('banner')->get();
           $data['banner']=$banner;

           $more_maintitle=DB::table('more_maintitle')->get();
           $data['more_maintitle']=$more_maintitle;

              return view('admin.homebannerlistView',$data);
 
         }

        public function addhomebanner(){

           return view('admin.addhomeBanner');
 
         }

        public function storehomebanner(Request $request){

            $request->validate([

              'title' => 'required',
              'image' => 'required',
               
            ]);
       
           $title=$request->input('title');
           $file=$request->file('image');
           $maintitle=$request->input('short_description');
           $maintitles=$request->input('short_descriptions') ;
       
           $imagename='';
        
           if ($file){
          
               $destinationPath='uploads';
               $imagename=time().'_'.$file->getClientOriginalName();
               $file->move($destinationPath,$imagename);
       
              }

           DB::table('banner')->insert(['title'=>$title ,'image'=>$imagename]);

           $last_id = DB::table('banner')->max('id'); 

           $maintitle=$request->input('short_description');

           if($maintitle!=""){

              DB::table('more_maintitle')->insert(['more_maintitle'=>$maintitle,'banner_id'=>$last_id]);

             }

           $maintitles=$request->input('short_descriptions');

            if($maintitles!=null){
            
              for($i=0; $i<count($maintitles); $i++){

                   $maintitles_info=$maintitles[$i];

                   if($maintitles_info!=""){

                   DB::table('more_maintitle')->insert(['more_maintitle'=>$maintitles_info,'banner_id'=>$last_id]);
                }
  
              }
           }
           return redirect('admin/viewBannerlist')->with('error',' update banner data succcesfully!!!!');

         }

       public function updatebanner($id){

         $banner= DB::table('banner')->where('id', $id)->get();

         $data['id']=$banner[0]->id;
         $data['title']=$banner[0]->title;
         $data['image']=$banner[0]->image;

         $more_maintitle=DB::table('more_maintitle')->where('banner_id', $id)->get();
         $data['more_maintitle']=$more_maintitle;
   
         return view('admin.updatehomebanner',$data);

        }

       public function deletemaintitle($id){

         $more_maintitle=DB::table('more_maintitle')->where('id', $id)->get();
         $banner_id=$more_maintitle[0]->banner_id;

         DB::table('more_maintitle')->where('id',$id)->delete();

         return redirect('admin/updatebanner/'.$banner_id);

        }    

       public function storeupdatebanner(Request $request ,$id){

           $request->validate([

             'title' => 'required',
               
           ]);
       
           $title=$request->input('title');
           $file=$request->file('image');

           $maintitle=$request->input('short_description');
           $maintitles=$request->input('short_descriptions') ;
  
           $imagename='';

            if($file){
         
               $destinationPath='uploads';
               $imagename=time().'_'.$file->getClientOriginalName();
               $file->move($destinationPath,$imagename);

               DB::table('banner')->where('id', $id)->update(['image'=>$imagename]);

              if($request->input('oldimage')!='') {

                    unlink(public_path("/uploads/".$request->input('oldimage')));  
                 }
              }

            DB::table('banner')->where('id', $id)->update(['title'=>$title ]);

           if($maintitle!=''){
   
              DB::table('more_maintitle')->insert(['more_maintitle'=>$maintitle,'banner_id'=>$id]);
             }


            if($maintitles!=null){
            
              for($i=0; $i<count($maintitles); $i++){

                    $maintitles_info=$maintitles[$i];

                   DB::table('more_maintitle')->insert(['more_maintitle'=>$maintitles_info,'banner_id'=>$id]);
  
                }
            }


           return redirect('admin/viewBannerlist')->with('error',' update banner data succcesfully!!!!');
 
          }

       public function deletehomebanner($id){

            $banner= DB::table('banner')->where('id', $id)->get();

           if($banner[0]->image!='') {

               unlink(public_path("/uploads/".$banner[0]->image));

               }

           DB::table('banner')->where('id', $id)->delete();

           DB::table('more_maintitle')->where('banner_id', $id)->delete();

           return response()->json([
            'success' => 'Record has been deleted successfully!'
           ]);

       }



/*----------------------  Featureslist ----------------------*/


       public function Featureslist(){

          $features=DB::table('features')->get();
          $data['features']=$features;

        return view('admin.featureslist',$data);
 
         }


            public function addfeatures(){
  
        return view('admin.addhomeservice');

       }

        public function storefeatures(Request $request){


        $request->validate([

             'name' =>'required',
             'image'=>'required',
             'icon'=>'required',
             'description'=>'required', 

        ]);
       
         $name=$request->input('name');
         $file=$request->file('image');
         $description=$request->input('description');

          $file1=$request->file('icon');




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
    
    

         DB::table('features')->insert(['name'=>$name,'icon'=>$imagename,'icon1'=>$imagename1, 'description'=>$description]);
       
          return redirect('admin/Featureslist')->with('error','your features has been inserted sucessfully' );
          
    }


     public function deletefeatures($id){


     	   $features=DB::table('features')->where('id', $id)->get();

           if($features[0]->icon!='') {

               unlink(public_path("/uploads/".$features[0]->icon));

               }

                 if($features[0]->icon1!='') {

               unlink(public_path("/uploads/".$features[0]->icon1));

               }



      
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
        $data['icon1']=$features[0]->icon1;
     
     
        $data['description']=$features[0]->description;
       
        return view('admin.updatehomeservice',$data);

       
       }

  public function storeupdatefeatures(Request $request,$id){


      $request->validate([

            'name' => 'required', 
            'description' => 'required',
           
           
        ]);
       
           $name=$request->input('name');
           $file=$request->file('image');
           $file1=$request->file('icon1');
           $description=$request->input('description');

             $imagename='';

            if($file){
         
               $destinationPath='uploads';
               $imagename=time().'_'.$file->getClientOriginalName();
               $file->move($destinationPath,$imagename);

               DB::table('features')->where('id', $id)->update(['icon'=>$imagename]);

              if($request->input('oldimage')!='') {

                    unlink(public_path("/uploads/".$request->input('oldimage')));  
                 }
              }

              $imagename1='';

            if($file1){
         
               $destinationPath='uploads';
               $imagename1=time().'_'.$file1->getClientOriginalName();
               $file1->move($destinationPath,$imagename1);

               DB::table('features')->where('id', $id)->update(['icon1'=>$imagename1]);

              if($request->input('oldimage1')!='') {

                    unlink(public_path("/uploads/".$request->input('oldimage1')));  
                 }
              }
        
        

    
          DB::table('features')->where('id', $id)->update(['name'=>$name,'description'=>$description]);

           return redirect('admin/Featureslist')->with('error','your features has been updated sucessfully' );

    }



    /*----------------------Home About us list------------------*/


      public function Homeaboutuslist(){

          $homeaboutus=DB::table('homeaboutus')->get();
          $data['homeaboutus']=$homeaboutus;


        return view('admin.homeaboutuslist',$data);
 
         }

         


        public function updatehomeaboutus($id){

        $history= DB::table('homeaboutus')->where('id', $id)->get();

        $data['id']=$history[0]->id;
        $data['title']=$history[0]->title;
        $data['image']=$history[0]->image;
        $data['name']=$history[0]->name;
        $data['imagetitle']=$history[0]->imagetitle;
        $data['sign_image']=$history[0]->sign_image;  
        $data['Designation']=$history[0]->Designation;
        $data['description']=$history[0]->description;
   
  
        return view('admin.updatehomeaboutus',$data);
        }
  
      public function storehomeaboutus(Request $request ,$id){

         $request->validate([

            'description' => 'required',
            'title' => 'required',
            'name' => 'required',
            'imagetitle' => 'required',
               
           ]);
       
           $title=$request->input('title');
           $imagetitle=$request->input('imagetitle');
           $description =$request->input('description');
           $name =$request->input('name');
           $Designation =$request->input('Designation');
           $file=$request->file('image');
        
           $imagename='';

            if($file){
         
           $destinationPath='uploads';
           $imagename=time().'_'.$file->getClientOriginalName();
    
           $file->move($destinationPath,$imagename);

           DB::table('homeaboutus')->where('id', $id)->update(['image'=>$imagename]);

            if ($request->input('oldimage')!='') {

                   unlink(public_path("/uploads/".$request->input('oldimage')));  

             }

           }

              echo $s_image =$request->file('sign_image');


             $sign_image='';

            if($s_image){
         
           $destinationPath='uploads';
           $sign_image=time().'_'.$s_image->getClientOriginalName();
    
           $s_image->move($destinationPath,$sign_image);

           DB::table('homeaboutus')->where('id', $id)->update(['sign_image'=>$sign_image]);

            if ($request->input('oldimage1')!='') {

                   unlink(public_path("/uploads/".$request->input('oldimage1')));  

             }

           }

          DB::table('homeaboutus')->where('id', $id)->update(['title'=>$title ,'name'=>$name ,'description'=>$description,'Designation'=>$Designation,'imagetitle'=>$imagetitle ]);

           return redirect('admin/Homeaboutuslist')->with('error',' update about Us data succcesfully!!!!');
 
          }

         /*-------------- How to Work ----------------*/


        public function wroksteplist(){

          $workstep=DB::table('workstep')->orderBy('step_no', 'ASC')->get();
          $data['workstep']=$workstep;

           return view('admin.worksteplistview',$data);
 
         }

           public function addwrokstep(){

           return view('admin.addworkstepview');
 
         }

           public function storewrokstep(Request $request){


          $request->validate([

             'title' =>'required',
             'step_number'=>'required',
             'description'=>'required', 

           ]);
       
           $title=$request->input('title');
           $file=$request->file('image');
           $step_no=$request->input('step_number');
           $description=$request->input('description');

           $step_number=DB::table('workstep')->where('step_no',$step_no)->count();

           if($step_number!=0){

              return redirect('admin/addwrokstep')->with('error','your work step number has already inserted ' );

           }

           $imagename='';
        
           if($file){
          
               $destinationPath='uploads';
               $imagename=time().'_'.$file->getClientOriginalName();
               $file->move($destinationPath,$imagename);
       
              }
    

          DB::table('workstep')->insert(['title'=>$title,'image'=>$imagename,'step_no'=>$step_no,'description'=>$description]);
       
          return redirect('admin/wroksteplist')->with('error','your work step has been inserted sucessfully' );
          
    }

     

       public function updateworkstep($id){

          $workstep= DB::table('workstep')->where('id', $id)->get();
  
            $data['id']=$workstep[0]->id;
            $data['title']=$workstep[0]->title;
            $data['image']=$workstep[0]->image;
            $data['step_no']=$workstep[0]->step_no;
            $data['description']=$workstep[0]->description;
   
          return view('admin.updateworkstepview',$data);
        }

           public function storeupdatewrokstep(Request $request, $id){


          $request->validate([

             'title' =>'required',
             'step_number'=>'required',
             'description'=>'required', 

           ]);

           $workstep= DB::table('workstep')->where('id', $id)->get();
       
           $title=$request->input('title');
           $file=$request->file('image');
           $step_no=$request->input('step_number');
           $description=$request->input('description');

           $step_no1=$workstep[0]->step_no;

           $step_number=DB::table('workstep')->where('step_no',$step_no)->count();

           if($step_no==$step_no1){

           	  $imagename='';

            if($file){
         
           $destinationPath='uploads';
           $imagename=time().'_'.$file->getClientOriginalName();
    
           $file->move($destinationPath,$imagename);

           DB::table('workstep')->where('id', $id)->update(['image'=>$imagename]);

            if ($request->input('oldimage')!='') {

                   unlink(public_path("/uploads/".$request->input('oldimage')));  

              }

           }

          DB::table('workstep')->where('id',$id)->update(['title'=>$title,'step_no'=>$step_no,'description'=>$description]);
       
          return redirect('admin/wroksteplist')->with('error','your work step has been updated sucessfully' );



           }
           elseif($step_number!=0){

              return redirect('admin/updateworkstep/'.$id)->with('error','your work step number has already inserted ' );

            }

              $imagename='';

            if($file){
         
           $destinationPath='uploads';
           $imagename=time().'_'.$file->getClientOriginalName();
    
           $file->move($destinationPath,$imagename);

           DB::table('workstep')->where('id', $id)->update(['image'=>$imagename]);

            if ($request->input('oldimage')!='') {

                   unlink(public_path("/uploads/".$request->input('oldimage')));  

              }

           }

          DB::table('workstep')->where('id',$id)->update(['title'=>$title,'step_no'=>$step_no,'description'=>$description]);
       
          return redirect('admin/wroksteplist')->with('error','your work step has been updated sucessfully' );

        
          
    }


       public function deleteworkstep($id){


     	   $workstep=DB::table('workstep')->where('id', $id)->get();

           if($workstep[0]->image!='') {

               unlink(public_path("/uploads/".$workstep[0]->image));

               }
      
           DB::table('workstep')->where('id', $id)->delete();

           return response()->json([

                'success' => 'Record has been deleted successfully!'

            ]);

       }

       public function recordlist(){

           $record=DB::table('record')->get();
           $data['record']=$record;

           return view('admin.recordlistview',$data);
 
        }


         public function addnewrecord(){

           return view('admin.addnewrecord');
 
         }

           public function storerecord(Request $request){


           	 $request->validate([

             'title' =>'required',      
             'total_record'=>'required', 

        ]);
       
         $title=$request->input('title');
         $total_record=$request->input('total_record');

         DB::table('record')->insert(['title'=>$title,'title_record'=>$total_record]);
       
        return redirect('admin/recordlist')->with('error','your record has been inserted sucessfully' );

      
         }


          public function updaterecord($id){

           $record= DB::table('record')->where('id', $id)->get();
  
            $data['id']=$record[0]->id;
            $data['title']=$record[0]->title;
            $data['title_record']=$record[0]->title_record;
          
          return view('admin.updaterecord',$data);
        }

       

         public function storeupdatedrecord(Request $request,$id){

           	 $request->validate([

             'title' =>'required',      
             'total_record'=>'required', 

             ]);
       
             $title=$request->input('title');
             $total_record=$request->input('total_record');

             DB::table('record')->where('id',$id)->update(['title'=>$title,'title_record'=>$total_record]);
       
            return redirect('admin/recordlist')->with('error','your record has been updated sucessfully!!' );

         }

         

    
     public function deleterecord($id){


        DB::table('record')->where('id', $id)->delete();

           return response()->json([

                'success' => 'Record has been deleted successfully!'

            ]);

       }


       /*------------------ Testimonial -------------------*/
    

        public function testimoniallist(){

           $testimonial=DB::table('testimonial')->get();
           $data['testimonial']=$testimonial;

           return view('admin.testimoniallist',$data);
 
          }

            public function addtestimonial(){
  
       return view('admin.addtestimonial');
          }
 
      public function storetestimonial(Request $request){
         
          $request->validate([

            'name' => 'required|string',
           
            'occupation' => 'required',
            'description' => 'required',
         ]);
       


           $name=$request->input('name');
           $occupation = $request->input('occupation');
           $description=$request->input('description');
           $file=$request->file('image');

             $imagename="";
   
         if($file){
          
           $destinationPath='uploads';
           $imagename=time().'_'.$file->getClientOriginalName();
           $file->move($destinationPath,$imagename);
      
           }
         
         DB::table('testimonial')->insert(['name'=>$name ,'occupation'=>$occupation,'image'=>$imagename,'description'=>$description]);
    
           return redirect('admin/testimoniallist')->with('error',' testimonial insterted succcesfully!!!!');
            }
  
      public function deletetestimonial($id){

          $testimonial=DB::table('testimonial')->where('id', $id)->get();


          if ($testimonial[0]->image!=''){
          	
            unlink(public_path("/uploads/".$testimonial[0]->image));
          }

           DB::table('testimonial')->where('id', $id)->delete();

       
         return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);

       }
  
      public function updatetestimonial($id){

        $testimonial= DB::table('testimonial')->where('id', $id)->get();

        $data['id']=$testimonial[0]->id;
        $data['name']=$testimonial[0]->name;
        $data['image']=$testimonial[0]->image;
        $data['occupation']=$testimonial[0]->occupation;
        $data['description']=$testimonial[0]->description;
    
        return view('admin.updatetestimonial',$data);
        }
  
      public function storeupdatetestimonial(Request $request ,$id){

         $request->validate([

            'name' => 'required|string',
            'occupation' => 'required',
            'description' => 'required',
           
           ]);
       
           $name=$request->input('name');
           $occupation = $request->input('occupation');
           $description=$request->input('description');
           $file=$request->file('image');
        
           $imagename=' ';

            if ($file){
         
           $destinationPath='uploads';
           $imagename=time().'_'.$file->getClientOriginalName();
    
           $file->move($destinationPath,$imagename);

           DB::table('testimonial')->where('id', $id)->update(['image'=>$imagename]);

            if ($request->input('oldimage')!='') {

               unlink(public_path("/uploads/".$request->input('oldimage')));

             }

           }

          DB::table('testimonial')->where('id', $id)->update(['name'=>$name ,'occupation'=>$occupation,'description'=>$description]);

           return redirect('admin/testimoniallist')->with('error',' update Testimonial data succcesfully!!!!');
 
          }

      




}
