<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Country;
use App\Models\Subscription;
use App\Models\Owner;
use App\Models\Club;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use DateTime;



class AdminControlloer extends Controller
{
    public function showSignup(){
        return view('admin.createadmin');
    }
    public function admin_signup(Request $request)
    {
        // Validate input data
       
    
    
        // Handle the file upload
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('storage/admin/'), $imageName);
        } else {
            return redirect()->back()
                             ->withErrors(['photo' => 'Photo upload failed.'])
                             ->withInput();
        }
    
        // Create a new admin user
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->photo = asset('storage/admin/' . $imageName);
        $admin->password = Hash::make($request->password);
        $admin->save();
    
        return redirect()->route('adminLogin')->with('success', 'Admin registered successfully!');
    }
    
    public function loggedIn()
{
    if (auth()->guard('admin')->check()) {
        $admin = auth()->guard('admin')->user();
        return view('admin.homepage', ['admin' => $admin]);
    } else {
        return redirect()->route('adminLogin');
    }
}

    public function show_login(){

        return view('admin.login');
    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::guard('admin')->attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('admin.dashboard');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}


    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('adminLogin');
    }

    public function add_club(){
        if(auth()->guard('admin')->check()){
            $countries=Country::get();
            $adminID=Auth::guard('admin')->id();
            $admin=Admin::find($adminID);
           return view('admin.newgym',["countries"=>$countries,'admin'=>$admin]); 
        }
        else{
            return redirect()->route('adminLogin');
        }
        
    }



   

    public function store_club(Request $request)
    { 
       
        // Validate incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'photo' => 'nullable|image',
            'country' => 'required|',
            'owner_name' => 'required|string',
            'owner_email' => 'required|email',
            'owner_phone' => 'required|string',
            'dur' => 'required',
            'type' => 'required|string',
        ]);
       
        // Start a database transaction
        DB::beginTransaction();
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time(). '.'. $image->extension();
            $image->move(public_path('storage/club/'), $imageName);
        }
        $expiry_date = new DateTime();
        // Initialize the new expiry date variable
        $newExpiry_date = null;
        // Modify the date based on the duration in the request
        if ($request->dur == 1) {
            $expiry_date->modify('+1 month');
            $newExpiry_date = $expiry_date->format('Y-m-d');
        } elseif ($request->dur == 2) {
            $expiry_date->modify('+3 months');
            $newExpiry_date = $expiry_date->format('Y-m-d');
        } elseif ($request->dur == 3) {
            $expiry_date->modify('+6 months');
            $newExpiry_date = $expiry_date->format('Y-m-d');
        } elseif ($request->dur == 4) {
            $expiry_date->modify('+12 months');
            $newExpiry_date = $expiry_date->format('Y-m-d');
        }
    
        
            // Create owner
            $ownerId = DB::table('owners')->insertGetId([
                'name' => $validatedData['owner_name'],
                'email' => $validatedData['owner_email'],
                'phone' => $validatedData['owner_phone'],
            ]);
    
            // Create club
            $clubId = DB::table('clubs')->insertGetId([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'address' => $validatedData['address'],
                'phone' => $validatedData['phone'],
                'country_id' => $validatedData['country'],
                'owner_id' => $ownerId,
                // Assuming you handle photo upload separately
                'photo' => asset('storage/club/'. $imageName)
            ]);
    
            // Create subscription
            DB::table('subscriptions')->insert([
                'club_id' => $clubId,
                'expiry_date' => $newExpiry_date,
                'type' => $validatedData['type'],
            ]);
    
            // Commit the transaction
            DB::commit();
    
            // Redirect or respond with success message
            return redirect()->route('admin.dashboard');
        
    }
    

    public function update_sub(){
        if(auth()->guard('admin')->check()){

            $adminID=Auth::guard('admin')->id();
            $admin=Admin::find($adminID);
            $clubs=Club::get();
            return view('admin.sub',['admin'=>$admin,'clubs'=>$clubs]);
           
        }else{
            return redirect()->route('adminLogin');
        }
        
    }
    public function store_update(Request $request){
        if(auth()->guard('admin')->check()){
            $sub = Subscription::where('club_id', $request->club_id)->first();
            
            // Assuming $sub is fetched correctly from the database
    
            $expiry_date = $sub->expiry_date;
            $newExpiry_date = null; // Initialize the new expiry date variable
    
            // Modify the date based on the duration in the request
            if ($request->dur == 1) {
                $newExpiry_date = date('Y-m-d', strtotime($expiry_date . ' + 1 months'));
            } elseif ($request->dur == 2) {
                $newExpiry_date = date('Y-m-d', strtotime($expiry_date . ' + 3 months'));
            } elseif ($request->dur == 3) {
                $newExpiry_date = date('Y-m-d', strtotime($expiry_date . ' + 6 months'));
            } elseif ($request->dur == 4) {
                $newExpiry_date = date('Y-m-d', strtotime($expiry_date . ' + 12 months'));
            }
    
            // Update the expiry date in the subscription table
            $sub->update(['expiry_date' => $newExpiry_date]);
            
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('adminLogin');
        }
    }
    public function show_clubs(){
        if(auth()->guard('admin')->check()){
        
            $adminID=Auth::guard('admin')->id();
            $admin=Admin::find($adminID);
            $clubs = Club::with(['country', 'subscription','Owner'])->get();
            foreach ($clubs as $c) {
                $expiryDate = Carbon::parse($c->subscription->expiry_date);
                $currentDate = Carbon::now();
                $daysLeft = $currentDate->diffInDays($expiryDate, false);
                $c->days_left = round($daysLeft); // Round the value to the nearest whole number
            }
            $countries=Country::get();
            return view('admin.management',['clubs'=>$clubs,'admin'=>$admin,'countries'=>$countries]);
            }else{
                return redirect()->route('adminLogin');
                }

    }
    public function update_club(Request $request) {
        if (auth()->guard('admin')->check()) {
            
            $adminID = Auth::guard('admin')->id();
            $admin = Admin::find($adminID);
            
            $club_id = $request->input('id');
            $club = Club::find($club_id);
            
            $club->name = $request->name;
            $club->address = $request->address;
            $club->country_id = $request->country;
            $club->phone = $request->phone;
            $club->email = $request->email;
            $club->password = Hash::make($request->input('password')); // Encrypt the password before saving
            
            $imageName = null;
            if ($request->hasFile('ProfilePic')) {
                $image = $request->file('ProfilePic');
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('storage/club/'), $imageName);
                $club->photo = $imageName;
            }
            
            // Updating the owner's information
            $owner = $club->owner;
            $owner->name = $request->owner_name;
            $owner->email = $request->owner_email;
            $owner->phone = $request->owner_phone;
            $owner->save();
            
            // Updating the subscription type
            $sub = $club->subscription;
            $sub->type = $request->plan;
            $sub->save;
            
            $club->save();
            return redirect()->route('admin.show_clubs');
        } else {
            return redirect()->route('adminLogin');
        }
    }
    
    
}
