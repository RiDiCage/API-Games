<?php

namespace App\Http\Controllers;

use App\Game;
use App\User;
use App\Category;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller implements CrudController
{
    use SoftDeletes;

    public function index()
    {
        $view = View('game.index');
        $view->games = Game::all();

        return $view;
    }

    public function add()
    {

        $view = View('game.add');
        $view->categories = Category::pluck('name', 'id');

        return $view;
    }

    public function addLink(int $id)
    {
        $game = Game::findOrFail($id);
        $user = User::with('games')->find(Auth::id());

        if ($user->games->contains($id))
            return redirect()->route('game.index')->with('error', "<b>\"{$game->name}\"</b> is already linked to your account.");

        $user->games()->attach($game);

        return redirect()->route('game.index')->with('success', "<b>\"{$game->name}\"</b> is linked to your account.");
    }

    public function removeLink(int $id)
    {
        $game = Game::findOrFail($id);
        $user = User::with('games')->find(Auth::id());

        if (!$user->games->contains($id))
            return redirect()->route('game.index')->with('error', "<b>\"{$game->name}\"</b> is still linked to your account.");

        $user->games()->detach($game);
        return redirect()->route('game.index')->with('success', "<b>\"{$game->name}\"</b> is unlinked from your account.");
    }

    public function show(int $id)
    {
        $view = View('game.show');
        $view->game = Game::findOrFail($id);

        return $view;
    }

    public function edit(int $id)
    {
        $view = View('game.edit');

        $view->game = Game::with('categories')->findOrFail($id);
        $view->categories = Category::pluck('name', 'id');

        return $view;
    }

    public function update(Request $request, int $id): \Illuminate\Http\RedirectResponse
    {
        $request->validate(
            [
                'name' => 'required|string|min:3',
                'description' => 'required|string|min:3|max:50',
                'release_at' => 'required|date'
            ]
        );

        $game = Game::findOrFail($id);
        $game->update($request->all());

        $categories = NULL;

        if ($request->categories)
            foreach ($request->categories as $key => $val)
                $categories[] = $key;

        $game->categories()->sync($categories);

        return redirect()->route('game.index')->with('success', "$game->name updated");
    }

    public function create(int $id)
    {
        // TODO: Implement create() method.
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {

        $request->validate([
            'name' => 'required|string|min:3',
            'description' => 'required|string|min:3|max:50',
            'release_at' => 'nullable|date'
        ]);

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


        return redirect()->route('game.index')->with('success', "$game->name added");
    }

    // Soft delete
    public function delete(int $id): \Illuminate\Http\RedirectResponse
    {
        $game = Game::findOrFail($id);
        $game->delete();

        return redirect()->route('game.index')->with('success', "$game->name is deleted.");
    }

    // Force Delete
    public function destroy(int $id): \Illuminate\Http\RedirectResponse
    {
        $game = Game::with('categories')->findOrFail($id);

        $game->categories()->sync([]);
        $game->forcedelete();

        return redirect()->route('game.index')->with('success', "$game->name is destroyed.");
    }
}
