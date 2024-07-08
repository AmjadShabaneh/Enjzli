<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControlloer;
use App\Http\Controllers\ClubController;
//final routes

//admin Routes
Route::get('/admin/show_signup' , [AdminControlloer::class ,'showSignup'])->name('adminSignup');

Route::post('/admin/signup',[AdminControlloer::class,"admin_signup"])->name('admin.signup');

Route::get('/admin/loggedin',[AdminControlloer::class,"loggedIn"])->name('admin.dashboard');

Route::get('admin/show_login',[AdminControlloer::class,'show_login'])->name('adminLogin');

Route::post('admin/login',[AdminControlloer::class,'login'])->name('admin.login');

Route::post('admin/logout', [AdminControlloer::class, 'logout'])->name('admin.logout');

Route::get('admin/add_club',[AdminControlloer::class,'add_club'])->name('admin.add_club');

Route::post('admin/store_club',[AdminControlloer::class,'store_club'])->name('admin.store_club');

Route::get('admin/update_sub',[AdminControlloer::class,'update_sub'])->name('admin.update_sub');

Route::put('admin/store_update',[AdminControlloer::class,'store_update'])->name('admin.store_update');

Route::get('/admin/show_clubs' , [AdminControlloer::class ,'show_clubs'])->name('admin.show_clubs');

Route::put('/admin/update_club',[AdminControlloer::class ,'update_club'])->name('admin.update_club');




//Club Routes

Route::get('club/show_login',[ClubController::class,'show_login'])->name('club.show_login');

Route::post('club/login',[ClubController::class,'login'])->name('club.login');

Route::get('club/dashboard',[ClubController::class,'dashboard'])->name('club.dashboard');

Route::get('club/show_notes',[ClubController::class,'show_notes'])->name('club.show_notes');

Route::post('club/store_note',[ClubController::class,'store_note'])->name('club.store_note');

Route::delete('club/delete_note/{id}',[ClubController::class,'delete_note'])->name('club.delete_note');

Route::get('club/show_customers',[ClubController::class,'show_customers'])->name('club.show_customers');

Route::get('club/customer_index',[ClubController::class,'customer_index'])->name('club.customer_index');

Route::post('club/store_customer',[ClubController::class,'store_customer'])->name('club.store_customer');

Route::put('club/update_customer',[ClubController::class,'update_customer'])->name('club.update_customer');

Route::get('club/programs/{id}',[ClubController::class,'programs'])->name('club.programs');

Route::get('club/food_program/{id}',[ClubController::class,'food_program'])->name('club.food_program');

Route::post('club/store_food_program',[ClubController::class,'store_food_program'])->name('club.store_food_program');

Route::get('club/training_program/{id}',[ClubController::class,'training_program'])->name('club.training_program');

Route::post('club/store_training_program',[ClubController::class,'store_training_program'])->name('club.store_training_program');

Route::get('club/logout',[ClubController::class,'logout'])->name('club.logout');

Route::get('club/sub-date/{id}',[ClubController::class,'sub_date'])->name('club.sub_date');

Route::put('club/store_sub_date',[ClubController::class,'sub_date_store'])->name('club.store_sub_date');


//end of final routes




          


                /* User Pages */
Route::get('log-in', function () {
    return view('user/login');
});

