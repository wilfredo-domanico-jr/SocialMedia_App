<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class ProviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $socialiteUser = Socialite::driver($provider)->user();


        // dd($socialiteUser);
        $user = User::updateOrCreate([
            'provider_id' => $socialiteUser->id,
            'provider' => $provider
        ],[
            'name' => $socialiteUser->name,
            'username' => $socialiteUser->nickname,
            'email' => $socialiteUser->email,
            'profile_pic' => $socialiteUser->avatar,
            'provider_token' => $socialiteUser->token,
        ]);


        Auth::login($user);

        return redirect('/home');
    }
}
