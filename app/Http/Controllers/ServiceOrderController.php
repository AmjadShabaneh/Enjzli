<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Service_Order;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Offer;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ServiceOrderController extends Controller
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
    public function create()
    {
        $cities = City::get();
        $services = Service::get();
        return view('pages/createOrder', compact('services', 'cities'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();
        Service_Order::create([
            'user_id' => $user_id,
            'service_id' => $request->service_id,
            'city_id' => $request->city_id,
            'order_desc' => $request->order_desc,
            'order_status' => $request->order_status, // مكتمل او غير مكتمل
            'date_service' => Carbon::now(), //تاريخ النشر
            'duration_work' => $request->duration_work,
        ]);
        return redirect()->back()->with('success', 'تمت اضافة الطلب بنجاح');
    }

    public function search_Order_show(Request $request)
    {
        $cities = City::get();
        $services = Service::get();
        $serviceId = $request->get('service_id');
        $city_id = $request->get('city_id');

        $orders = Service_Order::where('service_id', $serviceId)
            ->where('city_id', $city_id)
            ->where('order_status', 0)->get();
        return view('pages/search_orders', compact('services', 'cities', 'orders'));
    }


    /**
     * Display the specified resource.
     */
    public function Show_MyOrders(Request $request)
    {
        $userId = Auth::id();
        $myorders = Service_Order::where('user_id', $userId)->get();
        return view('pages/myOrders', ['orders' => $myorders]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function show_ordersById($id)
    {
        $offer = Offer::find($id);
        $order = Service_Order::find($offer->service_order_id);
        return view('pages/show_orders', compact('offer', 'order'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service_Order $service_Order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service_Order $service_Order)
    {
        //
    }
}
