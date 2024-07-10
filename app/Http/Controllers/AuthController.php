<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
use Str;

class AuthController extends Controller
{
    // Login
    public function login()
    {
        $data['meta_title'] = 'Login';
        return view('auth.login', $data);
    }

    public function login_post(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], true))
        {
            if(Auth::user()->is_role == 1)
            {
                return redirect()->intended('admin/dashboard');
            } else
            {
                return redirect('/')->with('error', 'Admin Not Available');
            }
        } else {
            return redirect()->back()->with('error', 'Please enter the correct credentials');  
        }
    }

    // Register
    public function register()
    {
        $data['meta_title'] = 'Register';
        return view('auth.register', $data);
    }

    public function register_post(Request $request)
    {
        $InsertData = request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6'
        ]);
        $InsertData = new User;
        $InsertData->name               = trim($request->name);
        $InsertData->email              = trim($request->email);
        $InsertData->password           = Hash::make($request->password);
        $InsertData->remember_token     = Str::random(50);
        $InsertData->save();
        return redirect('/')->with('success', 'Registration hasbeen created successfully');
    }

    // Forgot-Password
    public function forgot_password()
    {
        $data['meta_title'] = 'Forgot-Password';
        return view('auth.forgot_password', $data);
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect(url('/'));
    }

    // User List
    public function users_list()
    {
        $data['getRecord'] = User::getAllRecord();
        return view('admin.users.list', $data);
    }

    public function users_edit($id)
    {
        $data['getRecord'] = User::getSingle($id);
        return view('admin.users.edit', $data);
    }

    public function users_update($id, Request $request)
    {
        $UpdateData = User::getSingle($id);
        $UpdateData->name       = trim($request->name);
        $UpdateData->email      = trim($request->email);
        $UpdateData->is_role    = trim($request->is_role);
        $UpdateData->password   = Hash::make($request->password);
        $UpdateData->save();
        return redirect('admin/users')->with('success', 'User Data Update Successfully');
    }

    public function users_trash($id)
    {
        $TrashData = User::getSingle($id);
        $TrashData->is_delete = 1;
        $TrashData->save();
        return redirect()->back()->with('error', 'User Trash Successfully');
    }

    public function users_trashlist()
    {
        $data['getRecord'] = User::getAllTrashRecord();
        return view('admin.users.trashlist', $data);
    }

    public function users_restore($id)
    {
        $RestoreData = User::getSingle($id);
        $RestoreData->is_delete = 0;
        $RestoreData->save();
        return redirect()->back()->with('success', 'User Restore Successfully');
    }

    public function users_delete($id)
    {
        $DeleteData = User::getSingle($id);
        $DeleteData->delete();
        return redirect()->back()->with('error', 'User Parmanent Delete Successfully');
    }


}
