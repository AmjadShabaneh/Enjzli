<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Models\Service_Order;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_serach()
    {

        $cities = City::get();
        $services = Service::get();
        $selectedService = request()->get('service_id');
        $seletedCity = request()->get('city_id');
        $users = User::where('city_id', $seletedCity)->whereHas('user_services', function ($query) use ($selectedService) {
            $query->where('service_id', $selectedService);
        })->get();

        return view('pages/search', compact('cities', 'services', 'users'));
    }

    public function UserByID($id)
    {
        $user = User::find($id);

        return view('pages/profile-2', compact('user'));



    }

 /*   public function searchUsersByCity($id)
    {
        $cities = City::get();
        $services = Service::get();
        $users = User::where('city_id', $id)->get();
        //dd($users);
        return view('pages/users', compact('cities', 'services', 'users'));
    }**/


    public function search_Orders(Request $request)
    {
        $cities = City::get();
        $services = Service::get();
        $serviceId = $request->get('service_id');
        $city_id = $request->get('city_id');

        $orders = Service_Order::where('service_id', $serviceId)
            ->where('city_id', $city_id)
            ->where('order_status', 0)->get();
       // dd($orders);
      return view('pages/search_orders', compact('cities','services','orders'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /*  
        $users=User::whereHas('user_services',function ($query)use ($selectedService){
          $query->where('service_id',$selectedService);
      })->get();




   $users = User::where('city_id', request()->city_id)->get();
      $filteredUsers=[];
      foreach($users as $user){
          foreach($user->user_services as $user_service){
              if ($user_service->service->id == request()->service_id) {
                  $filteredUsers[]=$user;
                  break; 
              }
          }
      }**/
    //dd($users);

    //$users->filter(function($user) );
    // إذا تم تحديد خدمة، قم بفرز المستخدمين الذين يقدمون هذه الخدمة
    /* if (request()->has('service_id')) {
           $service_id = request()->service_id;
           $users = $users->filter(function ($user) use ($service_id) {
               return $user->user_services->contains('service_id', $service_id);
           });
       }
       * */

    /* $users=User::where('city_id',request()->city_id);
     $users->user_services->service->service_id->where('service_id',request()->service_id)-> paginate(4);
     * */
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
