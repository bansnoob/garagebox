<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phonenumber' => 'required|string|max:10',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'birthday' => 'required|date',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        Auth::login($user = User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'phonenumber' => $request->phonenumber,
            'city' => $request->city,
            'state' => $request->state,
            'gender' => $request->gender,
            'birthday' => $request->birthday,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]));

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
