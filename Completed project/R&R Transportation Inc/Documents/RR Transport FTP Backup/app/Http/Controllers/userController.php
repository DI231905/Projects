<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\Models\contact_us;
use App\Models\enquiries;
use App\Models\inquiry;
use App\Models\get_queto;
use App\Models\get_qutoe1;
use Illuminate\support\MessageBag;
use Illuminate\Support\Facades\Mail;
use Illuminate\support\facades\Input;




class userController extends Controller
{
     
  public function index(){

       $admindetail=DB::table('admindetail')->take(1)->get();

        $data['id']=$admindetail[0]->id;
        $data['name']=$admindetail[0]->name;
        $data['email']=$admindetail[0]->email;
        $data['mobileno']=$admindetail[0]->mobileno;
        $data['address']=$admindetail[0]->address;
        $data['website']=$admindetail[0]->website;
        $data['fblink']=$admindetail[0]->fblink;
        $data['instalink']=$admindetail[0]->instalink;
        $data['twitterlink']=$admindetail[0]->twitterlink;

        $services=DB::table('service')->get();
         $data['services']=$services;

           $testimonial=DB::table('testimonial')->get();
          $data['testimonial']=$testimonial;

           $features=DB::table('features')->get();
          $data['features']=$features;

            $footer_about=DB::table('footer_about')->get();
          $data['footer_about']=$footer_about;
          

      
          //$banner=DB::table('banner')->orderBy('id', 'DESC')->get();

          $banner=DB::table('banner')->get();
  
   /*echo   '<pre>'; print_r($banner) ;

      exit;*/

    //   $reverse =array_reverse((array)$banner, true);

          $data['banner']=$banner;

      //    echo   '<pre>'; print_r(  $data['banner']) ;

      // exit;


          $maintitle=DB::table('more_maintitle')->get();
           $data['maintitle']=$maintitle;


          $history=DB::table('history')->get();
          $data['history']=$history;

          $testimonial=DB::table('testimonial')->get();
         $data['testimonial']=$testimonial;

          
     /*   

          $tour_type=DB::table('tour_type')->get();
          $data['tour_type']=$tour_type;


         $f_package=DB::table('package')->where('tour_type',"Family Tours")->get();
         $data['f_package']=$f_package;

         $h_package=DB::table('package')->where('tour_type',"Honeymoon Tours")->get();
         $data['h_package']=$h_package;

          $s_package=DB::table('package')->where('tour_type',"Summer Tours")->get();
          $data['s_package']=$s_package;

          $w_package=DB::table('package')->where('tour_type',"Winter Tours")->get();
          $data['w_package']=$w_package;

          $a_package=DB::table('package')->where('tour_type',"Adventure Tours")->get();
          $data['a_package']=$a_package;

        */

          return view('welcome',$data);
        }

    public function about(){


       $admindetail=DB::table('admindetail')->take(1)->get();

        $data['id']=$admindetail[0]->id;
        $data['name']=$admindetail[0]->name;
        $data['email']=$admindetail[0]->email;
        $data['mobileno']=$admindetail[0]->mobileno;
        $data['address']=$admindetail[0]->address;
        $data['website']=$admindetail[0]->website;
         $data['fblink']=$admindetail[0]->fblink;
          $data['instalink']=$admindetail[0]->instalink;
           $data['twitterlink']=$admindetail[0]->twitterlink;

             $footer_about=DB::table('footer_about')->get();
          $data['footer_about']=$footer_about;
          


         $faq=DB::table('faq')->get();
           $data['faq']=$faq;

           $mission=DB::table('mission')->get();
          $data['mission']=$mission;

          $whychooseus=DB::table('why_choose_us')->get();
          $data['whychooseus']=$whychooseus;

          $allbanner=DB::table('banner_image')->get();
          $data['allbanner']=$allbanner;


       return view('about',$data);
    }

   
    public function Service(){

       /* $service=DB::table('service')->get();
         $data['service']=$service;
*/
        $admindetail=DB::table('admindetail')->take(1)->get();

        $data['id']=$admindetail[0]->id;
        $data['name']=$admindetail[0]->name;
        $data['email']=$admindetail[0]->email;
        $data['mobileno']=$admindetail[0]->mobileno;
        $data['address']=$admindetail[0]->address;
          $data['website']=$admindetail[0]->website;
            $data['fblink']=$admindetail[0]->fblink;
          $data['instalink']=$admindetail[0]->instalink;
           $data['twitterlink']=$admindetail[0]->twitterlink;

             $footer_about=DB::table('footer_about')->get();
          $data['footer_about']=$footer_about;
          

         $services=DB::table('service')->get();
         $data['services']=$services;

         $allbanner=DB::table('banner_image')->get();
          $data['allbanner']=$allbanner;

        return view('services',$data);
    }


     public function inquiry(){

      $admindetail=DB::table('admindetail')->take(1)->get();

        $data['id']=$admindetail[0]->id;
        $data['name']=$admindetail[0]->name;
        $data['email']=$admindetail[0]->email;
        $data['mobileno']=$admindetail[0]->mobileno;
        $data['address']=$admindetail[0]->address;
        $data['website']=$admindetail[0]->website;
          $data['fblink']=$admindetail[0]->fblink;
          $data['instalink']=$admindetail[0]->instalink;
           $data['twitterlink']=$admindetail[0]->twitterlink;
             $data['area']=$admindetail[0]->area;

               $footer_about=DB::table('footer_about')->get();
          $data['footer_about']=$footer_about;
          

           $allbanner=DB::table('banner_image')->get();
          $data['allbanner']=$allbanner;

           $inquirycontent=DB::table('inquirycontent')->get();
          $data['inquirycontent']=$inquirycontent;


        return view('inquiry',$data);
    }
    
   
    
     public function contact(){

     $admindetail=DB::table('admindetail')->take(1)->get();

        $data['id']=$admindetail[0]->id;
        $data['name']=$admindetail[0]->name;
        $data['email']=$admindetail[0]->email;
        $data['mobileno']=$admindetail[0]->mobileno;
        $data['address']=$admindetail[0]->address;
        $data['fax_no']=$admindetail[0]->fax_no;
          $data['website']=$admindetail[0]->website;
            $data['fblink']=$admindetail[0]->fblink;
          $data['instalink']=$admindetail[0]->instalink;
           $data['twitterlink']=$admindetail[0]->twitterlink;

           $allbanner=DB::table('banner_image')->get();
          $data['allbanner']=$allbanner;

            $footer_about=DB::table('footer_about')->get();
          $data['footer_about']=$footer_about;
          

        return view('contact',$data);
    }

     public function career(){

     $admindetail=DB::table('admindetail')->take(1)->get();
        $data['id']=$admindetail[0]->id;
        $data['name']=$admindetail[0]->name;
        $data['email']=$admindetail[0]->email;
        $data['mobileno']=$admindetail[0]->mobileno;
        $data['address']=$admindetail[0]->address;
        $data['website']=$admindetail[0]->website;
        $data['fblink']=$admindetail[0]->fblink;
        $data['instalink']=$admindetail[0]->instalink;
        $data['twitterlink']=$admindetail[0]->twitterlink;

          $footer_about=DB::table('footer_about')->get();
          $data['footer_about']=$footer_about;
          

        $position=DB::table('position')->get();
        $data['position']=$position;
       
          $benifits=DB::table('benifits')->get();
          $data['benifits']=$benifits;
  
       $allbanner=DB::table('banner_image')->get();
          $data['allbanner']=$allbanner;

          $wearehiring=DB::table('we_are_hiring')->get();
          $data['wearehiring']=$wearehiring; 

        return view('career',$data);
    }
   
    public function team(){

       $admindetail=DB::table('admindetail')->take(1)->get();
        $data['id']=$admindetail[0]->id;
        $data['name']=$admindetail[0]->name;
        $data['email']=$admindetail[0]->email;
        $data['mobileno']=$admindetail[0]->mobileno;
        $data['address']=$admindetail[0]->address;
          $data['website']=$admindetail[0]->website;
            $data['fblink']=$admindetail[0]->fblink;
          $data['instalink']=$admindetail[0]->instalink;
           $data['twitterlink']=$admindetail[0]->twitterlink;

        $owner=DB::table('team')->where('type','Owner')->get();
        $data['owner']=$owner;

        $team=DB::table('team')->where('type','Employee')->get();
        $data['team']=$team;
       
       $allbanner=DB::table('banner_image')->get();
          $data['allbanner']=$allbanner;
        

          $footer_about=DB::table('footer_about')->get();
          $data['footer_about']=$footer_about;
          
        return view('team',$data);
    }
      public function gallary(){

     $admindetail=DB::table('admindetail')->where('id',1)->get();
        $data['id']=$admindetail[0]->id;
        $data['name']=$admindetail[0]->name;
        $data['email']=$admindetail[0]->email;
        $data['mobileno']=$admindetail[0]->mobileno;
        $data['address']=$admindetail[0]->address;
          $data['website']=$admindetail[0]->website;
            $data['fblink']=$admindetail[0]->fblink;
          $data['instalink']=$admindetail[0]->instalink;
           $data['twitterlink']=$admindetail[0]->twitterlink;


         $gallary=DB::table('gallary')->get();
         $data['gallary']=$gallary;

         $allbanner=DB::table('banner_image')->get();
          $data['allbanner']=$allbanner;
            $footer_about=DB::table('footer_about')->get();
          $data['footer_about']=$footer_about;
          

        return view('gallary',$data);
    }


    public function sendjobapplication(Request $request){

       $request->validate([

            'name' => 'required',
            'email' => 'required|email', 
            'vacancy' => 'required',  
            'mobileno' => 'required',  
             'experience' => 'required',
          
            'resume' => 'required',  
            'description' => 'required',  

        ]);



     $file=$request->file('resume');
         $filename='';

        if ($file){
          
          $destinationPath='uploads';
          $filename=time().'_'.$file->getClientOriginalName();

          $file->move($destinationPath,$filename);
      
        }

     DB::table('job_application')->insert(['name'=>$request->input('name'),'email'=>$request->input('email'),'vacancy'=>$request->input('vacancy'),'mobileno'=>$request->input('mobileno'),'experience'=>$request->input('experience'),'resume'=>$filename,'description'=>$request->input('description')]);


             $meta['FROM_EMAIL']="ditest787@gmail.com";
             $meta['email']="info@rrtransportationinc.com";
             $meta['subject']="Career Inquiry Mail ";  
             $meta['email1']= $request->input('email');
             $meta['mobileno']=$request->input('mobileno');
             $meta['name']=$request->input('name');
   
            Mail::send('email.careerinquiry', $meta, function($m) use($meta){
        
               $m->from($meta["FROM_EMAIL"],'Career Inquiry Mail');
               $m->to($meta["email"]);
               $m->subject($meta["subject"]); 
               });



             $meta['FROM_EMAIL']="ditest787@gmail.com";
             $meta['email']=$request->input('email');
             $meta['subject']="Mail From R&R Transportation Inc.";  
           
   
            Mail::send('email.clientmail', $meta, function($m) use($meta){
        
               $m->from($meta["FROM_EMAIL"],'Mail From R&R Transportation Inc.');
               $m->to($meta["email"]);
               $m->subject($meta["subject"]); 
               });











     return Redirect::back()->with('error','your application submitted successfully!!!!');

    }
    
   
     public function contactusfrom(Request $request){
    
    $request->validate([

            'name' => 'required',
            'email' => 'required|email', 
            'subject' => 'required',  
            'description' => 'required',  


        ]);

               $name=$request->input('name');
               $email=$request->input('email');
               $subject=$request->input('subject');
               $description=$request->input('description');


       DB::table('contact_us')->insert(['name'=>$name,'email'=>$email,'subject'=>$subject,'description'=>$description]);

        $meta['FROM_EMAIL']="ditest787@gmail.com";
             $meta['email']="info@rrtransportationinc.com";
             $meta['subject']="Contact Us mail";  
             $meta['email1']= $request->input('email');
             $meta['mobileno']=$request->input('mobileno');
             $meta['name']=$request->input('name');
   
            Mail::send('email.contactmail', $meta, function($m) use($meta){
        
               $m->from($meta["FROM_EMAIL"],'Contact Us mail');
               $m->to($meta["email"]);
               $m->subject($meta["subject"]); 
               });


             $meta['FROM_EMAIL']="ditest787@gmail.com";
             $meta['email']=$request->email;
             $meta['subject']="Mail From R&R Transportation Inc.";  
           
   
            Mail::send('email.clientmail', $meta, function($m) use($meta){
        
               $m->from($meta["FROM_EMAIL"],'Mail From R&R Transportation Inc.');
               $m->to($meta["email"]);
               $m->subject($meta["subject"]); 
               });

       
     

      return redirect('/contact')->with('error','your message has been submitted successfully!!');
         
    }

    public function enquiriesfrom(Request $request){

        /* $request->validate([

            'name' => 'required',
            'mobileno' => 'required', 
            'email' => 'required|email', 
            'date' => 'required',  
            'from' => 'required', 
            'to' => 'required', 
         ]);*/

          $name=$request->name;
         $email1=$request->email;
         $mobileno=$request->mobileno;

        inquiry::create($request->all());


          $meta['FROM_EMAIL']="ditest787@gmail.com";
             $meta['email']="info@rrtransportationinc.com";
             $meta['subject']="Inquiry Mail ";  
             $meta['email1']= $request->input('email');
             $meta['mobileno']=$request->input('mobileno');
             $meta['name']=$request->input('name');
   
            Mail::send('email.inquiry', $meta, function($m) use($meta){
        
               $m->from($meta["FROM_EMAIL"],'Inquiry Mail');
               $m->to($meta["email"]);
               $m->subject($meta["subject"]); 
               });


             $meta['FROM_EMAIL']="ditest787@gmail.com";
             $meta['email']=$request->email;
             $meta['subject']="Mail From R&R Transportation Inc.";  
           
   
            Mail::send('email.clientmail', $meta, function($m) use($meta){
        
               $m->from($meta["FROM_EMAIL"],'Mail From R&R Transportation Inc.');
               $m->to($meta["email"]);
               $m->subject($meta["subject"]); 
               });


        
        
        
        
         return json_encode(array(
            "statusCode"=>200
         ));

    }




    public function getquotefrom1(Request $request){


         $validator = \Validator::make($request->all(),[
         
        'fromtype' => 'required',   
        'name' => 'required',
        'mobileno' => 'required',
        'email' => 'required|email',
        'from_zip' => 'required',
        'date' => 'required',
        'from_location' => 'required',
        'to_zip' => 'required',
        'to_location' => 'required',
        'shipping_unit' => 'required',
        'good_type' => 'required',
        'total_weight' => 'required',
        'Weight_unit' => 'required',
        'number_of_piece' => 'required',
        'lenght' => 'required',
        'width' => 'required',
        'height' => 'required',
        'approx_value' => 'required',
        'ship_decs' => 'required',
        'instructions' => 'required',

    ]);


    
    
    if($validator->fails())
    {
       
        return json_encode(array(
            "statusCode"=>202
         ));
    }

 

   get_qutoe1::create($request->all());

    $form_id=get_qutoe1::max('id');


        $services = [];
    foreach($request->services as $s) {
          $ser_arr = [
                    'form_id' => $form_id,
                    'qutoe_service' =>$s,
                  
                ];

                $services[] = $ser_arr;

          }   

      DB::table('qutoe_service')->insert($services);
             
         $name=$request->name;
         $email1=$request->email;
         $mobileno=$request->mobileno;
  
         

             $meta['FROM_EMAIL']="ditest787@gmail.com";
             $meta['email']="info@rrtransportationinc.com";
             $meta['subject']="Get Quote Mail";  
             $meta['email1']= $email1;
             $meta['mobileno']=$mobileno;
             $meta['name']= $name;
   
            Mail::send('email.inquiry', $meta, function($m) use($meta){
        
               $m->from($meta["FROM_EMAIL"],'Get Quote Inquiry Mail');
               $m->to($meta["email"]);
               $m->subject($meta["subject"]); 
               });


              $meta['FROM_EMAIL']="ditest787@gmail.com";
             $meta['email']=$request->email;
             $meta['subject']="Mail From R&R Transportation Inc.";  
           
   
            Mail::send('email.clientmail', $meta, function($m) use($meta){
        
               $m->from($meta["FROM_EMAIL"],'Mail From R&R Transportation Inc.');
               $m->to($meta["email"]);
               $m->subject($meta["subject"]); 
               });








         return json_encode(array(
            "statusCode"=>200
         ));
 




    }


    public function getquotefrom(Request $request){
      /*  print_r($request->all());
       
*/
  $fromtype1=$request->fromtype;


        $validator = \Validator::make($request->all(), [

        
        'fromtype' => 'required',   
        'name' => 'required',
        'mobileno' => 'required',
        'email' => 'required|email',
        'Trailer_type' => 'required',
        'from_zip' => 'required',
        'date' => 'required',
        'from_location' => 'required',
        'to_zip' => 'required',
        'to_location' => 'required',
        'shipping_unit' => 'required',
        'good_type' => 'required',
        'total_weight' => 'required',
        'Weight_unit' => 'required',
        'number_of_piece' => 'required',
        'lenght' => 'required',
        'width' => 'required',
        'height' => 'required',
        'approx_value' => 'required',
        'ship_decs' => 'required',
        'instructions' => 'required',

    ]);
    
    if ($validator->fails())
    {
        return json_encode(array(
            "statusCode"=>202
         ));
    }else{

    
        $name=$request->name;
        $email1=$request->email;
        $mobileno=$request->mobileno;
  
         get_queto::create($request->all());

             $meta['FROM_EMAIL']="ditest787@gmail.com";
             $meta['email']="info@rrtransportationinc.com";
             $meta['subject']="Get Quote Mail";  
             $meta['email1']= $email1;
             $meta['mobileno']=$mobileno;
             $meta['name']= $name;
   
            Mail::send('email.inquiry', $meta, function($m) use($meta){
        
               $m->from($meta["FROM_EMAIL"],'Get Quote Inquiry Mail');
               $m->to($meta["email"]);
               $m->subject($meta["subject"]); 
               });

              $meta['FROM_EMAIL']="ditest787@gmail.com";
             $meta['email']=$request->email;
             $meta['subject']="Mail From R&R Transportation Inc.";  
           
   
            Mail::send('email.clientmail', $meta, function($m) use($meta){
        
               $m->from($meta["FROM_EMAIL"],'Mail From R&R Transportation Inc.');
               $m->to($meta["email"]);
               $m->subject($meta["subject"]); 
               });



         return json_encode(array(
            "statusCode"=>200
         ));
       }
 



    
     /*  return json_encode(array(
            "statusCode"=>200
         ));
*/
    }


    public function employmentappliction(Request $request){




       $request->validate([

            'fname' => 'required',
            'lname' => 'required', 
            'mobileno' => 'required',  
            'email' => 'required',  
            'birthdate' => 'required', 
            'applicationdate' => 'required', 
            'position' => 'required', 
            'workdate' => 'required', 
            'permission' => 'required', 
            'current_street' => 'required', 
            'current_city' => 'required', 
            'current_zipcode' => 'required', 
            'current_address' => 'required', 
            'currentlicense_state' => 'required', 
            'currentlicense_licenseno' => 'required', 
            'currentlicense_endorsement' => 'required', 
          


        ]);









   /*  ----------personal info--------------    */
       echo $fname=$request->input('fname');
       echo $lname=$request->input('lname');
       echo $mobileno=$request->input('mobileno');
       echo $email=$request->input('email');
       echo $birthdate=$request->input('birthdate');
       echo $applicationdate=$request->input('applicationdate');
       echo $position=$request->input('position');
       echo $workdate=$request->input('workdate');
       echo $permission=$request->input('permission');


    DB::table('app_personalinfo')->insert(['fname'=>$fname,'lname'=>$lname,'mobileno'=>$mobileno,'email'=>$email,'dob'=>$birthdate,'application_date'=>$applicationdate,'position'=>$position,'work_date'=>$workdate,'workpermit'=>$permission]); 


     $personalid=DB::table('app_personalinfo')->max('id');

    /*-------------------address-----------------*/ 
       echo $current_status=$request->input('current_status');
       echo $current_street=$request->input('current_street');
       echo $current_city=$request->input('current_city');
       echo $current_state=$request->input('current_state');
       echo $current_zipcode=$request->input('current_zipcode');
       echo $current_year=$request->input('current_address');


     DB::table('app_residency')->insert(['status'=>$current_status,'street'=>$current_street,'city'=>$current_city,'state'=>$current_state,'zipcode'=>$current_zipcode,'time'=>$current_year,'personal_id'=>$personalid]); 

       echo $mailing_status=$request->input('mailing_status');
       echo $mailing_street=$request->input('mailing_street');
       echo $mailing_city=$request->input('mailing_city');
       echo $mailing_state=$request->input('mailing_state');
       echo $mailing_zipcode=$request->input('mailing_zipcode');
       echo $mailing_year=$request->input('mailing_address');


         DB::table('app_residency')->insert(['status'=>$mailing_status,'street'=>$mailing_street,'city'=>$mailing_city,'state'=>$mailing_state,'zipcode'=>$mailing_zipcode,'time'=>$mailing_year,'personal_id'=>$personalid]); 



       echo $previous1_status=$request->input('previous1_status');
       echo $previous1_street=$request->input('previous1_street'); 
       echo $previous1_city=$request->input('previous1_city');
       echo $previous1_state=$request->input('previous1_state');
       echo $previous1_zipcode=$request->input('previous1_zipcode');
       echo $previous1_year=$request->input('previous1_address');


        DB::table('app_residency')->insert(['status'=>$previous1_status,'street'=>$previous1_street,'city'=>$previous1_city,'state'=>$previous1_state,'zipcode'=>$previous1_zipcode,'time'=>$previous1_year,'personal_id'=>$personalid]); 


       echo $previous2_status=$request->input('previous2_status');
       echo $previous2_street=$request->input('previous2_street'); 
       echo $previous2_city=$request->input('previous2_city');
       echo $previous2_state=$request->input('previous2_state');
       echo $previous2_zipcode=$request->input('previous2_zipcode');
       echo $previous2_year=$request->input('previous2_address');


        DB::table('app_residency')->insert(['status'=>$previous2_status,'street'=>$previous2_street,'city'=>$previous2_city,'state'=>$previous2_state,'zipcode'=>$previous2_zipcode,'time'=>$previous2_year,'personal_id'=>$personalid]); 


       echo $previous3_status=$request->input('previous3_status');
       echo $previous3_street=$request->input('previous3_street'); 
       echo $previous3_city=$request->input('previous3_city');
       echo $previous3_state=$request->input('previous3_state');
       echo $previous3_zipcode=$request->input('previous3_zipcode');
       echo $previous3_year=$request->input('previous3_address');


DB::table('app_residency')->insert(['status'=>$previous3_status,'street'=>$previous3_street,'city'=>$previous3_city,'state'=>$previous3_state,'zipcode'=>$previous3_zipcode,'time'=>$previous3_year,'personal_id'=>$personalid]); 




      /*---------------- license info----------------*/

       echo $currentlicense_stauts=$request->input('currentlicense_stauts');
       echo $currentlicense_state=$request->input('currentlicense_state');
       echo $currentlicense_licenseno=$request->input('currentlicense_licenseno');
       echo $currentlicense_class=$request->input('currentlicense_class');
       echo $currentlicense_endorsement=$request->input('currentlicense_endorsement');
       echo $currentlicense_expriedate=$request->input('currentlicense_expriedate');


       DB::table('app_license')->insert(['status'=>$currentlicense_stauts,'state'=>$currentlicense_state,'licenseno'=>$currentlicense_licenseno,'type'=>$currentlicense_class,'endorsement'=>$currentlicense_endorsement,'expire_date'=>$currentlicense_expriedate,'personal_id'=>$personalid]); 


        echo $previous1license_stauts=$request->input('previous1license_stauts');
       echo $previous1license_state=$request->input('previous1license_state');
       echo $previous1license_licenseno=$request->input('previous1license_licenseno');
       echo $previous1license_class=$request->input('previous1license_class');
       echo $previous1license_endorsement=$request->input('previous1license_endorsement');
       echo $previous1license_expriedate=$request->input('previous1license_expriedate');


         DB::table('app_license')->insert(['status'=>$previous1license_stauts,'state'=>$previous1license_state,'licenseno'=>$previous1license_licenseno,'type'=>$previous1license_class,'endorsement'=>$previous1license_endorsement,'expire_date'=>$previous1license_expriedate,'personal_id'=>$personalid]); 


       echo $previous2license_stauts=$request->input('previous2license_stauts');
       echo $previous2license_state=$request->input('previous2license_state');
       echo $previous2license_licenseno=$request->input('previous2license_licenseno');
       echo $previous2license_class=$request->input('previous2license_class');
       echo $previous2license_endorsement=$request->input('previous2license_endorsement');
       echo $previous2license_expriedate=$request->input('previous2license_expriedate');

        DB::table('app_license')->insert(['status'=>$previous2license_stauts,'state'=>$previous2license_state,'licenseno'=>$previous2license_licenseno,'type'=>$previous2license_class,'endorsement'=>$previous2license_endorsement,'expire_date'=>$previous2license_expriedate,'personal_id'=>$personalid]); 


       /*--------------------experience record-----------------*/

       echo $straight_class=$request->input('straight_class');
       echo $straight_equipment=$request->input('straight_equipment');
       echo $straight_fromdate=$request->input('straight_fromdate');
       echo $straight_todate=$request->input('straight_todate');
       echo $straight_totalmile=$request->input('straight_totalmile');


         DB::table('app_experience')->insert(['class'=>$straight_class,'type'=>$straight_equipment,'from_date'=>$straight_fromdate,'to_date'=>$straight_todate,'approx_mile'=>$straight_totalmile,'personal_id'=>$personalid]); 
     

       echo $semi_class=$request->input('semi_class');
       echo $semi_equipment=$request->input('semi_equipment');
       echo $semi_fromdate=$request->input('semi_fromdate');
       echo $semi_todate=$request->input('semi_todate');
       echo $semi_totalmile=$request->input('semi_totalmile');

        DB::table('app_experience')->insert(['class'=>$semi_class,'type'=>$semi_equipment,'from_date'=>$semi_fromdate,'to_date'=>$semi_todate,'approx_mile'=>$semi_totalmile,'personal_id'=>$personalid]); 


       echo $tailer_class=$request->input('tailer_class');
       echo $tailer_equipment=$request->input('tailer_equipment');
       echo $tailer_fromdate=$request->input('tailer_fromdate');
       echo $tailer_todate=$request->input('tailer_todate');
       echo $tailer_totalmile=$request->input('tailer_totalmile');

        DB::table('app_experience')->insert(['class'=>$tailer_class,'type'=>$tailer_equipment,'from_date'=>$tailer_fromdate,'to_date'=>$tailer_todate,'approx_mile'=>$tailer_totalmile,'personal_id'=>$personalid]); 



       echo $tanker_class=$request->input('tanker_class');
       echo $tanker_equipment=$request->input('tanker_equipment');
       echo $tanker_fromdate=$request->input('tanker_fromdate');
       echo $tanker_todate=$request->input('tanker_todate');
       echo $tanker_totalmile=$request->input('tanker_totalmile');

        DB::table('app_experience')->insert(['class'=>$tanker_class,'type'=>$tanker_equipment,'from_date'=>$tanker_fromdate,'to_date'=>$tanker_todate,'approx_mile'=>$tanker_totalmile,'personal_id'=>$personalid]); 



       echo $other_class=$request->input('other_class');
       echo $other_equipment=$request->input('other_equipment');
       echo $other_fromdate=$request->input('other_fromdate');
       echo $other_todate=$request->input('other_todate');
       echo $other_totalmile=$request->input('other_totalmile');

        DB::table('app_experience')->insert(['class'=>$other_class,'type'=>$other_equipment,'from_date'=>$other_fromdate,'to_date'=>$other_todate,'approx_mile'=>$other_totalmile,'personal_id'=>$personalid]); 




  /*---------------------- acciendenct record----------------*/
        echo $accidentrecord1=$request->input('accidentrecord1');
        echo $record1_date=$request->input('record1_date');
        echo $record1_accident=$request->input('record1_accident');
        echo $record1_fatalities=$request->input('record1_fatalities');
        echo $record1_injuries=$request->input('record1_injuries');
        echo $record1_spills=$request->input('record1_spills');



        DB::table('app_accidentrecord')->insert(['status'=>$accidentrecord1,'date'=>$record1_date,'nature'=>$record1_accident,'fatalities'=>$record1_fatalities,     'injuries'=>$record1_injuries,'chemicalspill'=>$record1_spills,'personal_id'=>$personalid]); 

         echo $accidentrecord2=$request->input('accidentrecord2');
        echo $record2_date=$request->input('record2_date');
        echo $record2_accident=$request->input('record2_accident');
        echo $record2_fatalities=$request->input('record2_fatalities');
        echo $record2_injuries=$request->input('record2_injuries');
        echo $record2_spills=$request->input('record2_spills');


           DB::table('app_accidentrecord')->insert(['status'=>$accidentrecord2,'date'=>$record2_date,'nature'=>$record2_accident,'fatalities'=>$record2_fatalities,  'injuries'=>$record2_injuries,'chemicalspill'=>$record2_spills,'personal_id'=>$personalid]); 

        echo $accidentrecord3=$request->input('accidentrecord3');
        echo $record3_date=$request->input('record3_date');
        echo $record3_accident=$request->input('record3_accident');
        echo $record3_fatalities=$request->input('record3_fatalities');
        echo $record3_injuries=$request->input('record3_injuries');
        echo $record3_spills=$request->input('record3_spills');

         DB::table('app_accidentrecord')->insert(['status'=>$accidentrecord3,'date'=>$record3_date,'nature'=>$record3_accident,'fatalities'=>$record3_fatalities,  'injuries'=>$record3_injuries,'chemicalspill'=>$record3_spills,'personal_id'=>$personalid]); 


        /*------------------TRAFFIC CONVICTIONS ----------------*/


        echo $convicted1=$request->input('convicted1');
        echo $convicted1_month=$request->input('convicted1_month');
        echo $convicted1_violation=$request->input('convicted1_violation');
        echo $convicted1_stateviolation=$request->input('convicted1_stateviolation');
        echo $convicted1_penalty=$request->input('convicted1_penalty');

      DB::table('app_traffic')->insert(['status'=>$convicted1,'date'=>$convicted1_month,'violation'=>$convicted1_violation,'state'=>$convicted1_stateviolation,'penlty'=>$convicted1_penalty,'personal_id'=>$personalid]); 


          echo $convicted2=$request->input('convicted2');
        echo $convicted2_month=$request->input('convicted2_month');
        echo $convicted2_violation=$request->input('convicted2_violation');
        echo $convicted2_stateviolation=$request->input('convicted2_stateviolation');
        echo $convicted2_penalty=$request->input('convicted2_penalty');

          DB::table('app_traffic')->insert(['status'=>$convicted2,'date'=>$convicted2_month,'violation'=>$convicted2_violation,'state'=>$convicted2_stateviolation,'penlty'=>$convicted2_penalty,'personal_id'=>$personalid]); 


        echo $convicted3=$request->input('convicted3');
        echo $convicted3_month=$request->input('convicted3_month');
        echo $convicted3_violation=$request->input('convicted3_violation');
        echo $convicted3_stateviolation=$request->input('convicted3_stateviolation');
        echo $convicted3_penalty=$request->input('convicted3_penalty');


            DB::table('app_traffic')->insert(['status'=>$convicted3,'date'=>$convicted3_month,'violation'=>$convicted3_violation,'state'=>$convicted3_stateviolation,'penlty'=>$convicted3_penalty,'personal_id'=>$personalid]); 



        echo $convicted4=$request->input('convicted4');
        echo $convicted4_month=$request->input('convicted4_month');
        echo $convicted4_violation=$request->input('convicted4_violation');
        echo $convicted4_stateviolation=$request->input('convicted4_stateviolation');
        echo $convicted4_penalty=$request->input('convicted4_penalty');

         DB::table('app_traffic')->insert(['status'=>$convicted4,'date'=>$convicted4_month,'violation'=>$convicted4_violation,'state'=>$convicted4_stateviolation,'penlty'=>$convicted4_penalty,'personal_id'=>$personalid]); 


        /*------------------restriction--------------------*/
       
         echo $restriction=$request->input('restriction');
         echo $restriction_description=$request->input('restriction_description');


         echo $suspended=$request->input('suspended');
         echo $suspended_description=$request->input('suspended_description');


          DB::table('app_restriction')->insert(['restriction'=>$restriction,'restriction_description'=>$restriction_description,'suspended'=>$suspended,'suspended_description'=>$suspended_description,'personal_id'=>$personalid]); 


  /*------------------experience--------------------*/

         echo $current=$request->input('current');
         echo $current_cname=$request->input('current_cname');
         echo $current_cmobileno=$request->input('current_cmobileno');
         echo $current_position=$request->input('current_position');
         echo $current_salary=$request->input('current_salary');
         echo $current_caddress=$request->input('current_caddress');
         echo $current_reason=$request->input('current_reason');
         echo $current_frommonth=$request->input('current_frommonth');
         echo $current_tomonth=$request->input('current_tomonth');
         echo $current_explain=$request->input('current_explain');
         echo $current_regulation=$request->input('current_regulation');
         echo $current_CFR=$request->input('current_CFR');


       DB::table('app_history')->insert(['status'=>$current,'name'=>$current_cname,'mobileno'=>$current_cmobileno,'address'=>$current_caddress,'position'=>$current_position,'job_from'=>$current_frommonth,'job_to'=>$current_tomonth,'reason'=>$current_reason,'salary'=>$current_salary,'gape'=>$current_explain,'regulation'=>$current_regulation,'cfr'=>$current_CFR,'personal_id'=>$personalid]); 

 

         echo $second=$request->input('second');
         echo $second_cname=$request->input('second_cname');
         echo $second_cmobileno=$request->input('second_cmobileno');
         echo $second_position=$request->input('second_position');
         echo $second_salary=$request->input('second_salary');
         echo $second_caddress=$request->input('second_caddress');
         echo $second_reason=$request->input('second_reason');
         echo $second_frommonth=$request->input('second_frommonth');
         echo $second_tomonth=$request->input('second_tomonth');
         echo $second_explain=$request->input('second_explain');
         echo $second_regulation=$request->input('second_regulation');
         echo $second_CFR=$request->input('second_CFR');


            DB::table('app_history')->insert(['status'=>$second,'name'=>$second_cname,'mobileno'=>$second_cmobileno,'address'=>$second_caddress,'position'=>$second_position,'job_from'=>$second_frommonth,'job_to'=>$second_tomonth,'reason'=>$second_reason,'salary'=>$second_salary,'gape'=>$second_explain,'regulation'=>$second_regulation,'cfr'=>$second_CFR,'personal_id'=>$personalid]); 


         echo $third=$request->input('third');
         echo $third_cname=$request->input('third_cname');
         echo $third_cmobileno=$request->input('third_cmobileno');
         echo $third_position=$request->input('third_position');
         echo $third_salary=$request->input('third_salary');
         echo $third_caddress=$request->input('third_caddress');
         echo $third_reason=$request->input('third_reason');
         echo $third_frommonth=$request->input('third_frommonth');
         echo $third_tomonth=$request->input('third_tomonth');
         echo $third_explain=$request->input('third_explain');
         echo $third_regulation=$request->input('third_regulation');
         echo $third_CFR=$request->input('third_CFR');


           DB::table('app_history')->insert(['status'=>$third,'name'=>$third_cname,'mobileno'=>$third_cmobileno,'address'=>$third_caddress,'position'=>$third_position,'job_from'=>$third_frommonth,'job_to'=>$third_tomonth,'reason'=>$third_reason,'salary'=>$third_salary,'gape'=>$third_explain,'regulation'=>$third_regulation,'cfr'=>$third_CFR,'personal_id'=>$personalid]); 


           /*------------------eduction--------------------*/


    echo $eduction1=$request->input('eduction1');
    echo $school_name=$request->input('school_name');
    echo $school_study=$request->input('school_study');
    echo $school_year=$request->input('school_year');
    echo $school_graduate=$request->input('school_graduate');
    echo $school_details=$request->input('school_details');

      DB::table('app_education')->insert(['school'=>$eduction1,'name'=>$school_name,'course'=>$school_study,'year'=>$school_year,'graduate'=>$school_graduate,'detail'=>$school_details ,'personal_id'=>$personalid]); 

        




 echo $eduction2=$request->input('eduction2');
 echo $college_name=$request->input('college_name');
 echo $college_study=$request->input('college_study');
 echo $college_year=$request->input('college_year');
 echo $college_graduate=$request->input('college_graduate');
 echo $college_details=$request->input('college_details');


  DB::table('app_education')->insert(['school'=>$eduction2,'name'=>$college_name,'course'=>$college_study,'year'=>$college_year,'graduate'=>$college_graduate,'detail'=>$college_details,'personal_id'=>$personalid]); 




 echo $eduction3=$request->input('eduction3');
 echo $other_name=$request->input('other_name');
 echo $other_study=$request->input('other_study');
 echo $other_year=$request->input('other_year');
 echo $other_graduate=$request->input('other_graduate');
 echo $other_details=$request->input('other_details');

 DB::table('app_education')->insert(['school'=>$eduction3,'name'=>$other_name,'course'=>$other_study,'year'=>$other_year,'graduate'=>$other_graduate,'detail'=>$other_details ,'personal_id'=>$personalid]); 


   
           /*------------------othereduction--------------------*/    


echo $other_qualifications=$request->input('other_qualifications');


 DB::table('app_othereduction')->insert(['detail'=>$other_qualifications,'personal_id'=>$personalid]); 


             $meta['FROM_EMAIL']="info@rrtransportationinc.com";
             $meta['email']="ditest787@gmail.com";
             $meta['subject']="COMMERCIAL DRIVER EMPLOYMENT APPLICATION";  
             $meta['email1']= $email;
             $meta['mobileno']=$mobileno;
             $meta['name']= $fname; 
             $meta['lname']= $lname;
   
            Mail::send('email.application', $meta, function($m) use($meta){
        
               $m->from($meta["FROM_EMAIL"],'Inquiry Mail');
               $m->to($meta["email"]);
               $m->subject($meta["subject"]); 
               });


              $meta['FROM_EMAIL']="ditest787@gmail.com";
             $meta['email']=$request->input('email');
             $meta['subject']="Mail From R&R Transportation Inc.";  
           
   
            Mail::send('email.clientmail', $meta, function($m) use($meta){
        
               $m->from($meta["FROM_EMAIL"],'Mail From R&R Transportation Inc.');
               $m->to($meta["email"]);
               $m->subject($meta["subject"]); 
               });




     return Redirect::back()->with('error','your application submitted successfully!!!!');


    }



}
