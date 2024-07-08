<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Offer;
use App\Models\Service_Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $offer = Offer::find($id);
        $offerId = $offer->id;
        return view('pages/reviewing_page', ['offer_id' => $offerId,'offer'=>$offer]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = Auth::id();
        $offer = Offer::find($request->offer_id);
        $serviceProvider = $offer->service_order->user_id;
        $order = Service_Order::find($offer->service_order_id);
        if ($userId == $serviceProvider && $offer->offer_status == 1) {
            Review::create([
                'user_id' => $userId,
                'provider_id' => $offer->user_id,
                'rating' => request()->input('rating'),
                'comment' => request()->input('comment'),
                'offer_id'=>$offer->id,
            ]);

        } else {
            'غير مصرح لك بالوصول لهذه الصفحة';
        }

        $offers = Offer::where('service_order_id', $offer->service_order_id)->get();
        return view('pages/show_offers', compact('order', 'offers'))->with('success', 'تم التقييم بنجاح');
        //  التاكد من انه صاحب الطلب وانه قام بقبول العرض قبل التقييم 
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
