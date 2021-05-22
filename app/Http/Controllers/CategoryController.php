<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => [ 'required', 'string', 'max:255' ],
            'file' => [ 'required', 'file', 'image' ],
        ]);
        $file = $request->file('file');
        $path = $file->store('category', 'public');
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'img' => $path,
        ]);

        return back()->with('new_category', 'New Category has been added successfully.');
    }
}
