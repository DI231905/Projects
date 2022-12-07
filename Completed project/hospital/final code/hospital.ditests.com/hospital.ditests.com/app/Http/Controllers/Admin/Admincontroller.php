<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\Models\User;
use Carbon\carbon;
use DB;
use Hash;
use \Crypt;
use Illuminate\support\facades\Auth;
use Illuminate\support\facades\Redirect;
use Illuminate\support\facades\validator;

class Admincontroller extends Controller{


   public function __construct(){

                $this->middleware('auth:admin');
        }

   public function home(){
 
         $admin=Auth::guard('admin')->user();
         $data['admin']=$admin;
         $data['site_url']= env('APP_URl');
         $data['metatitle']='home page';

         $enquires=DB::table('inquiry')->get();
         $data['enquires']=$enquires;
    
    
         return view('admin.home',$data);
      
     } 

        public function deleteenquiry($id){
     
         DB::table('inquiry')->where('id', $id)->delete();


        return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);
       }

       public function contactlist(){

            $contact_us=DB::table('contact_us')->get();
          $data['contact_us']=$contact_us;
          return view('admin.contactlist',$data);
        }


         public function deletecontact($id){
  
       DB::table('contact_us')->where('id', $id)->delete();

     return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);

       }


     /*----------- change password ---------------*/

      public function changepassword(){
       
         return view('admin.changepassword');
     }

      public function updatepassword(Request $request,$id){

          $request->validate([
              'oldpassword' => 'required|string',
              'newpassword' => 'required|string|min:8',
           
              ]);

             $oldpassword=$request->input('oldpassword');
             $newpassword=$request->input('newpassword');

             $password=DB::table('admins')->where('id', $id)->get();

             $password1=$password[0]->password;

           if(Hash::check($oldpassword,$password1)){

               DB::table('admins')->where('id', $id)->update(['password'=>Hash::make($newpassword)]);

               return redirect('admin/home')->with('error','your password has been update sucessfully' );

               }else{

                return Redirect::back()->with('error','Your Old password is not correct!!!!');

            }
         }

  



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


         

        
        

     


        

     }
   

  




