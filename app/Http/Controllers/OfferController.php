<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Service_Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class OfferController extends Controller
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
        $order = Service_Order::find($id);
        return view('pages/create_offer_ToService', ['order' => $order]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        
        $user_id = Auth::id();
        $offers = Offer::where('user_id', $user_id)->get();
        $order_id = $request->input('service_order_id');
        $order = Service_Order::find($order_id);
        Offer::create([
            'user_id' => $user_id,
            'service_order_id' => $order_id,
            'offer_cost' => $request->offer_cost,
            'offer_status' => $request->input('offer_status', 0),
            'offer_desc' => $request->offer_desc,
            'duration_work' => $request->duration_work,
        ]);
        return view('pages/my_offers', ['order' => $order,'offers'=>$offers])->with('success', 'لقد تم تقديم العرض بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function offersBy_orderId($id)
    {
        $offers = Offer::where('service_order_id', $id)->get();
        $order = Service_Order::find($id);
        return view('pages/show_offers', compact('offers', 'order'));
    }


    public function accept_offer($id)
    {
        $userID = Auth::id();
        $offer = Offer::find($id);
        $serviceProvider = $offer->service_order->user_id;
        $order = Service_Order::find($offer->service_order_id);
        $offers = Offer::where('service_order_id', $offer->service_order_id)->get();

        if ($userID == $serviceProvider) {
            $offer->update([
                'offer_status' => 1,
            ]);


        } else {
            'غير مصرح لك بالوصول لهذه الصفحة';
        }
        return view('pages/show_offers', compact('order', 'offers'))->with('success', 'تم قبول العرض بنجاح');
    }
    /*  if ($userID == $serviceProvider) {
                dd('تم  القبول');
            }else{
                dd('غير مصرح لك  بالوصول لهذه الصفحة');
            }* */


    public function reject_offer($id)
    {
        $userID = Auth::id();
        $offer = Offer::find($id);
        $serviceProvider = $offer->service_order->user_id;
        $order = Service_Order::find($offer->service_order_id);
        $offers = Offer::where('service_order_id', $offer->service_order_id)->get();

        if ($userID == $serviceProvider) {
            $offer->update([
                'offer_status' => 2,
            ]);


        } else {
            'غير مصرح لك بالوصول لهذه الصفحة';
        }
        return view('pages/show_offers', compact('order', 'offers'))->with('success', 'تم قبول العرض بنجاح');
    }






    public function My_offers(Request $request, Offer $offer)
    {
        $userID = Auth::id();
        $offers = Offer::where('user_id', $userID)->get();
 
        //$order = Service_Order::find();
        return view('pages/my_offers',compact('offers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function showUserById($id)
    {
        $userid=$id;
        $user=User::find($id);
        $projects=Offer::where('user_id',$userid)
        ->where('offer_status',1)->get();
        return view('pages/portfoilo',compact('projects','user'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
        //
    }
}
