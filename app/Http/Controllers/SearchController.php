<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $users = User::where('is_admin', false)->with('profile')
            ->when($request->has('game'), function ($query) use ($request) {
                $query->whereHas('profile', function ($query) use ($request) {
                    $query->where('game', $request->get('game'));
                });
            })
        ->get();

        return view('parts.item', [
            'users' => $users
        ]);
    }
}
