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


          $admindetail=DB::table('admindetail')->get();
          $data['admindetail']=$admindetail;

          $service=DB::table('service')->get();
          $data['service']=$service;

          $testimonial=DB::table('testimonial')->get();
          $data['testimonial']=$testimonial;

          $position=DB::table('position')->get();
          $data['position']=$position;

          $team=DB::table('team')->get();
          $data['team']=$team;

          $faq=DB::table('faq')->get();
          $data['faq']=$faq;
          
          $enquires=DB::table('enquires')->get();
          $data['enquires']=$enquires;
     
          $gallary=DB::table('gallary')->get();
          $data['gallary']=$gallary;

          $contact_us=DB::table('contact_us')->get();
          $data['contact_us']=$contact_us;

          $job_application=DB::table('job_application')->get();
          $data['job_application']=$job_application;

          $get_queto=DB::table('get_queto')->get();
          $data['get_queto']=$get_queto;

          $get_queto1=DB::table('get_queto1')->get();
          $data['get_queto1']=$get_queto1;

          $features=DB::table('features')->get();
          $data['features']=$features;

          $banner=DB::table('banner')->get();
          $data['banner']=$banner;

          $history=DB::table('history')->get();
          $data['history']=$history;

          $benifits=DB::table('benifits')->get();
          $data['benifits']=$benifits;

          $mission=DB::table('mission')->get();
          $data['mission']=$mission;

          $whychooseus=DB::table('why_choose_us')->get();
          $data['whychooseus']=$whychooseus;

          $allbanner=DB::table('banner_image')->get();
          $data['allbanner']=$allbanner;

          $inquirycontent=DB::table('inquirycontent')->get();
          $data['inquirycontent']=$inquirycontent;

          $hiring=DB::table('we_are_hiring')->get();
          $data['hiring']=$hiring;

          $more_maintitle=DB::table('more_maintitle')->get();
          $data['more_maintitle']=$more_maintitle;

          $app_personalinfo=DB::table('app_personalinfo')->get();
          $data['app_personalinfo']=$app_personalinfo;


          $footer_about=DB::table('footer_about')->get();
          $data['footer_about']=$footer_about;
          




    
         return view('admin.home',$data);
      
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

    /*----------- admin data ---------------*/

      public function updateadmindetail($id){

       $admindetail=DB::table('admindetail')->where('id', $id)->get();

        $data['id']=$admindetail[0]->id;
        $data['email']=$admindetail[0]->email;
        $data['name']=$admindetail[0]->name;
        $data['mobileno']=$admindetail[0]->mobileno;
        $data['fax_no']=$admindetail[0]->fax_no;
        $data['website']=$admindetail[0]->website;
        $data['address']=$admindetail[0]->address;
        $data['area']=$admindetail[0]->area;
        $data['fblink']=$admindetail[0]->fblink;
        $data['instalink']=$admindetail[0]->instalink;
        $data['twitterlink']=$admindetail[0]->twitterlink;
      
         return view('admin.updateadmindetailview',$data);

        }

       public function storeadmindetail(Request $request,$id){


         $request->validate([

            'name' => 'required|string',
            'email' => 'required|email',
            'mobileno' => 'required',
            'address' => 'required',  

             ]);
       
             $name=$request->input('name');
             $email = $request->input('email');
             $mobileNo=$request->input('mobileno');
             $address=$request->input('address');
               $area=$request->input('area');
             $fblink=$request->input('fblink');
             $website=$request->input('website');
              $faxno=$request->input('faxno');
             $instalink=$request->input('instalink');
             $twitterlink=$request->input('twitterlink');
     
            DB::table('admindetail')->where('id',$id)->update(['name'=>$name ,'email'=>$email,'fax_no'=>$faxno,'mobileno'=>$mobileNo,'website'=>$website,'address'=>$address ,'area'=>$area ,'fblink'=>$fblink ,'instalink'=>$instalink ,'twitterlink'=>$twitterlink]);

           return redirect('admin/home')->with('error',' update admin detail sucessfully!!!!');
    
          }


    /*----------- Contactus data ---------------*/

      public function deletecontactus($id){
  
       DB::table('contact_us')->where('id', $id)->delete();

     return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);

       }


     public function deleteenquiry($id){
  
       DB::table('enquires')->where('id', $id)->delete();


      return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);
       }

    /*---------------team data-------------------*/


      public function teamview(){

         $emp_type=DB::table('emp_type')->get();
         $data['emp_type']=$emp_type;
  
      
       return view('admin.teamview',$data);

        }


      public function addteam(Request $request){


         $request->validate([

            'name' => 'required|string',
           /* 'image' => 'required',*/
            'type' => 'required',
            'description' => 'required',
           
            

        ]);
       

        $name=$request->input('name');
        $file=$request->file('image');
        $type1=$request->input('type');
        $fblink=$request->input('fblink');
        $instalink=$request->input('instalink');
        $ineedlink=$request->input('ineedlink');
        $twitterlink=$request->input('twitterlink');
        $description=$request->input('description');
        $imagename=' ';

         $type= DB::table('emp_type')->where('id', $type1)->get();
          $emp_type=$type[0]->type;

        if ($file) {
          
          $destinationPath='uploads';
          $imagename=time().'_'.$file->getClientOriginalName();

         $file->move($destinationPath,$imagename);
      
        }
  

         DB::table('team')->insert(['name'=>$name,'image'=>$imagename,'type'=>$emp_type,'twitterlink'=>$twitterlink,'fblink'=>$fblink,'instalink'=>$instalink, 'ineedlink'=>$ineedlink, 'description'=>$description]);
       
          return redirect('admin/home')->with('error',' insert Team member data succcesfully!!!!');

          }

       public function teamdelete($id){


        $team= DB::table('team')->where('id', $id)->get();

         if ($team[0]->image!='') {

            unlink(public_path("/uploads/".$team[0]->image));

          

          }

        DB::table('team')->where('id', $id)->delete();

   return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);


     
          } 

      public function teamupdateview($id){

         $emp_type=DB::table('emp_type')->get();
         $data['emp_type']=$emp_type;

       $team= DB::table('team')->where('id', $id)->get();
      
        $data['id']=$team[0]->id;
        $data['name']=$team[0]->name;
        $data['image']=$team[0]->image;
        $data['type']=$team[0]->type;
        $data['twitterlink']=$team[0]->twitterlink;
        $data['fblink']=$team[0]->fblink;
        $data['instalink']=$team[0]->instalink;
        $data['ineedlink']=$team[0]->ineedlink;
        $data['description']=$team[0]->description;

         

          $type1=$team[0]->type;

          $type= DB::table('emp_type')->where('type', $type1)->get();
          $data['type_id'] =$type[0]->id;
       
        return view('admin.updateteamview',$data);   

               }

      public function storeupdateteam(Request $request,$id){


           $request->validate([

            'name' => 'required',
            'type' => 'required', 
           
           
        ]);
       
        $name=$request->input('name');
        $ineedlink=$request->input('ineedlink');
        $type1=$request->input('type');
        $fblink=$request->input('fblink');
        $twitterlink=$request->input('twitterlink');
        $instalink=$request->input('instalink');
        $description=$request->input('description');



         $type=DB::table('emp_type')->where('id', $type1)->get();
          $emp_type=$type[0]->type;


        $file=$request->file('image');
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

          DB::table('team')->where('id', $id)->update(['name'=>$name ,'type'=>$emp_type,'twitterlink'=>$twitterlink,'fblink'=>$fblink,'instalink'=>$instalink,'ineedlink'=>$ineedlink,'description'=>$description]);

           return redirect('admin/home')->with('error',' update Team member data succcesfully!!!!');;

          }
       


    /*----------- testimonial data ---------------*/

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
    
           return redirect('admin/home')->with('error',' testimonial insterted succcesfully!!!!');
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

           return redirect('admin/home')->with('error',' update Team member data succcesfully!!!!');
 
          }


  /*-------------------gallary-----------------*/

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
 
              return redirect('admin/home')->with('error','your file insert sucessfully!!');
          } 



    /*--------------- FAQ data--------------------*/


    public function addfaqview(){
  
        return view('admin.addfaq');

       }

    public function storefaq(Request $request){


           $request->validate([

            'question' => 'required',
            'answer'=>'required',
            
        ]);
       
        $question=$request->input('question');
        $answer=$request->input('answer');
       
    
    
         DB::table('faq')->insert(['question'=>$question,'answer'=>$answer]);
       
       return redirect('admin/home')->with('error','FREQUENTLY ASK QUESTIONS Added sucessfully!!' );
          
     }

    public function deletefaq($id){

      
        DB::table('faq')->where('id', $id)->delete();

      return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);


        }

      public function updatefaq($id){ 

        $faq= DB::table('faq')->where('id', $id)->get();
       
        //$work=DB::table('work')->where('id',$id)->get();
        $data['id']=$faq[0]->id;
        $data['question']=$faq[0]->question;
        $data['answer']=$faq[0]->answer;
       
       
        return view('admin.updatefaq',$data);

       
       }

    public function storeupdatefaq(Request $request,$id){


         $request->validate([

            'question' => 'required',
            'answer'=>'required',
           
        ]);
       
        $question=$request->input('question');
        $answer=$request->input('answer');
     
       

          DB::table('faq')->where('id', $id)->update(['question'=>$question,'answer'=>$answer]);

           return redirect('admin/home')->with('error','FREQUENTLY ASK QUESTIONS updated sucessfully!!');

    }





    /*------------gallary data----------------*/

      public function deleteimage($id){

          $gallary=DB::table('gallary')->where('id', $id)->get();

          echo $gallary[0]->file;

          if ($gallary[0]->file!=''){

           unlink(public_path("/uploads/".$gallary[0]->file));

     
            }

           DB::table('gallary')->where('id', $id)->delete();

           return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);


          }

          public function deletecontact($id){

             DB::table('contact_us')->where('id', $id)->delete();

           return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);



          }


        public function downloadpdf($id){
  
       $application= DB::table('job_application')->where('id', $id)->get();
        $resume=$application[0]->resume;



         return response()->download('/uploads/'.$resume);


     
      }

       public function deletecareerinquiry($id){

  
         $application= DB::table('job_application')->where('id', $id)->get();


         if($application[0]->resume!='') {


           unlink(public_path("/uploads/".$application[0]->resume));

         
             }

           DB::table('job_application')->where('id', $id)->delete();

           return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);


          }

           public function deletequeto($id){

            // print_r("1212324");
            // exit;

             DB::table('get_queto')->where('id', $id)->delete();

           return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);



          }

            public function deletequeto1($id){

             DB::table('get_queto1')->where('id', $id)->delete();

             DB::table('qutoe_service')->where('form_id', $id)->delete();

           return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);



          }

          public function viewInquiry($id){

         $get_queto=DB::table('get_queto')->where('id', $id)->get();

          $data['id']=$get_queto[0]->id;
          $data['name']=$get_queto[0]->name;
          $data['mobileno']=$get_queto[0]->mobileno;
          $data['email']=$get_queto[0]->email;
          $data['Trailer_type']=$get_queto[0]->Trailer_type;
          $data['from_zip']=$get_queto[0]->from_zip;
          $data['date']=$get_queto[0]->date;
          $data['from_location']=$get_queto[0]->from_location;
          $data['to_zip']=$get_queto[0]->to_zip;
          $data['to_location']=$get_queto[0]->to_location;
          $data['shipping_unit']=$get_queto[0]->shipping_unit;
          $data['good_type']=$get_queto[0]->good_type;
          $data['total_weight']=$get_queto[0]->total_weight;
          $data['Weight_unit']=$get_queto[0]->Weight_unit;
          $data['number_of_piece']=$get_queto[0]->number_of_piece;
          $data['lenght']=$get_queto[0]->lenght;
          $data['width']=$get_queto[0]->width;
          $data['height']=$get_queto[0]->height;
          $data['approx_value']=$get_queto[0]->approx_value;
          $data['ship_decs']=$get_queto[0]->ship_decs;
          $data['instructions']=$get_queto[0]->instructions;
          $data['Amount_of_Trailer']=$get_queto[0]->Amount_of_Trailer;
          $data['feet']=$get_queto[0]->feet;
         
         return view('admin.viewinquirydetail',$data);

       }
         public function viewInquiry2($id){

        $get_queto=DB::table('get_queto1')->where('id', $id)->get();

          $data['id']=$get_queto[0]->id;
          $data['name']=$get_queto[0]->name;
          $data['mobileno']=$get_queto[0]->mobileno;
          $data['email']=$get_queto[0]->email;
       /*   $data['Trailer_type']=$get_queto[0]->Trailer_type;*/
          $data['from_zip']=$get_queto[0]->from_zip;
          $data['date']=$get_queto[0]->date;
          $data['from_location']=$get_queto[0]->from_location;
          $data['to_zip']=$get_queto[0]->to_zip;
          $data['to_location']=$get_queto[0]->to_location;
          $data['shipping_unit']=$get_queto[0]->shipping_unit;
          $data['good_type']=$get_queto[0]->good_type;
          $data['total_weight']=$get_queto[0]->total_weight;
          $data['Weight_unit']=$get_queto[0]->Weight_unit;
          $data['number_of_piece']=$get_queto[0]->number_of_piece;
          $data['lenght']=$get_queto[0]->lenght;
          $data['width']=$get_queto[0]->width;
          $data['height']=$get_queto[0]->height;
          $data['approx_value']=$get_queto[0]->approx_value;
          $data['ship_decs']=$get_queto[0]->ship_decs;
          $data['instructions']=$get_queto[0]->instructions;
          $data['Freight']=$get_queto[0]->Freight;
          $data['Commodities']=$get_queto[0]->Commodities;


          $get_queto_service=DB::table('qutoe_service')->where('form_id', $id)->get();

          $data['get_queto_service']=$get_queto_service;




          
         /* $data['Amount_of_Trailer']=$get_queto[0]->Amount_of_Trailer;
          $data['feet']=$get_queto[0]->feet;*/
         
         return view('admin.viewtruckload',$data);

       }

       public function addhomebanner(){

           return view('Admin.addhomebanner');
         }

          public function storehomebanner(Request $request){


            $request->validate([

              'maintitle' => 'required|string',
              'title' => 'required',
              'image' => 'required',
               
           ]);
       
           $title=$request->input('title');
         /*  $maintitle =$request->input('maintitle');*/
         $file=$request->file('image');

          $maintitle=$request->input('maintitle');

         $maintitles=$request->input('maintitles') ;
 
         
          $imagename='';
        
        if ($file){
          
               $destinationPath='uploads';
               $imagename=time().'_'.$file->getClientOriginalName();

               $file->move($destinationPath,$imagename);
       
           }



          DB::table('banner')->insert(['title'=>$title ,'image'=>$imagename]);


           $last_id = DB::table('banner')->max('id'); 

           $maintitle=$request->input('maintitle');

           if($maintitle!=""){

             DB::table('more_maintitle')->insert(['more_maintitle'=>$maintitle,'banner_id'=>$last_id]);

             }

           $maintitles=$request->input('maintitles');

            if($maintitles!=null){
            
              for($i=0; $i<count($maintitles); $i++){

                   $maintitles_info=$maintitles[$i];

                   if($maintitles_info!=""){

                   DB::table('more_maintitle')->insert(['more_maintitle'=>$maintitles_info,'banner_id'=>$last_id]);
                  }
  
                }
            }

   

           return redirect('admin/home')->with('error',' update banner data succcesfully!!!!');
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

          $maintitle=$request->input('maintitle');
          $maintitles=$request->input('maintitles') ;
  
           $imagename='';

            if($file){
         
            $destinationPath='uploads';
            $imagename=time().'_'.$file->getClientOriginalName();
    
            $file->move($destinationPath,$imagename);

            DB::table('banner')->where('id', $id)->update(['image'=>$imagename]);

            if ($request->input('oldimage')!='') {

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


           return redirect('admin/home')->with('error',' update banner data succcesfully!!!!');
 
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

        public function updatehistory($id){

        $history= DB::table('history')->where('id', $id)->get();

        $data['id']=$history[0]->id;
        $data['title']=$history[0]->title;
        $data['image']=$history[0]->image;
        $data['description']=$history[0]->description;
   
  
        return view('admin.updatehistory',$data);
        }
  
      public function storeupdatehistory(Request $request ,$id){

         $request->validate([

            'description' => 'required|string',
            'title' => 'required',
               
           ]);
       
           $title=$request->input('title');
           $maintitle =$request->input('description');
           $file=$request->file('image');
        
           $imagename='';

            if($file){
         
           $destinationPath='uploads';
           $imagename=time().'_'.$file->getClientOriginalName();
    
           $file->move($destinationPath,$imagename);

           DB::table('history')->where('id', $id)->update(['image'=>$imagename]);

            if ($request->input('oldimage')!='') {

             unlink(public_path("/uploads/".$request->input('oldimage')));  

             }

           }

          DB::table('history')->where('id', $id)->update(['title'=>$title ,'description'=>$maintitle]);

           return redirect('admin/home')->with('error',' update history data succcesfully!!!!');
 
          }

          public function updatebannerimg($id)
          {
            $allbanner= DB::table('banner_image')->where('id', $id)->get();

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

            return redirect('admin/home')->with('error',' update banner image succcesfully!!!!');
          }


          public function viewapplication($id){


          $app_personalinfo=DB::table('app_personalinfo')->where('id',$id)->get();
          $data['app_personalinfo']=$app_personalinfo;


           $app_residency=DB::table('app_residency')->where('personal_id',$id)->get();
           $data['app_residency']=$app_residency;


           $app_currentlicense=DB::table('app_license')->where('personal_id',$id)->Where('status' , "current")->get();
           $data['app_currentlicense']=$app_currentlicense;


             $app_previouslicense=DB::table('app_license')->where('personal_id',$id)->Where('status' , "previous")->get();
           $data['app_previouslicense']=$app_previouslicense;


             $app_experience=DB::table('app_experience')->where('personal_id',$id)->get();
           $data['app_experience']=$app_experience;

              $app_accidentrecord=DB::table('app_accidentrecord')->where('personal_id',$id)->get();
           $data['app_accidentrecord']=$app_accidentrecord;

            $app_traffic=DB::table('app_traffic')->where('personal_id',$id)->get();
           $data['app_traffic']=$app_traffic;


            $app_restriction=DB::table('app_restriction')->where('personal_id',$id)->get();
           $data['app_restriction']=$app_restriction;


            $app_history=DB::table('app_history')->where('personal_id',$id)->get();
           $data['app_history']=$app_history;
    

              $app_education=DB::table('app_education')->where('personal_id',$id)->get();
           $data['app_education']=$app_education;


            $app_othereduction=DB::table('app_othereduction')->where('personal_id',$id)->get();
           $data['app_othereduction']=$app_othereduction;


            return view('admin.applicationview',$data);
          }


         public function deleteapplication($id){


            DB::table('app_personalinfo')->where('id', $id)->delete();

            DB::table('app_residency')->where('personal_id',$id)->delete();

            DB::table('app_license')->where('personal_id',$id)->delete();

            DB::table('app_experience')->where('personal_id',$id)->delete();

            DB::table('app_accidentrecord')->where('personal_id',$id)->delete();

            DB::table('app_accidentrecord')->where('personal_id',$id)->delete();

            DB::table('app_traffic')->where('personal_id',$id)->delete();

            DB::table('app_restriction')->where('personal_id',$id)->delete(); 

            DB::table('app_history')->where('personal_id',$id)->delete();

            DB::table('app_education')->where('personal_id',$id)->delete();

            DB::table('app_othereduction')->where('personal_id',$id)->delete();


      return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);


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

            return redirect('admin/home')->with('error','update footer about succcesfully!!!!');
          }



     }
   

  




