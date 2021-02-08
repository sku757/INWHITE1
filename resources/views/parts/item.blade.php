@forelse ($users as $user)
<div class="slide-box">
  <div class="slide">
    <div class="slide__wrap">
      <div class="slide__box slide__box_info">
        <div class="slide__user">

          <div class="slide__user__img"><img src="{{ $user->avatar }}" alt=""></div>
          <!-- slide__user__img -->
          <div>
            <b>{{ $user->username }}</b>
            <span>Dota2 <img src="img/icons/small-icons/dota-logo.svg" alt=""></span>
          </div>
        </div>
        <!-- user -->
        <div class="slide__id">
          <p>ID:<span>{{ $user->profile->player_id }}</span></p>
          <a href="#!" class="copy_id"><img src="img/icons/small-icons/copy.svg" alt=""></a>
        </div>
        <ul class="char">
          <li>Роль: <b>1,2</b></li>
          <li>Ранг: <img src="img/icons/rangs/dota/6.png" alt=""></li>
        </ul>
      </div>
      <!-- info -->
      
      <div class="slide__box slide__box_links">
        <div class="discord">
          <img src="img/icons/social/discord.svg" alt="">
          <div>
            <div class="slide__box_links-wrapper">
              <span>Miro#2121</span><a href="#!" class="copy_id"><img src="img/icons/small-icons/copy.svg" alt=""></a>
            </div>
          </div>
        </div>
        <div>
          <a href="#!"><img src="img/icons/social/steam.png" alt=""></a>
        </div>
        <div>
          <a href="#!"><img src="img/icons/social/vk.svg" alt=""></a>
        </div>
      </div>
      <!-- links -->
    </div>
  </div>
</div>
@empty
    <p>Ничего не найдено...</p>
@endforelse

