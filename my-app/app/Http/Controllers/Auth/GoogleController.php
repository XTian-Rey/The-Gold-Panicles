<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            // Get user from Google
            $googleUser = Socialite::driver('google')->user();

            // Find or create the user
            $user = User::where('google_id', $googleUser->getId())->first();

            if (!$user) {
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'avatar' => $googleUser->getAvatar(),
                ]);
            }

            // Log the user in
            Auth::login($user);

            return redirect()->to('/home'); // Redirect to a protected route
        } catch (\Exception $e) {
            return redirect()->route('login'); // Redirect back if something goes wrong
        }
    }
}
