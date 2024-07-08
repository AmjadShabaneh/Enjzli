<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\City;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User_service;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'cities' => City::get(),
            'services' => Service::get(),
            'user' => $request->user(),
            'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
            'status' => session('status'),
        ]);
    }
 
    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user=$request->user();
        $request->user()->fill($request->validated());
        // dd($request->user());
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        $user->user_services()->sync($request->service_id);
        
        

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');

    }
  
       /*$services = $request->input('services');
        if ($services) {
            foreach ($services as $service) {
               $userService= User_service::where([
                    'user_id' => $request->user()->id,
                    'service_id' => $service,
                ])->first();
                if($userService){
                    $userService->update([
                        'user_id' => $request->user()->id,
                        'service_id' => $service,
                    ]);
                }
            }
            
        }
        * */ 
    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
