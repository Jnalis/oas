<?php

namespace App\Http\Controllers;

use App\Models\ApplicationType;
use App\Models\Campuses;
use App\Models\LocationNACTE;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Starts to load admin view
    public function index()
    {
        // return 'test';
        $application_type = ApplicationType::all();
        $campuses = Campuses::all();
        return view('admin.index', compact('application_type', 'campuses'));
    }

    // Method for LOGOUT
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Successfully Logout',
            'alert-type' => 'info',
        );

        return redirect('/login')->with($notification);
    } // END METHOD


    // View Profile Method
    public function profile()
    {

        $id = Auth::user()->id;
        $adminData = User::find($id);

        return view('admin.admin_profile_view', compact('adminData'));
    } // End Method

    //Edit profile method
    public function edit_profile()
    {

        $id = Auth::user()->id;
        $editData = User::find($id);

        return view('admin.admin_edit_profile', compact('editData'));
    } //End method


    // Update profile
    public function update_profile(Request $request)
    {

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;

        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');

            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);

            $data['profile_image'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.view_profile')->with($notification);
    } //End Method


    // Starts change password method
    public function change_password()
    {

        return view('admin.admin_change_password');
    }
    //Edn method

    // Starts update password method
    public function update_password(Request $request)
    {

        $validateData = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ]);

        $hashedPassword = Auth::user()->password;

        if (Hash::check($request->old_password, $hashedPassword)) {

            $users = User::find(Auth::id());
            $users->password = bcrypt($request->new_password);
            $users->save();

            session()->flash('message', 'Password Updated Successfully');

            return redirect()->back();
        } else {
            session()->flash('message', 'Old Password Mis Match');

            return redirect()->back();
        }
    }
    //Edn method

}