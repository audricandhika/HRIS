<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        return users::all();
    }

    public function show($id)
    {
        return users::findOrFail($id);
    }

    public function store(Request $request)
    {
        $user = users::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => $request->is_admin
        ]);

        return response()->json($user, 201);
    }

    public function update(Request $request, $id)
    {
        $user = users::findOrFail($id);
        $user->update($request->only(['email', 'is_admin']));

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
            $user->save();
        }

        return response()->json($user);
    }

    public function destroy($id)
    {
        $user = users::findOrFail($id);
        $user->delete();
        return response()->json(null, 204);
    }
}
