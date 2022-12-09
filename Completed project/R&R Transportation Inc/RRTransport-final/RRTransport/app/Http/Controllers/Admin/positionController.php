<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\support\facades\Redirect;
use Illuminate\support\facades\validator;

class positionController extends Controller
{
      public function __construct(){

                $this->middleware('auth:admin');
        }


      public function addpositionview(){

         $position_type=DB::table('position_type')->get();
        $data['position_type']=$position_type;

  
        return view('admin.addposition',$data);

       }

    public function storeposition(Request $request){


        $request->validate([

            'name' => 'required',
            'no_of_vacancy'=>'required',
            'vacancy_type' => 'required', 

        ]);
       
        $name=$request->input('name');
        $no_of_vacancy=$request->input('no_of_vacancy');
        $vacancy_type=$request->input('vacancy_type');
        $country=$request->input('country');
        $Responsibilities=$request->input('Responsibilities');
        $Requirements=$request->input('Requirements');
  
    
         DB::table('position')->insert(['name'=>$name,'no_of_vacancy'=>$no_of_vacancy,'vacancy_type'=> $vacancy_type,'country'=> $country,'Responsibilities'=> $Responsibilities,'Requirements'=> $Requirements]);
       
       return redirect('admin/home')->with('error','your job position post uploaded sucessfully' );
          
    }


  


     public function deleteposition($id){

        DB::table('position')->where('id', $id)->delete();

           return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);


    }

      public function updateposition($id){

      $position_type=DB::table('position_type')->get();
        $data['position_type']=$position_type;

      $position= DB::table('position')->where('id', $id)->get();
       
        //$work=DB::table('work')->where('id',$id)->get();
        $data['id']=$position[0]->id;
        $data['name']=$position[0]->name;
        $data['no_of_vacancy']=$position[0]->no_of_vacancy;
        $data['vacancy_type']=$position[0]->vacancy_type;
         $data['country']=$position[0]->country;
          $data['Responsibilities']=$position[0]->Responsibilities;
           $data['Requirements']=$position[0]->Requirements;
       
        return view('admin.updateposition',$data);

       
       }

   public function storeupdateposition(Request $request,$id){

     $request->validate([

            'name' => 'required',
            'no_of_vacancy'=>'required',
            'vacancy_type' => 'required', 

        ]);
       
        $name=$request->input('name');
        $no_of_vacancy=$request->input('no_of_vacancy');
        $vacancy_type=$request->input('vacancy_type');
        $country=$request->input('country');
        $Responsibilities=$request->input('Responsibilities');
        $Requirements=$request->input('Requirements');
    
       

          DB::table('position')->where('id', $id)->update(['name'=>$name,'no_of_vacancy'=>$no_of_vacancy,'vacancy_type'=> $vacancy_type,'country'=> $country,'Responsibilities'=> $Responsibilities,'Requirements'=> $Requirements]);

           return redirect('admin/home')->with('error','your job position has been updated sucessfully' );

    }

      public function addbenifitsview(){
  
        return view('admin.addbenifits');

       }

      public function storebenifits(Request $request){

        $request->validate([

            'title' => 'required',
            'description'=>'required',
          

        ]);
       
        $title=$request->input('title');
        $description=$request->input('description');
      
    
         DB::table('benifits')->insert(['title'=>$title,'description'=>$description]);
       
       return redirect('admin/home')->with('error','your benifits uploaded sucessfully' );
          
    }

    public function deletebenifits($id)
    {
       DB::table('benifits')->where('id', $id)->delete();

           return response()->json([
            'success' => 'Record has been deleted successfully!'
          ]);
    }

    public function updatebenifits($id)
    {
      $benifits=DB::table('benifits')->where('id',$id)->get();

      $data['id']=$benifits[0]->id;
      $data['title']=$benifits[0]->title;
      $data['description']=$benifits[0]->description;

      return view('admin.updatebenifits',$data);
    }

    public function storeupdatebenifits(Request $request,$id)
    {
      $request->validate([

        'title' => 'required',
        'description'=>'required',

      ]);

      $title=$request->input('title');
      $description=$request->input('description');
      
    
      DB::table('benifits')->where('id',$id)->update(['title'=>$title,'description'=>$description]);
       
      return redirect('admin/home')->with('error','your benifits updated sucessfully' );
    }



}
