<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Adminlogincontroller;
use App\Http\Controllers\Admin\Admincontroller; 
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\UserController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/',[UserController::class, 'index']);
 Route::get('/about',[UserController::class, 'about']);
 Route::get('/doctors',[UserController::class, 'doctors']);
 Route::get('/hospital_service',[UserController::class, 'hospital_service']);
 Route::get('/diagnostic_services',[UserController::class, 'diagnostic_services']);
 Route::get('/gallary',[userController::class, 'gallary']);
  Route::get('/contact',[userController::class, 'contact']);

 Route::post('/getinquiry',[userController::class, 'getinquiry']);
 Route::post('/getcontactus',[userController::class, 'getcontactus']);



Route::prefix('admin')->group(function(){



Route::get('/login',[Adminlogincontroller::class, 'login']);
Route::post('/login',[Adminlogincontroller::class, 'authenticate'])->name('login');
Route::get('/logout',[Adminlogincontroller::class, 'logout'])->name('adminlogout');
Route::get('/home',[Admincontroller::class, 'home']);
Route::get('/changepassword',[Admincontroller::class, 'changepassword']);
Route::post('/updatepassword/{id}',[Admincontroller::class, 'updatepassword']);

Route::get('/forgetpasswordview',[Adminlogincontroller::class, 'forgetpasswordview'])->name('forgetpasswordview');
Route::post('/resetpasswordlink',[Adminlogincontroller::class, 'resetpasswordlink'])->name('resetpasswordlink');

Route::get('/resetpasswordview/{id}',[Adminlogincontroller::class, 'resetpasswordview'])->name('resetpasswordview');
Route::post('/resetpassword',[Adminlogincontroller::class, 'resetpassword'])->name('resetpassword');


Route::get('/viewBannerlist',[HomeController::class, 'viewBannerlist']);
Route::get('/addhomebanner',[HomeController::class, 'addhomebanner']);
Route::post('/storehomebanner',[HomeController::class,'storehomebanner']);
Route::get('/updatebanner/{id}',[HomeController::class, 'updatebanner']);
Route::post('/storeupdatebanner/{id}',[HomeController::class, 'storeupdatebanner']);
Route::get('/deletemaintitle/{id}',[HomeController::class,'deletemaintitle']);
Route::get('/deletehomebannerdata/{id}',[HomeController::class, 'deletehomebanner']);


Route::get('/Featureslist',[HomeController::class, 'Featureslist']);
Route::get('/addfeatures',[HomeController::class, 'addfeatures']);
Route::post('/storefeatures',[HomeController::class, 'storefeatures']);
Route::get('/deletefeatures/{id}',[HomeController::class, 'deletefeatures']);
Route::get('/updatefeatures/{id}',[HomeController::class, 'updatefeatures']);
Route::post('/storeupdatefeatures/{id}',[HomeController::class, 'storeupdatefeatures']);

Route::get('/Homeaboutuslist',[HomeController::class, 'Homeaboutuslist']);
Route::get('/updatehomeaboutus/{id}',[HomeController::class, 'updatehomeaboutus']);
Route::post('/storehomeaboutus/{id}',[HomeController::class, 'storehomeaboutus']);


Route::get('/wroksteplist',[HomeController::class, 'wroksteplist']);
Route::get('/addwrokstep',[HomeController::class, 'addwrokstep']);
Route::post('/storewrokstep',[HomeController::class, 'storewrokstep']);
Route::get('/updateworkstep/{id}',[HomeController::class, 'updateworkstep']);
Route::post('/storeupdatewrokstep/{id}',[HomeController::class, 'storeupdatewrokstep']);
Route::get('/deleteworkstep/{id}',[HomeController::class, 'deleteworkstep']);


Route::get('/recordlist',[HomeController::class, 'recordlist']);
Route::get('/addnewrecord',[HomeController::class, 'addnewrecord']);
Route::post('/storerecord',[HomeController::class, 'storerecord']);
Route::get('/updaterecord/{id}',[HomeController::class, 'updaterecord']);
Route::post('/storeupdatedrecord/{id}',[HomeController::class, 'storeupdatedrecord']);
Route::get('/deleterecord/{id}',[HomeController::class, 'deleterecord']);

Route::get('/testimoniallist',[HomeController::class, 'testimoniallist']);
Route::get('/addtestimonial',[HomeController::class, 'addtestimonial']);
Route::post('/storetestimonial',[HomeController::class, 'storetestimonial']);
Route::get('/deletetestimonial/{id}',[HomeController::class, 'deletetestimonial']);
Route::get('/updatetestimonial/{id}',[HomeController::class, 'updatetestimonial']);
Route::post('/storeupdatetestimonial/{id}',[HomeController::class, 'storeupdatetestimonial']);

Route::get('/aboutusBannerlist',[AboutUsController::class, 'aboutusBannerlist']);
Route::get('/updatebannerimg/{id}',[AboutUsController::class,'updatebannerimg']);
Route::post('/storeupdatebannerimg/{id}',[AboutUsController::class,'storeupdatebannerimg']);

Route::get('/aboutusdescription',[AboutUsController::class,'aboutusdescription']);
Route::get('/updateaboutus/{id}',[AboutUsController::class,'updateaboutus']);
Route::post('/storeaboutus/{id}',[AboutUsController::class,'storeaboutus']);
Route::get('/updateaboutus/deleteimage/{id}',[AboutUsController::class,'deleteimage']);

Route::get('/ourmissionvision',[AboutUsController::class,'ourmissionvision']);
Route::get('/updatemissionvision/{id}',[AboutUsController::class,'updatemissionvision']);
Route::post('/storemissionvision/{id}',[AboutUsController::class,'storemissionvision']);


Route::get('/aboutwork',[AboutUsController::class,'aboutwork']);
Route::get('/updateaboutwork/{id}',[AboutUsController::class,'updateaboutwork']);
Route::post('/storeaboutwork/{id}',[AboutUsController::class,'storeaboutwork']);
Route::get('/updateaboutwork/deleteworkimage/{id}',[AboutUsController::class,'deleteworkimage']);

Route::get('/addworkbenifits',[AboutUsController::class,'addworkbenifits']);
Route::post('/storeworkbenifits',[AboutUsController::class,'storeworkbenifits']);
Route::get('/updateworkbenifits/{id}',[AboutUsController::class,'updateworkbenifits']);
Route::post('/storeupdateworkbenifits/{id}',[AboutUsController::class,'storeupdateworkbenifits']);
Route::get('/deleteworkbenifits/{id}',[AboutUsController::class,'deleteworkbenifits']);

Route::get('/whychooseus',[AboutUsController::class,'whychooseus']);
Route::get('/updatewhychooseus/{id}',[AboutUsController::class,'updatewhychooseus']);
Route::post('/storewhychooseus/{id}',[AboutUsController::class,'storewhychooseus']);

Route::get('/addbenifits',[AboutUsController::class,'addbenifits']);
Route::post('/storebenifits',[AboutUsController::class,'storebenifits']);
Route::get('/updatebenifits/{id}',[AboutUsController::class,'updatebenifits']);
Route::post('/storeupdatebenifits/{id}',[AboutUsController::class,'storeupdatebenifits']);
Route::get('/deletebenifits/{id}',[AboutUsController::class,'deletebenifits']);

Route::get('/achivementlist',[AboutUsController::class,'achivementlist']);
Route::get('/addachivement',[AboutUsController::class,'addachivement']);
Route::post('/storeachivement',[AboutUsController::class,'storeachivement']);
Route::get('/deleteachivments/{id}',[AboutUsController::class,'deleteachivment']);


Route::get('/teamdescription',[AboutUsController::class,'teamdescription']);
Route::get('/updateteamdescription/{id}',[AboutUsController::class,'updateteamdescription']);
Route::post('/storeteamdescription/{id}',[AboutUsController::class,'storeteamdescription']);


Route::get('/teamview',[AboutUsController::class,'teamview']);
Route::get('/addteam',[AboutUsController::class,'addteam']);
Route::post('/storeteam',[AboutUsController::class,'storeteam']);
Route::get('/updateteam/{id}',[AboutUsController::class,'updateteam']);
Route::post('/storeupdateteam/{id}',[AboutUsController::class,'storeupdateteam']);
Route::get('/deleteteam/{id}',[AboutUsController::class,'deleteteam']);


Route::get('/gallaryview',[AboutUsController::class,'gallaryview']);
Route::get('/gallarybanner',[AboutUsController::class,'gallarybanner']);
Route::get('/addgallary',[AboutUsController::class, 'addgallary']);
Route::post('/storegallary',[AboutUsController::class,'storegallary']);
Route::get('/deletegallaryimage/{id}',[AboutUsController::class, 'deletegallaryimage']);

Route::get('/doctorbanner',[AboutUsController::class,'doctorbanner']);


Route::get('/hospital_service',[AboutUsController::class,'hospital_service']);
Route::get('/addnewservices',[AboutUsController::class,'addnewservices']);
Route::post('/storeservice',[AboutUsController::class,'storeservice']);
Route::get('/updateservice/{id}',[AboutUsController::class,'updateservice']);
Route::post('/storeupdateservice/{id}',[AboutUsController::class,'storeupdateservice']);
Route::get('/deleteservice/{id}',[AboutUsController::class,'deleteservice']);

Route::get('/diagnostic_service',[AboutUsController::class,'diagnostic_service']);

Route::get('/admindetail',[AboutUsController::class,'admindetail']);

Route::get('/updateadmindetail/{id}',[AboutUsController::class,'updateadmindetail']);

Route::get('/deletemobileno/{id}',[AboutUsController::class,'deletemobileno']);
Route::get('/deleteemail/{id}',[AboutUsController::class,'deleteemail']);

Route::post('/storeadmindetail/{id}',[AboutUsController::class,'storeadmindetail']);

Route::get('/contactusbanner',[AboutUsController::class,'contactusbanner']);

Route::get('/addnewservices1',[AboutUsController::class,'addnewservices1']);
Route::post('/storeservice1',[AboutUsController::class,'storeservice1']);
Route::get('/updateservice1/{id}',[AboutUsController::class,'updateservice1']);
Route::post('/storeupdateservice1/{id}',[AboutUsController::class,'storeupdateservice1']);
Route::get('/deleteservice1/{id}',[AboutUsController::class,'deleteservice1']);


Route::get('/contactlist',[Admincontroller::class, 'contactlist']);

Route::get('/deletecontact/{id}',[Admincontroller::class, 'deletecontact']);
Route::get('/deleteenquiry/{id}',[Admincontroller::class, 'deleteenquiry']);

Route::get('/footeraboutlist',[AboutUsController::class,'footeraboutlist']);

Route::get('/footer_about/{id}',[AboutUsController::class,'footer_about']);
Route::post('/store_footer_about/{id}',[AboutUsController::class,'store_footer_about']);



 }); 

