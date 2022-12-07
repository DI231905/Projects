<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\inquiry;
use App\Models\contact_us;
use Illuminate\Support\Facades\Mail;



class UserController extends Controller
{
     public function index(){

     	  $banner=DB::table('banner')->get();
          $data['banner']=$banner;


          $maintitle=DB::table('more_maintitle')->get();
          $data['maintitle']=$maintitle;

           $features=DB::table('features')->get();
          $data['features']=$features;

         $history=DB::table('homeaboutus')->get(); 

        $data['title']=$history[0]->title;
        $data['image']=$history[0]->image;
        $data['name']=$history[0]->name;
       
        $data['sign_image']=$history[0]->sign_image;  
        $data['Designation']=$history[0]->Designation;
        $data['description']=$history[0]->description;

         $imagetitle=$history[0]->imagetitle;

       $data['int'] = (int) filter_var($imagetitle, FILTER_SANITIZE_NUMBER_INT);

     // $data['string'] = $imagetitle.replaceAll("[0-9]","");
           
         $data['words'] = preg_replace('/[0-9]+/', '', $imagetitle);


          $services=DB::table('service1')->get();
          $data['services']=$services;

          $workstep=DB::table('workstep')->orderBy('step_no', 'ASC')->get();
          $data['workstep']=$workstep;

          $record=DB::table('record')->get();
           $data['record']=$record;

            $testimonial=DB::table('testimonial')->get();
           $data['testimonial']=$testimonial;

            $admindetail=DB::table('admindetail')->get();
           $data['address']=$admindetail[0]->address;
           $data['insta_link']=$admindetail[0]->insta_link;
           $data['fb_link']=$admindetail[0]->fb_link;
           $data['twitter_link']=$admindetail[0]->twitter_link;

            $footer_about=DB::table('footer_about')->get();
          $data['footer_about']=$footer_about[0]->description;
           
          


          $email=DB::table('email')->get();
           $data['email']=$email;
           $data['email1']=$email[0]->email;

          $mobile_number=DB::table('mobile_number')->get();
          $data['mobile_number']=$mobile_number; 

          $data['mobileno1']=$mobile_number[0]->mobileno; 


          return view('welcome',$data);

     }

      public function about(){

          $allbanner=DB::table('banner_image')->get();
          $data['allbanner']=$allbanner;

           $about_description=DB::table('about_description')->get();
           $data['about_description']=$about_description;

           $about_images=DB::table('about_images')->get();
           $data['about_images']=$about_images;

            $mission_vision=DB::table('mission-vision')->get();
            $data['mission_vision']=$mission_vision;

             $about_work=DB::table('about_work')->get();
             $data['about_work']=$about_work;

            $about_workimage=DB::table('about_workimage')->get();
            $data['about_workimage']=$about_workimage[0]->image;

           $work_benifits=DB::table('work_benifits')->get();
           $data['work_benifits']=$work_benifits;

             $whychooseus=DB::table('whychooseus')->get();
           $data['whychooseus']=$whychooseus;

            $benifits=DB::table('benifits')->get();
           $data['benifits']=$benifits;

           $achivement=DB::table('achivement')->get();
           $data['achivement']=$achivement;  

              $admindetail=DB::table('admindetail')->get();
           $data['address']=$admindetail[0]->address;
           $data['insta_link']=$admindetail[0]->insta_link;
           $data['fb_link']=$admindetail[0]->fb_link;
           $data['twitter_link']=$admindetail[0]->twitter_link;
          

            $footer_about=DB::table('footer_about')->get();
          $data['footer_about']=$footer_about[0]->description;
           

          $email=DB::table('email')->get();
           $data['email']=$email;
           $data['email1']=$email[0]->email;

          $mobile_number=DB::table('mobile_number')->get();
          $data['mobile_number']=$mobile_number; 

          $data['mobileno1']=$mobile_number[0]->mobileno; 
  
  

          return view('about',$data);
    }


        public function doctors(){

          $allbanner=DB::table('banner_image')->get();
          $data['allbanner']=$allbanner;

           $teamdescription=DB::table('teamdescription')->get();
           $data['title']=$teamdescription[0]->title; 
           $data['main_title']=$teamdescription[0]->main_title; 
           $data['description']=$teamdescription[0]->description; 

             $team=DB::table('team')->get();
           $data['team']=$team;  

            $admindetail=DB::table('admindetail')->get();
           $data['address']=$admindetail[0]->address;
           $data['insta_link']=$admindetail[0]->insta_link;
           $data['fb_link']=$admindetail[0]->fb_link;
           $data['twitter_link']=$admindetail[0]->twitter_link;

              $footer_about=DB::table('footer_about')->get();
          $data['footer_about']=$footer_about[0]->description;
           
          


          $email=DB::table('email')->get();
           $data['email']=$email;
           $data['email1']=$email[0]->email;

          $mobile_number=DB::table('mobile_number')->get();
          $data['mobile_number']=$mobile_number; 

          $data['mobileno1']=$mobile_number[0]->mobileno; 

          return view('doctors',$data);

           }

           public function hospital_service(){

             $allbanner=DB::table('banner_image')->get();
             $data['allbanner']=$allbanner;

              $services=DB::table('services')->get();
              $data['services']=$services;

               $admindetail=DB::table('admindetail')->get();
           $data['address']=$admindetail[0]->address;
           $data['insta_link']=$admindetail[0]->insta_link;
           $data['fb_link']=$admindetail[0]->fb_link;
           $data['twitter_link']=$admindetail[0]->twitter_link;

              $footer_about=DB::table('footer_about')->get();
          $data['footer_about']=$footer_about[0]->description;
           
          


          $email=DB::table('email')->get();
           $data['email']=$email;
           $data['email1']=$email[0]->email;

          $mobile_number=DB::table('mobile_number')->get();
          $data['mobile_number']=$mobile_number; 

          $data['mobileno1']=$mobile_number[0]->mobileno; 
           
              return view('hospitalservice',$data);

           }


           public function diagnostic_services(){


           	 $allbanner=DB::table('banner_image')->get();
             $data['allbanner']=$allbanner;

              $services=DB::table('service1')->get();
             $data['services']=$services;

              $admindetail=DB::table('admindetail')->get();
           $data['address']=$admindetail[0]->address;
           $data['insta_link']=$admindetail[0]->insta_link;
           $data['fb_link']=$admindetail[0]->fb_link;
           $data['twitter_link']=$admindetail[0]->twitter_link;

              $footer_about=DB::table('footer_about')->get();
          $data['footer_about']=$footer_about[0]->description;
           
          


          $email=DB::table('email')->get();
           $data['email']=$email;
           $data['email1']=$email[0]->email;

          $mobile_number=DB::table('mobile_number')->get();
          $data['mobile_number']=$mobile_number; 

          $data['mobileno1']=$mobile_number[0]->mobileno; 

              return view('diagnosticservices',$data);

           }


           public function gallary(){


           	 $allbanner=DB::table('banner_image')->get();
             $data['allbanner']=$allbanner;

             $gallary=DB::table('gallary')->get();
             $data['gallary']=$gallary; 

              $admindetail=DB::table('admindetail')->get();
           $data['address']=$admindetail[0]->address;
           $data['insta_link']=$admindetail[0]->insta_link;
           $data['fb_link']=$admindetail[0]->fb_link;
           $data['twitter_link']=$admindetail[0]->twitter_link;

              $footer_about=DB::table('footer_about')->get();
          $data['footer_about']=$footer_about[0]->description;
           
          


          $email=DB::table('email')->get();
           $data['email']=$email;
           $data['email1']=$email[0]->email;

          $mobile_number=DB::table('mobile_number')->get();
          $data['mobile_number']=$mobile_number; 

          $data['mobileno1']=$mobile_number[0]->mobileno; 

              return view('gallary',$data);

           }

           public function contact(){


           	 $allbanner=DB::table('banner_image')->get();
             $data['allbanner']=$allbanner;

            
           $admindetail=DB::table('admindetail')->get();
           $data['address']=$admindetail[0]->address;
           $data['insta_link']=$admindetail[0]->insta_link;
           $data['fb_link']=$admindetail[0]->fb_link;
           $data['twitter_link']=$admindetail[0]->twitter_link;

              $footer_about=DB::table('footer_about')->get();
          $data['footer_about']=$footer_about[0]->description;
           
          


          $email=DB::table('email')->get();
           $data['email']=$email;
           $data['email1']=$email[0]->email;

          $mobile_number=DB::table('mobile_number')->get();
          $data['mobile_number']=$mobile_number; 

          $data['mobileno1']=$mobile_number[0]->mobileno; 

              return view('contact',$data);

           }


   public function getinquiry(Request $request){

       $validator = \Validator::make($request->all(),[
           
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required',
        'mobileno' => 'required',
      
          ]);

        $name=$request->name;
        $email1=$request->email;
        $mobileno=$request->mobileno;


    if($validator->fails())

     {
       
        return json_encode(array(
            "statusCode"=>202
         ));
     }

     $inquiry=inquiry::create($request->all());

     if($inquiry!=''){



           $meta['FROM_EMAIL']="ditest787@gmail.com";
           $meta['email']="jinalpatel23697@gmail.com";
             $meta['subject']="Inquiry Mail";  
             $meta['email1']= $email1;
             $meta['mobileno']=$mobileno;
             $meta['name']= $name;
   
            Mail::send('email.inquiry', $meta, function($m) use($meta){
        
               $m->from($meta["FROM_EMAIL"],'Inquiry Mail');
               $m->to($meta["email"]);
               $m->subject($meta["subject"]); 
               });



     return response()->json([
            'success' => 200
           ]);
  
        }else{

       return response()->json([
            'success' => 202
           ]);

        }

    }

     public function getcontactus(Request $request){

        $request->validate([
           
        'name' => 'required',  
        'email' => 'required',
        'mobileno' => 'required',
        'subject' => 'required', 
        'description' => 'required', 
      
          ]);

        $name=$request->input('name');
        $email=$request->input('email');
        $mobileno=$request->input('mobileno');
        $subject=$request->input('subject');
        $description=$request->input('description');




     DB::table('contact_us')->insert(['name'=>$name,'email'=>$email,'mobileno'=>$mobileno,'subject'=>$subject,'description'=>$description]);


      $email1=$request->input('email');

             $meta['FROM_EMAIL']="apptest2303@gmail.com";
             $meta['email']="akshay.digitalinovation@gmail.com";
             $meta['subject']="Inquiry Mail";  
             $meta['email1']= $email1;
             $meta['mobileno']=$mobileno;
             $meta['name']= $name;
   
            Mail::send('email.inquiry', $meta, function($m) use($meta){
        
               $m->from($meta["FROM_EMAIL"],'Inquiry Mail');
               $m->to($meta["email"]);
               $m->subject($meta["subject"]); 
               });


/*
          Mail::send('email.inquiry', [
               $message['name'] => $request->input('name'),
                $message['email'] => $request->input('email'),
                 $message['subject'] => $request->input('subject') ],
                function ($message) {
                        $message->from('apptest2303@gmail.com');
                        $message->to('jinalpatel23697@gmail.com', 'jinal')
                        ->subject($message['subject']);
        });*/

      return redirect('/contact')->with('error','your message send successfully!!' );

    }


 

  

           

    

}
