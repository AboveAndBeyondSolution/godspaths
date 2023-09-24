<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Auth;

class UserController extends Controller
{
    public function update_password(Request $request) {
        $user = Auth::user();
        $password = $request->input('password');
        $user->password = Hash::make($password);
        $user->save();
    }
}
