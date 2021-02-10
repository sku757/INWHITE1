<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $users = User::with('profile')
            ->whereHas('profile', function ($query) {
                $query->where('show_in_search', true);
            })
            ->when($request->has('game'), function ($query) use ($request) {
                $query->whereHas('profile', function ($query) use ($request) {
                    $query->where('game', $request->get('game'));

                    switch ($request->get('game')) {
                        case 'Dota': 
                            if ($request->input('rang.dota')) {
                                $query->where('rang->dota', $request->input('rang.dota'));
                            }

                            if (($roles = $request->input('roles')) !== null) {
                                $query->where(function ($query) use ($roles) {
                                    foreach ($roles as $role) {
                                        $query->orWhereJsonContains('roles', $role);
                                    }
                                });
                            }
                        break;
                        case 'CS': 
                            if ($request->input('rang.cs')) {
                                $query->where('rang->cs', $request->input('rang.cs'));
                            }
                        break;
                    }
                });
            })
            ->get();

        abort_if($users->isEmpty(), 404);

        return view('parts.item', [
            'users' => $users
        ]);
    }
}
