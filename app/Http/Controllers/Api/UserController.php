<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $result = User::get(['id', 'name', 'email', 'created_at']);

        return response()->json($result, 200);
    }

    public function show(Request $request)
    {
        $result = User::findOrFail($request->id);

        return response()->json($result, 200);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i'
        ]);

        $user = User::findOrFail($request->id);
        $user->update($request->all());

        return 'User <b>"'. $user->name .'"</b> is updated.';
    }

    public function store(Request $request)
    {
        // 
    }

    public function delete(Request $request)
    {
        $user = User::findOrFail($request->id);

        $user->delete();

        return 'User <b>"'. $user->name .'"</b> is deleted.';
    }

    public function destroy(Request $request)
    {
        $user = User::findOrFail($request->id);

        $user->forcedelete();

        return 'User <b>"'. $user->name .'"</b> is destroyed.';
    }
}
