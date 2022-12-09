<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\Auth\Adminlogincontroller;
use App\Http\Controllers\Admin\Admincontroller; 
use App\Http\Controllers\Admin\serviceController;  
use App\Http\Controllers\Admin\positionController;  

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


 Route::get('/',[userController::class, 'index']);
 Route::get('/services',[userController::class, 'Service']);
 Route::get('/about',[userController::class, 'about']);
 Route::get('/career',[userController::class, 'career']);
  Route::get('/team',[userController::class, 'team']);
  Route::get('/contact',[userController::class, 'contact']);
   Route::get('/inquiry',[userController::class, 'inquiry']);
   Route::get('/gallary',[userController::class, 'gallary']);
   Route::post('/enquiriesfrom',[userController::class, 'enquiriesfrom']);
 Route::post('/contactusfrom',[userController::class, 'contactusfrom']);
 Route::post('/getquotefrom',[userController::class, 'getquotefrom']);
  Route::post('/getquotefrom1',[userController::class, 'getquotefrom1']);
 Route::post('/sendjobapplication',[userController::class, 'sendjobapplication']);
 Route::post('/employmentappliction',[userController::class, 'employmentappliction']);




/* Route::get('/',[userController::class, 'index']);

 Route::get('/domesticpackage',[userController::class, 'domestic']);
Route::get('/internationalpackage',[userController::class, 'international']);
Route::get('/gallary',[userController::class, 'gallary']);
Route::get('/search',[userController::class, 'search']);
 Route::get('/contact',[userController::class, 'contact']);
  Route::get('/packagedetail/{id}',[userController::class, 'packagedetail']);
 Route::post('/contactusfrom',[userController::class, 'contactusfrom']);
Route::post('/enquiriesfrom',[userController::class, 'enquiriesfrom']);
Route::get('/travel_search',[userController::class, 'travel_search']);*/




           ///////////   Admin view /////////////////////

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
Route::get('/updateadmindetail/{id}',[Admincontroller::class, 'updateadmindetail']);
Route::post('/storeadmindetail/{id}',[Admincontroller::class, 'storeadmindetail']);


Route::get('/addserviceview',[serviceController::class, 'addserviceview']);
Route::post('/storeservice',[serviceController::class, 'storeservice']);
Route::get('/deleteservice/{id}',[serviceController::class, 'deleteservice']);
Route::get('/updateservice/{id}',[serviceController::class, 'updateservice']);
Route::post('/storeupdateservice/{id}',[serviceController::class, 'storeupdateservice']);

Route::get('/addtestimonial',[Admincontroller::class, 'addtestimonial']);
Route::post('/storetestimonial',[Admincontroller::class, 'storetestimonial']);
Route::get('/deletetestimonial/{id}',[Admincontroller::class, 'deletetestimonial']);
Route::get('/updatetestimonial/{id}',[Admincontroller::class, 'updatetestimonial']);
Route::post('/storeupdatetestimonial/{id}',[Admincontroller::class, 'storeupdatetestimonial']);

Route::get('/addposition',[positionController::class, 'addpositionview']);
Route::post('/storeposition',[positionController::class, 'storeposition']);

Route::get('/deleteposition/{id}',[positionController::class, 'deleteposition']);
Route::get('/updateposition/{id}',[positionController::class, 'updateposition']);
Route::post('/storeupdateposition/{id}',[positionController::class, 'storeupdateposition']);

Route::get('/teamview',[Admincontroller::class, 'teamview']);
Route::post('/addteam',[Admincontroller::class, 'addteam']);
Route::get('/deletefaq/{id}',[Admincontroller::class, 'deletefaq']);
Route::get('/updatefaq/{id}',[Admincontroller::class, 'updatefaq']);
Route::post('/storeupdatefaq/{id}',[Admincontroller::class, 'storeupdatefaq']);

Route::get('/addfaqview',[Admincontroller::class, 'addfaqview']);
Route::post('/storefaq',[Admincontroller::class, 'storefaq']);
Route::get('/teamdelete/{id}',[Admincontroller::class, 'teamdelete']);
Route::get('/teamupdate/{id}',[Admincontroller::class, 'teamupdateview']);
Route::post('/storeupdateteam/{id}',[Admincontroller::class, 'storeupdateteam']);


Route::get('/addgallary',[Admincontroller::class, 'addgallary']);
Route::post('/storegallary',[Admincontroller::class,'storegallary']);
Route::get('/deleteimage/{id}',[Admincontroller::class, 'deleteimage']);
Route::get('/deletecontact/{id}',[Admincontroller::class, 'deletecontact']);
Route::get('/deleteenquiry/{id}',[Admincontroller::class, 'deleteenquiry']);

Route::get('/downloadpdf/{id}',[Admincontroller::class, 'downloadpdf']);
Route::get('/deletecareerinquiry/{id}',[Admincontroller::class,'deletecareerinquiry']);

Route::get('/deletequeto/{id}',[Admincontroller::class, 'deletequeto']);
Route::get('/deletequeto1/{id}',[Admincontroller::class, 'deletequeto1']);

Route::get('/viewInquiry/{id}',[Admincontroller::class, 'viewInquiry']);
Route::get('/viewInquiry2/{id}',[Admincontroller::class, 'viewInquiry2']);

Route::get('/addfeatures',[serviceController::class, 'addfeatures']);
Route::post('/storefeatures',[serviceController::class, 'storefeatures']);

Route::get('/deletefeatures/{id}',[serviceController::class, 'deletefeatures']);
Route::get('/updatefeatures/{id}',[serviceController::class, 'updatefeatures']);
Route::post('/storeupdatefeatures/{id}',[serviceController::class, 'storeupdatefeatures']);

Route::get('/updatebanner/{id}',[Admincontroller::class, 'updatebanner']);
Route::get('/test/{id}',[Admincontroller::class, 'updatebanner']);

Route::post('/storeupdatebanner/{id}',[Admincontroller::class, 'storeupdatebanner']);

Route::get('/updatehistory/{id}',[Admincontroller::class, 'updatehistory']);
Route::post('/storeupdatehistory/{id}',[Admincontroller::class, 'storeupdatehistory']);


Route::get('/addbenifits',[positionController::class, 'addbenifitsview']);
Route::post('/storebenifits',[positionController::class, 'storebenifits']);
Route::get('/deletebenifits/{id}',[positionController::class, 'deletebenifits']);
Route::get('/updatebenifits/{id}',[positionController::class, 'updatebenifits']);
Route::post('/storeupdatebenifits/{id}',[positionController::class, 'storeupdatebenifits']);

Route::get('/updatemission/{id}',[serviceController::class,'updatemission']);
Route::post('/storeupdatemission/{id}',[serviceController::class,'storeupdatemission']);

Route::get('/updatewhychooseus/{id}',[serviceController::class,'updatewhychooseus']);
Route::post('/storeupdatewhychooseus/{id}',[serviceController::class,'storeupdatewhychooseus']);

Route::get('/updatebannerimg/{id}',[Admincontroller::class,'updatebannerimg']);
Route::post('/storeupdatebannerimg/{id}',[Admincontroller::class,'storeupdatebannerimg']);

Route::get('/updateinquirycontent/{id}',[serviceController::class,'updateinquirycontent']);
Route::post('/storeinquirycontent/{id}',[serviceController::class,'storeinquirycontent']);

Route::get('/update_we_are_hiring/{id}',[serviceController::class,'update_we_are_hiring']);
Route::post('/store_we_are_hiring/{id}',[serviceController::class,'store_we_are_hiring']);

Route::get('/addhomebanner',[Admincontroller::class,'addhomebanner']);
Route::post('/storehomebanner',[Admincontroller::class,'storehomebanner']);
Route::get('/deletemaintitle/{id}',[Admincontroller::class,'deletemaintitle']);

Route::get('/deletehomebannerdata/{id}',[Admincontroller::class, 'deletehomebanner']);

Route::get('/viewapplication/{id}',[Admincontroller::class, 'viewapplication']);

Route::get('/deleteapplication/{id}',[Admincontroller::class, 'deleteapplication']);

Route::get('/footer_about/{id}',[Admincontroller::class,'footer_about']);
Route::post('/store_footer_about/{id}',[Admincontroller::class,'store_footer_about']);









 }); 

