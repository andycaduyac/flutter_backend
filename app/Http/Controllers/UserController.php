<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'string|required',
            'password' => 'string|required',
        ]);

        $user = User::create($request->only('username', 'password'));
        return response()->json($user);
    } 
    public function index()
    {
        $user = User::all(['id','username','password']);
        return response()->json($user);
    }
    public function show(User $user)
    {
        return response()->json($user);
    }
}
