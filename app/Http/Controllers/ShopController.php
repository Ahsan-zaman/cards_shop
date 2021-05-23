<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'category' => [ 'nullable', 'integer', 'exists:categories,id' ]
        ]);
        $cards = [];
        if ($request->category) {
            $cards = Card::where('category_id', $request->category)->get();
        } else {
            $cards = Card::all();
        }

        return view('pages.shop')->with([
            'categories' => Category::withCount('cards')->get(),
            'cards' => $cards
        ]);
    }
}
