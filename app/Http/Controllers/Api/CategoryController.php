<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $result = Category::get(['id', 'name']);

        return response()->json($result, 200);
    }

    public function show(Request $request)
    {
        $result = Category::get([$request->id]);

        return response()->json($result, 200);
    }

    public function update(Request $request)
    {
        $result = Category::get([$request->id]);

        return response()->json($result, 200);
    }

    public function store(Request $request)
    {
        $result = Category::get([$request->id]);

        return response()->json($result, 200);
    }

    public function destroy(Request $request)
    {
        $category = Category::findOrFail($request->id);

        $category->categories()->sync([]);
        $category->forcedelete();

        return 'Category <b>"'. $category->name .'"</b> is destroyed.';
    }
}
