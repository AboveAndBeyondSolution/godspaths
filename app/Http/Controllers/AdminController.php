<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $admin = Admin::where('email', $email)->first();

        if (!$admin || !Hash::check($password, $admin->password)) {
            return back()->withErrors([
                'email' => 'Invalid email or password',
            ]);
        }

        // Auth::guard('admin')->login($admin);

        return redirect()->intended('/admin/dashboard');
    //
}
}
