<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('welcome')
        ->with([
            'cards'=> Card::with('category')->inRandomOrder()->limit(4)->get(),
            'pop'=> Card::with('category')->inRandomOrder()->limit(4)->get()
        ])
        ;
    }
}
