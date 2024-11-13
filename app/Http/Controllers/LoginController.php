<?php

namespace App\Http\Controllers;
use Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
            
            $existingUser = User::where('email', $user->getEmail())->first();
            
            if ($existingUser) {
                Auth::login($existingUser);
            } else {
                $newUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'google_id' => $user->getId(),
                    'password' => bcrypt('random-password'),
                ]);
                
                Auth::login($newUser);
            }

            return redirect()->intended('/');
        } catch (\Exception $e) {
            return redirect('/signup');
        }
    }

    public function auth_logout(){
        Auth::logout();
        return redirect()->route("signup");
    }
}
