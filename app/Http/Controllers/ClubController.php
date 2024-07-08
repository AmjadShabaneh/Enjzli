<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Subscription;
use App\Models\Note;
use App\Models\Customer;
use App\Models\Weight;
use App\Models\FoodSystem;
use App\Models\Training;
use Carbon\Carbon;

use DateTime;


class ClubController extends Controller
{
    public function show_login(){
        return view('user.login');
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');
    
        if (Auth::guard('club')->attempt($credentials)) {
            $clubID = Auth::guard('club')->id();
            $subscription = Subscription::where('club_id', $clubID)->first();
    
            if ($subscription) {
                $current_date = new DateTime();
                $expiry_date = new DateTime($subscription->expiry_date);
    
                if ($expiry_date >= $current_date) {
                    $request->session()->regenerate();
                    return redirect()->route('club.dashboard');
                } else {
                    Auth::guard('club')->logout();
                    return redirect()->route('club.login')->with('error', 'Your subscription has expired');
                }
            } else {
                Auth::guard('club')->logout();
                return redirect()->route('club.login')->with('error', 'No subscription found for this club');
            }
        }
    
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    


    public function dashboard(){
        if(Auth::guard('club')->check()){
            $clubID = Auth::guard('club')->id();
            $club = Club::where('id', $clubID)->first();
            //get 20 notes
            $notes = Note::where('club_id', $clubID)->orderBy('created_at', 'desc')->take(20)->get();
            //get 20 customers
            $customers = Customer::where('club_id', $clubID)->orderBy('created_at','desc')->take(20)->get();
            
           return view('user.dashboard',['club'=>$club,'customers'=>$customers,'notes'=>$notes]);  
        }else{
            return redirect()->route('club.show_login');
        }
       
    }
    public function show_notes(){
        if(Auth::guard('club')->check()){
            $clubID = Auth::guard('club')->id();
            $club = Club::where('id', $clubID)->first();
            $notes = Note::where('club_id', $clubID)->get();
            return view('user.notes',['club'=>$club,'notes'=>$notes]);
           
            }else{
                return redirect()->route('club.show_login');
             }


    }
    public function store_note(){
        if(Auth::guard('club')->check()){
            $clubID = Auth::guard('club')->id();
            $club = Club::where('id', $clubID)->first();
            $note = new Note();
            $note->club_id = $clubID;
            $note->title = request('title');
            $note->content=request('content');
            $note->save();
            return redirect()->route('club.show_notes');
        }else{
            return redirect()->route('club.show_login');
        }

    }

    public function delete_note($id){

        if(Auth::guard('club')->check()){
            $clubID = Auth::guard('club')->id();
            $club = Club::where('id', $clubID)->first();
            $note = Note::where('id', $id)->first();
            $note->delete();
            return redirect()->route('club.show_notes');
    }else{
        return redirect()->route('club.show_login');
    }
}
public function show_customers(){
    if(Auth::guard('club')->check()){
        $clubID = Auth::guard('club')->id();
        $club = Club::where('id', $clubID)->first();
     
       
        $customers = Customer::where('club_id', $clubID)
                         ->with(['weights' => function ($query) {
                             $query->orderBy('created_at', 'desc')->limit(1);
                         }])
                         ->get();
                         foreach ($customers as $customer) {
                            $expiryDate = Carbon::parse($customer->sub_expiry_date);
                            $currentDate = Carbon::now();
                            $daysLeft = $currentDate->diffInDays($expiryDate, false);
                            $customer->days_left = round($daysLeft); // Round the value to the nearest whole number
                        }
        
        return view(' user\coustmers',['club'=>$club,'customers'=>$customers]);
    }
        else{
            return redirect()->route('club.show_login');
        }
}

public function customer_index(){
    if(Auth::guard('club')->check()){
        $clubID = Auth::guard('club')->id();
        $club = Club::where('id', $clubID)->first();
        return view('user.add-coustmers',['club'=>$club]);
    }else{
        return redirect()->route('club.show_login');
    }
}


public function store_customer(Request $request)
{
    if (Auth::guard('club')->check()) {
        $clubID = Auth::guard('club')->id();
        DB::beginTransaction();
       
            $imageName = null;
            if ($request->hasFile('photo')) {
                
                $image = $request->file('photo');
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('storage/customers/'), $imageName);
               
            }
            $gender;
            if($request->gender=='true'){
                $gender = true;
            }else{
                $gender = false;
            }
            $customer = new Customer;
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->password = Hash::make($request->password);
            $customer->phone = $request->phone;
            $customer->photo = $imageName;
            $customer->height = $request->height;
            $customer->birth_date = $request->birth_date; 
            $customer->gender = $gender;
            $customer->notes = $request->notes;
            $customer->club_id = $clubID;
            $customer->trainer_name = $request->trainer_name;
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
            $customer->sub_expiry_date= $newExpiry_date;
            $customer->join_date=Carbon::now();
            $customer->save();

            $weight = new Weight;
            $weight->weight = $request->weight;
            $weight->customer_id = $customer->id;
            $weight->save();
            DB::commit();
            return redirect()->route('club.show_customers');
       
    } else {
        return redirect()->route('club.show_login');
    }
}



public function update_customer(Request $request)
{
    if (Auth::guard('club')->check()) {
        // Validate the incoming request data
        $request->validate([
            'id' => 'required|exists:customers,id',
            'name' => 'required|string|max:255',
            'trainer_name' => 'nullable|string|max:255',
            'birth_date' => 'required|date',
            'gender' => 'required|in:true,false',
            'height' => 'required|integer',
            'weight' => 'required|integer',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'notes' => 'nullable|string|max:255',
            'ProfilePic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Retrieve the customer by ID
        $customer = Customer::findOrFail($request->id);

        // Update customer information
        $customer->name = $request->name;
        $customer->trainer_name = $request->trainer_name;
        $customer->birth_date = $request->birth_date;
        $customer->gender = $request->gender === 'true' ? 1 : 0;
        $customer->height = $request->height;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->notes = $request->notes;

        // Handle profile picture upload if provided
        $imageName=null;
        if ($request->hasFile('ProfilePic')) {
            $image = $request->file('photo');
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('storage/customers/'), $imageName);
                $customer->photo =$imageName;
        }

        // Save the customer information
        $customer->save();

        // Check if the weight has changed
        $latestWeight = $customer->weights()->orderBy('created_at', 'desc')->first();
        if (!$latestWeight || $latestWeight->weight != $request->weight) {
            // Update the weight
            $weight = new Weight();
            $weight->customer_id = $customer->id;
            $weight->weight = $request->weight;
            $weight->save();
        }

        // Redirect back with a success message
        return redirect()->route('club.show_customers')->with('success', 'Customer updated successfully.');
    } else {
        return redirect()->route('club.show_login');
    }
}

public function programs($id){
    if(Auth::guard('club')->check()){
       $clubID=Auth::guard('club')->id();
       $club=Club::find($clubID);
        return view('user.programs',['id'=>$id,'club'=>$club]);
 
    }else{
        return redirect()->route('club.show_login');
    }
   
}

public function food_program($id){
    if(Auth::guard('club')->check()){

        $clubID=Auth::guard('club')->id();
        $club=Club::find($clubID);
        return view('user.food-program',['club'=>$club,'id'=>$id]);
        }else{
            return redirect()->route('club.show_login');
            }
}

public function store_food_program(Request $request) {
    if (Auth::guard('club')->check()) {
        $clubID = Auth::guard('club')->id();
        $club = DB::table('clubs')->where('id', $clubID)->first();

        if (Hash::check($request->password, $club->password)) {
            $date = Carbon::now();  // Get the current date and time

            $data = [
                'customer_id' => $request->id,
                'goal' => $request->goal,
                'date' => $date,  // Save the current date
            ];

            if ($request->hasFile('photo')) {
                $image = $request->file('photo');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('storage/customers/food_system/'), $imageName);
                $data['photo'] = $imageName;
            }

            DB::table('food_systems')->insert($data);

            return redirect()->route('club.show_customers')->with('success', 'Food System updated successfully');
        } else {
            return redirect()->back()->with('error', 'Password is incorrect');
        }
    } else {
        return redirect()->route('club.show_login');
    }
}
public function training_program($id){
    if(Auth::guard('club')->check()){

        $clubID=Auth::guard('club')->id();
        $club=Club::find($clubID);
        return view('user.train-program',['club'=>$club,'id'=>$id]);
        }else{
            return redirect()->route('club.show_login');
            }
}

public function store_training_program(Request $request) {
    if (Auth::guard('club')->check()) {
        $clubID = Auth::guard('club')->id();
        $club = Club::find($clubID);

        if (Hash::check($request->password, $club->password)) {
            $date = Carbon::now();  // Get the current date and time

            $training = new Training();
            $training->customer_id = $request->id;
            $training->goal = $request->goal;
            $training->date = $date;  // Save the current date

            if ($request->hasFile('photo')) {
                $image = $request->file('photo');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('storage/customers/training/'), $imageName);
                $training->photo = $imageName;
            }

            $training->save();

            return redirect()->route('club.show_customers')->with('success', 'Training program updated successfully');
        } else {
            return redirect()->back()->with('error', 'Password is incorrect');
        }
    } else {
        return redirect()->route('club.show_login');
    }
}
// logout method
public function logout() {
    if (Auth::guard('club')->check()) {
        Auth::guard('club')->logout();
        return redirect()->route('club.show_login');
        } else {
            return redirect()->route('club.show_login');
            }
    }
public function sub_date($id){
    if (Auth::guard('club')->check()) {
        $clubID=Auth::guard('club')->id();
        $club=Club::find($clubID);
        return view('user.sub-date',['club'=>$club,'id'=>$id]);
    }else{
        return redirect()->route('club.show_login');
    }
}
public function sub_date_store(Request $request){
    if (Auth::guard('club')->check()) {
        $clubID=Auth::guard('club')->id();
        $club=Club::find($clubID);
        $customer=Customer::find($request->id)->first();
        $expiry_date = $customer->sub_expiry_date;
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
        $customer->update(['sub_expiry_date' => $newExpiry_date]);
        return redirect()->route('club.show_customers');
    }
    else{
        return redirect()->route('club.show_login');
    }
} 
}
