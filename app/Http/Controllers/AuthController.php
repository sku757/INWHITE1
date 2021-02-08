<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Invisnik\LaravelSteamAuth\SteamAuth;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $steam;

    public function __construct(SteamAuth $steam)
    {
        $this->steam = $steam;
    }

    public function redirectToSteam()
    {
        return $this->steam->redirect();
    }

    public function handle(Request $request)
    {
        if ($this->steam->validate()) {
            $info = $this->steam->getUserInfo();

            if (!is_null($info)) {
                $user = $this->findOrNewUser($info, $request);

                Auth::login($user, true);

                return redirect()->route('profile');
            }
        }

        return $this->redirectToSteam();
    }

    protected function findOrNewUser($info, Request $request)
    {
        $user = User::where('steam_id', $info->steamID64)->first();

        if (!is_null($user)) {
            $user->update([
                'username' => $info->personaname,
                'avatar' => $info->avatarfull,
                'last_ip' => $request->ip(),
                'last_login' => now()
            ]);

            return $user;
        }

        $user = User::create([
            'username' => $info->personaname,
            'avatar' => $info->avatarfull,
            'steam_id' => $info->steamID64,
            'last_ip' => $request->ip(),
            'last_login' => now()
        ]);
        
        $user->profile()->create();

        return $user;
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
