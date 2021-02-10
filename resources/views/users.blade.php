@extends('layouts.app')

@section('content')
<section class="section-cabinet admin-cabinet">
    <div class="container">

        <h2>Пользователи ({{ $users->count() }})</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th colspan="2">Username</th>
                    <th>Last login</th>
                    <th>Last IP</th>
                    <th>Game</th>
                    <th>Player ID</th>
                    <th>Rang</th>
                    <th>Role</th>
                    <th>Contacts</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td><img src="{{ $user->avatar }}" alt=""></td>
                <td class="{{ $user->online ? 'online' : 'offline'}}">{{ $user->username }} {{ $user->is_admin ? '(admin)' : '' }}</td>
                <td>{{ $user->last_login->format('d.m.Y H:i') }}</td>
                <td>{{ $user->last_ip }}</td>
                <td>{{ $user->profile->game }}</td>
                <td>{{ $user->profile->player_id }}</td>
                <td>
                    @if ($user->profile->game == 'Dota')
                        {{ $user->profile->rang['dota'] }}
                    @endif
                    @if ($user->profile->game == 'CS')
                        {{ $user->profile->rang['cs'] }}
                    @endif
                </td>
                <td>
                    @if ($user->profile->game == 'Dota')
                        {{ implode(', ', $user->profile->roles) }}
                    @endif
                </td>
                <td>
                    <a target="_blank" href="{{ sprintf('https://steamcommunity.com/profiles/%s/', $user->steam_id) }}"><img src="img/icons/social/steam.png" alt=""></a>
                    @if ($user->profile->contacts['discord'])
                    <a target="_blank" href="{{ sprintf('https://discord.com/users/%s/', $user->profile->contacts['discord']) }}"><img src="img/icons/social/discord.svg" alt=""></a>
                    @endif
                    @if ($user->profile->contacts['vk'])
                    <a target="_blank" href="{{ $user->profile->contacts['vk'] }}"><img src="img/icons/social/vk.svg" alt=""></a>
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td>Пользователей нет</td>
            </tr>
            @endforelse
            </tbody>
        </table>

        <div class="links">
            {{ $users->links() }}
        </div>

    </div>
    <!-- container -->
</section>
<!-- section-cabinet -->
@endsection