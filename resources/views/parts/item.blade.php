@foreach ($users as $index => $user)
<div class="slide-box">
  <div class="slide">
    <div class="slide__wrap">
      <div class="slide__box slide__box_info">
        <div class="slide__user">

          <div class="slide__user__img"><img src="{{ $user->avatar }}" alt=""></div>
          <!-- slide__user__img -->
          <div>
            <b>{{ $user->username }}</b>
            @if ($user->profile->game == 'Dota')
              <span>Dota2 <img src="img/icons/small-icons/dota-logo.svg" alt=""></span>
            @endif
            @if ($user->profile->game == 'CS')
              <span>CS:GO <img src="img/icons/small-icons/csgo-logo.svg" alt=""></span>
            @endif
          </div>
        </div>
        <!-- user -->
        @if ($user->profile->player_id)
        <div class="slide__id">
          <p>ID:<span>{{ $user->profile->player_id }}</span></p>
          <a href="#!" data-copy-text="{{ $user->profile->player_id }}" class="copy_id"><img src="img/icons/small-icons/copy.svg" alt=""></a>
        </div>
        @endif
        <ul class="char">
          @if ($user->profile->game == 'Dota')
          <li>Роль: <b>{{ implode(', ', $user->profile->roles) }}</b></li>
          <li>Ранг: <img src="{{ App\Repository::getDotaRangs($user->profile->rang['dota'])['image'] }}" alt=""></li>
          @endif
          @if ($user->profile->game == 'CS')
          <li>Ранг: <img src="{{ App\Repository::getCsRangs($user->profile->rang['cs'])['image'] }}" alt=""></li>
          @endif
        </ul>
      </div>
      <!-- info -->
      
      <div class="slide__box slide__box_links">
        @if ($user->profile->contacts['discord'])
        <div class="discord">
          <img src="img/icons/social/discord.svg" alt="">
          <div>
            <div class="slide__box_links-wrapper">
              <span>{{ $user->profile->contacts['discord'] }}</span><a href="#!" data-copy-text="{{ $user->profile->contacts['discord'] }}" class="copy_id"><img src="img/icons/small-icons/copy.svg" alt=""></a>
            </div>
          </div>
        </div>
        @endif
        <div>
          <a target="_blank" href="{{ sprintf('https://steamcommunity.com/profiles/%s/', $user->steam_id) }}"><img src="img/icons/social/steam.png" alt=""></a>
        </div>
        @if ($user->profile->contacts['vk'])
        <div>
          <a target="_blank" href="{{ $user->profile->contacts['vk'] }}"><img src="img/icons/social/vk.svg" alt=""></a>
        </div>
        @endif
      </div>
      <!-- links -->
    </div>
  </div>
</div>
@endforeach

