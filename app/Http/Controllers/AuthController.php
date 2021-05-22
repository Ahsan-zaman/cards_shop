<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\MatchOldPasswordRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (auth()->user()->role == 'admin') {
                return redirect('/admin/dashboard');
            }
            return redirect('/');
        }

        return redirect('login')->with('danger', 'Oppes! You have entered invalid credentials');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255','unique:users'],
            'password' => ['required','string','min:8','confirmed']
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('login');
    }
    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255','exists:users'],
            'old_password' => ['nullable','string', new MatchOldPasswordRule()],
            'password' => ['nullable','string','min:8','confirmed']
        ]);

        $data = [
            'name' => $request->name
        ];
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }
        Auth::user()->update($data);

        return redirect()->back();
    }
    public function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect('login')->with('success', 'Logged out successfully');
    }
}
