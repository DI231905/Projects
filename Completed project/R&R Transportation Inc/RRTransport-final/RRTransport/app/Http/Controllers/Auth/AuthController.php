<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\usermodel;
use App\Models\User;

use App\Http\Requests\Changepassword_request;
use Auth;
use Hash;

use Carbon\Carbon;

class AuthController extends Controller
{
     
     public $userService;
    


    public function __construct(UserService $userService){

                $this->userService=$userService;
        }
   

    public function register()
    {
       // echo Carbon::now()->subdays(2);
      return view('auth.register');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required'
        ]);

         $this->userService->Register($request);



       /* User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);*/

    //    }); 

       return redirect('home');
     }

    public function login()
    {

      return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }

        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function logout() {
      Auth::logout();

      return redirect('login');
    }

    public function Changepassword(){
         

       // $id = Auth::user()->id;
       // echo $id;
      return view('auth.Changepassword');
    }

    public function creatnewpassword(Changepassword_request $request,$id){


        

        $password=$request->input('password');
        $confirmpassword=$request->input('confirmpassword');

          $data['password']=$password;
          $data['confirmpassword']=$confirmpassword;
        //  $id = Auth::user()->id;
         

          if ($password==$confirmpassword) {

              $this->userService->creatnewpassword($request,$id);
              
            //  $password1=Hash::make($password);
          //  user::where('id', $id)->update(['password'=>$password1]);

             return redirect('login')->with('error', 'your password has been changed!!!!');;
            
          }else {
                   
                       return redirect('Changepassword')->with('error', 'password is not matched!!!!');
                  // return redirect('Changepassword')->with('error', 'password and confirm passwords does not matched!!!!');
          }

    }

    //////////////////////////// forgot password////////////////////////

     public function forgetpassword()
    {
       // echo Auth::user();
      return view('auth.forgetpassword');
    }
     public function updatepassword(){




     }
  


    public function home()
    {
       // echo Auth::user();
      return view('home');
    }
}

