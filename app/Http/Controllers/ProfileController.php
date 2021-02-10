<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile', [
            'user' => Auth::user()
        ]);
    }

    public function updateData(Request $request)
    {
        $request->user()->profile()->update([
            'game' => $request->get('game'),
            'player_id' => $request->get('player_id'),
            'rang' => $request->get('rang'),
            'roles' => $request->get('roles'),
            'show_in_search' => $request->has('show_in_search')
        ]);

        if ($request->ajax()) {
            return ['status' => true];
        }

        return redirect()->route('profile');
    }

    public function updateInfo(Request $request)
    {
        $request->user()->profile()->update([
            'contacts' => $request->get('contacts')
        ]);

        if ($request->ajax()) {
            return ['status' => true];
        }

        return redirect()->route('profile');
    }
}
