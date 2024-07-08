<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\User;
use App\Models\User_service;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Service;
use Illuminate\Http\UploadedFile;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $cities = City::get();
        $services = Service::get();
        return view('auth.register', compact('services', 'cities'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'city_id' => ['required'],
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'service_id'=>'max:4',
        ]);


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/users_images/'), $imageName);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'user_type' => $request->input('user_type','customer'),
            'city_id' => $request->city_id,
            'address' => $request->address,
            'image' => $imageName,
           
        ]);




        $services = $request->input('services');
        if ($services) {
            foreach ($services as $service) {
                User_service::create([
                    'user_id' => $user->id,
                    'service_id' => $service,
                ]);
            }
        }

        // dd($request->all());
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
