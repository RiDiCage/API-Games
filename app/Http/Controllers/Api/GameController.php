<?php

namespace App\Http\Controllers\Api;

use App\Game;
use App\User;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function index(Request $request)
    {
        $result = Game::get(['id', 'name', 'description', 'release_at']);

        return response()->json($result, 200);
    }

    public function addLink(Request $request)
    {
        Auth::login(User::find(1));
        $game = Game::findOrFail($request->id);
        $user = User::with('games')->find(Auth::id());

        if ($user->games->contains($request->id))
            return 'Game <b>"'. $game->name .'"</b> is already linked to your account.';

        $user->games()->attach($game);

        return 'Game <b>"'. $game->name .'"</b> is Linked to your account.';
    }

    public function removeLink(Request $request)
    {
        Auth::login(User::find(1));
        $game = Game::findOrFail($request->id);
        $user = User::with('games')->find(Auth::id());

        if (!$user->games->contains($request->id))
            return 'Game <b>"'. $game->name .'"</b> is not linked to your account.';

        $user->games()->attach($game);

        return 'Game <b>"'. $game->name .'"</b> is unlinked to your account.';
    }

    public function show(Request $request)
    {
        $result = Game::findOrFail($request->id);

        return response()->json($result, 200);
    }

    public function update(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|min:3',
                'description' => 'required|string|min:3|max:50',
                'release_at' => 'required|date'
            ]
        );
        $game = Game::findOrFail($request->id);
        $game->update($request->all());

        return response()->json($game, 200);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|min:3',
                'description' => 'required|string|min:3|max:50',
                'release_at' => 'required|date'
            ]
        );

        $game = new Game();
        $game->name = $request->input('name');
        $game->description = $request->input('description');
        $game->release_at = $request->input('release_at');

        $game->saveOrFail();

        $categories = NULL;

        if ($request->categories)
            foreach ($request->categories as $key => $val)
                $categories[] = $key;

        $game->categories()->sync($categories);

        return response()->json($game, 200);
    }

    public function delete(Request $request)
    {
        $game = Game::findOrFail($request->id);
        $game->delete();

        return 'Game <b>"'. $game->name .'"</b> is deleted.';
    }

    public function destroy(Request $request)
    {
        $game = Game::findOrFail($request->id);

        $game->categories()->sync([]);
        $game->forcedelete();

        return 'Game <b>"'. $game->name .'"</b> is destroyed.';
    }
}
