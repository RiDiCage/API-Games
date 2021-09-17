<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

interface CrudController
{
    public function index();
    public function show(int $id);
    public function edit(int $id);
    public function update(Request $request, int $id): \Illuminate\Http\RedirectResponse;
    public function create(int $id);
    public function store(Request $request): \Illuminate\Http\RedirectResponse;
    public function destroy(int $id): \Illuminate\Http\RedirectResponse;
}
?>
