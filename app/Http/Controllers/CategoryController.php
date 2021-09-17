<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller implements CrudController
{
    public function index()
    {
        $view = View('category.index');
        $view->Categories = Category::all();

        return $view;
    }

    public function add()
    {
        $view = View('category.add');

        return $view;
    }

    public function show(int $id)
    {
        $view = View('category.show');
        $view->category = Category::findOrFail($id);

        return $view;
    }

    public function edit(int $id)
    {
        $view = View('category.edit');

        $view->category = Category::findOrFail($id);

        return $view;
    }

    public function update(Request $request, int $id): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|min:3'
        ]);

        $category = Category::findOrFail($id);
        $category->update($request->all());

        return redirect()->route('category.index')->with('success', "$category->name updated");
    }

    public function create(int $id)
    {
        // TODO: Implement create() method.
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|min:3'
        ]);

        $category = new Category();
        $category->name = $request->input('name');
        $category->saveOrFail();

        return redirect()->route('category.index')->with('success', "$category->name added");
    }

    public function destroy(int $id): \Illuminate\Http\RedirectResponse
    {
        $category = Category::with('categories')->findOrFail($id);

        $category->categories()->sync([]);
        $category->forcedelete();

        return redirect()->route('category.index')->with('success', "$category->name is destroyed.");
    }
}
