<?php

namespace App\Http\Controllers;

use App\Models\Project_Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProjectGalleryController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $UserID = Auth::id();
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/projects_images/'), $imageName);
        }

        Project_Gallery::create([
            'user_id' => $UserID,
            'service_id' => $request->service_id,
            'image' => $imageName,
            'work_desc' => $request->work_desc,
            'completion_date' => $request->completion_date,
        ]);
    
        return redirect()->back()->with('success', 'تمت العملية بنجاح');
    }

    public function showUserById($id)
    {
        $user = User::find($id);

        return view('pages/portfoilo', compact('user'));
    }
    /**
     * Display the specified resource.
     */
    public function show(Project_Gallery $project_Gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project_Gallery $project_Gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project_Gallery $project_Gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project_Gallery $project_Gallery)
    {
        //
    }
}
