<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CardController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => [ 'required', 'string', 'max:255' ],
            'price' => [ 'required', 'numeric' ],
            'country' => [ 'required', 'string', 'max:255' ],
            'category_id' => [ 'required', 'integer', 'exists:categories,id' ]
        ]);
        $data['slug'] = Str::slug($request->name);
        Card::create($data);
        return back()->with('new_card', 'New Card has been added successfully.');
    }
}
