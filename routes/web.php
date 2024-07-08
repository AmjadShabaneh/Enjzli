<?php

use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectGalleryController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceOrderController;
use App\Models\City;
use App\Models\Service;
use App\Models\Service_Order;
use Illuminate\Support\Facades\Route;



/**------------------------------------------------------- */







Route::get('portfoilo/{id}', [OfferController::class, 'showUserById']);
Route::get('/userById/{id}', [SearchController::class, 'UserByID']);

Route::get('profile-2', function () {
    $user = request()->get('user_id');
    if (!$user) {

        return redirect('search'); //redirect('route-name');
    }
    return view('pages/profile-2', );
});

Route::get('/search', [SearchController::class, 'create_serach']);



Route::get('/', function () {
    return view('pages/welcome');
});



Route::get('/search_orders', [ServiceOrderController::class, 'search_Order_show']);







/**------------------------------------------------------- */

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/ProjectGallery', [ProjectGalleryController::class, 'store'])->name('ProjectGallery.store');
    Route::post('/service_order_store', [ServiceOrderController::class, 'store']);
    Route::post('/create_OfferTo_order', [OfferController::class, 'store']);
    Route::get('/create_offer/{service_order_id}', [OfferController::class, 'create']);
    Route::get('/create_order', [ServiceOrderController::class, 'create'])->name("create_order");
    Route::get('/my_orders',[ServiceOrderController::class,'Show_MyOrders'])->name("my_orders");
    Route::get('/show_offers/{service_order_id}',[OfferController::class,'offersBy_orderId']);
    Route::get('/accept_offer/{offerId}',[OfferController::class,'accept_offer']);
    Route::get('/reject_offer/{offerId}',[OfferController::class,'reject_offer']);
    Route::post('/reviewing_offer',[ReviewController::class,'store']);
    Route::get('/reviewing_page/{offer_id}',[ReviewController::class,'create']);
    Route::get('/my_offers',[OfferController::class,'My_offers']);
    Route::get('/show_orders/{id}',[ServiceOrderController::class,'show_ordersById']);
    
    
   

    Route::get("create_portfoilo", function () {
        $services = Service::get();
        return view("pages/createPortfoilo", compact('services'));
    });


    





});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__ . '/auth.php';

// Not found Page
Route::fallback(function () {
    return view('notfound');
});


