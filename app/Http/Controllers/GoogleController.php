<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    // Redirect to Google Login
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    // Google Callback Function
    public function callback()
    {
        try {

            $googleUser = Socialite::driver('google')->stateless()->user();

            $user = User::updateOrCreate(
                [
                    'email' => $googleUser->email,
                ],
                [
                    'name' => $googleUser->name,
                    'google_id' => $googleUser->id,
                    'avatar' => $googleUser->avatar,
                    'password' => bcrypt('123456dummy'),
                ]
            );

            Auth::login($user);

            return redirect('/dashboard');

        } catch (\Exception $e) {

            dd($e->getMessage());

        }
    }

    // Logout
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}