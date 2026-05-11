<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    // Redirect to Google Login
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    // Google Callback
    public function callback(Request $request)
    {
        try {

            $googleUser = Socialite::driver('google')
                ->stateless()
                ->user();

            // Store user data in session
            session([
                'user' => [
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'avatar' => $googleUser->avatar,
                ]
            ]);

            return redirect('/dashboard');

        } catch (\Exception $e) {

            return redirect('/')->with('error', $e->getMessage());
        }
    }

    // Logout
    public function logout()
    {
        session()->forget('user');

        return redirect('/');
    }
}
