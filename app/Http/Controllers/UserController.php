<?php

namespace App\Http\Controllers;

use App\Game;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;

class UserController extends Controller implements CrudController
{
    public function index()
    {
        $view = View('user.index');
        $view->users = User::all();

        return $view;
    }

    public function show(int $id)
    {
        $view = View('user.show');
        $view->user = User::with('games')->findOrFail($id);

        return $view;
    }

    public function edit(int $id)
    {
        $view = View('user.edit');

        $view->user = User::findOrFail($id);

        return $view;
    }

    public function update(Request $request, int $id): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i'
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('user.edit', $user->id)->with('success', "$user->name updated");
    }

    public function create(int $id)
    {
        $view = View('user.create');

        return $view;
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
//        $user = User::findOrFail($id);
//
        return redirect()->route('user.index');
    }

    public function destroy(int $id): \Illuminate\Http\RedirectResponse
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', "$user->name is deleted.");
    }
}
