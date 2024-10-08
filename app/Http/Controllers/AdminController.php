<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // List all users for the admin
    public function index()
    {
        $users = User::where('role', '!=', 'admin')->get(); // Exclude existing admins
        return view('dashboard.dashboard', compact('users'));
    }

    // Promote a user to admin
    public function makeAdmin($id)
    {
        $user = User::findOrFail($id);
        $user->role = 'admin';
        $user->save();

        return redirect()->back()->with('success', 'User has been promoted to Admin');
    }
    public function removeAdmin($id)
    {
        $user = User::findOrFail($id);
        $user->role = 'patient';
        $user->save();

        return redirect()->back()->with('success', 'User has been demoted from Admin');
    }

    public function user(){
        $currentUserId = auth()->id();
        
        $users = User::where('id', '!=', $currentUserId)->get();
    
        return view('admin.users.users', compact('users'));
    }
}

