@extends('layouts.app')

@section('content')
<section class="section-main-slider">
    <div class="container">
      <h2 class="wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="0s">Найдите напарника в dota 2 и cs:go <span>за 2 минуты</span></h2>

      <p class="wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="0s">Поиск осуществляется с помощью 
        анкет пользователей, подбирайте
        нужных вам напарников по их 
      описанию и рангу</p>

      <a class="btn wow fadeInLeft scroll-to"  data-wow-duration="1s" data-wow-delay="0s" href="#searchWrapper">Найти напарника</a>

      <div class="main-slider-dots"></div>

      <div class="steps">
        <div class="step step-line-1">
          <span class="step__number wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">1</span>
          <!-- step__number -->

          <p class="wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="0.5s">Войдите с помощью Steam</p>
        </div>
        <!-- step -->

        <div class="step step-line-2">
          <span class="step__number wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.2s">2</span>
          <!-- step__number -->

          <p class="wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.2s">Установите необходимые фильтры</p>
        </div>
        <!-- step -->

        <div class="step step-line-3">
          <span class="step__number wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.9s">3</span>
          <!-- step__number -->

          <p class="wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.9s">Найдите напарника в нужную игру</p>
        </div>
        <!-- step -->

        <div class="step step-line-4">
          <span class="step__number wow fadeInLeft" data-wow-duration="1s" data-wow-delay="2.6s">4</span>
          <!-- step__number -->

          <p class="wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="2.6s">Начинайте совместную игру</p>
        </div>
        <!-- step -->
      </div>
      <!-- steps -->

      <a href="#searchWrapper" class="scroll-to go_search">

        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g opacity="0.6" clip-path="url(#clip0)">
            <path d="M26.8279 12.7461C27.0531 12.513 27.0466 12.1415 26.8135 11.9164C26.5861 11.6968 26.2256 11.6968 25.9983 11.9164L13.503 24.4105L1.00891 11.9152C0.783739 11.6821 0.412296 11.6756 0.179155 11.9008C-0.0539322 12.126 -0.0603676 12.4974 0.164743 12.7305C0.169474 12.7354 0.174259 12.7402 0.179155 12.745L13.0887 25.6545C13.3178 25.8836 13.6893 25.8836 13.9185 25.6545L26.8279 12.7461Z" fill="#009688"/>
            <path class="animate-arrow" d="M13.9184 15.0933L26.8279 2.18376C27.0531 1.95067 27.0466 1.57918 26.8135 1.35401C26.5861 1.1344 26.2256 1.1344 25.9982 1.35401L13.5029 13.8481L1.0089 1.35285C0.783735 1.11977 0.412292 1.11333 0.17915 1.33844C-0.053936 1.56361 -0.0603733 1.93505 0.164738 2.16819C0.169468 2.17309 0.174253 2.17787 0.17915 2.1826L13.0887 15.0921C13.3175 15.3215 13.6889 15.322 13.9184 15.0933Z" fill="#009688"/>
            <path d="M0.00659177 12.3307C0.00598716 12.0066 0.268284 11.7434 0.592361 11.7428C0.748596 11.7425 0.898504 11.8046 1.00886 11.9152L13.503 24.4105L25.997 11.9152C26.2301 11.69 26.6016 11.6965 26.8267 11.9296C27.0464 12.157 27.0464 12.5175 26.8267 12.7449L13.9172 25.6545C13.6881 25.8835 13.3166 25.8835 13.0874 25.6545L0.177956 12.745C0.0682048 12.635 0.00659176 12.486 0.00659177 12.3307Z" fill="white"/>
            <path class="animate-arrow" d="M0.00658986 1.76832C0.00598525 1.44424 0.268282 1.18106 0.59236 1.18046C0.748594 1.18018 0.898502 1.24223 1.00886 1.35286L13.503 13.8481L25.997 1.35287C26.2265 1.12341 26.5985 1.12341 26.8279 1.35287C27.0574 1.58232 27.0574 1.95431 26.8279 2.18377L13.9184 15.0933C13.6892 15.3224 13.3178 15.3224 13.0886 15.0933L0.179108 2.18377C0.0686969 2.07369 0.00658986 1.92422 0.00658986 1.76832Z" fill="white"/>
          </g>
          <defs>
            <clipPath id="clip0">
              <rect width="27" height="27" fill="white" transform="translate(27) rotate(90)"/>
            </clipPath>
          </defs>
        </svg>

      </a>

    </div>
    <!-- container -->

    <div class="main-slider-wrapper">
      <div class="main-slider-wrapper__item">
        <img src="img/images/header/slide-1.png" alt="slide-1">
      </div>
      <!-- main-slider-wrapper__item -->

      <div class="main-slider-wrapper__item">
        <img src="img/images/header/slide-2.png" alt="slide-2">
      </div>
      <!-- main-slider-wrapper__item -->
    </div>
    <!-- main-slider-wrapper -->
  </section>
  <!-- section-main-slider end -->

<section class="section-search" id="searchWrapper">
  <div class="container">
    <h2 class="section__title">Поиск</h2>

    <div class="search-wrapper">
      <div class="search-wrapper__filter">
        <h3>Критерии поиска:</h3>

        <form class="search-wrapper__form">
          <select name="game" id="" class="wide select__game">
            <option data-display="Выберите игру"></option>
            <option data-image="" value="Dota">Dota 2</option>
            <option data-image="" value="CS">CS:GO</option>
          </select>
          <!-- select -->

          <select name="rang[dota]" id="" class="wide select__rang_dota item-disabled">
            <option data-display="Ранг:"></option>
            @foreach (App\Repository::getDotaRangs() as $item)
            <option data-image="{{ $item['image'] }}" value="{{ $item['name'] }}" data-display="<span class='select_active_cat'>Ранг:</span> <img src='{{ $item['image'] }}'> <span class='select_active_name'>{{ $item['name'] }}</span>">{{ $item['name'] }}</option>
            @endforeach
          </select>
          <!-- select -->

          <select name="rang[cs]" id="" class="wide select__rang_cs hide">
            <option data-display="Ранг:"></option>
            @foreach (App\Repository::getCsRangs() as $item)
            <option data-image="{{ $item['image'] }}" value="{{ $item['name'] }}" data-display="<span class='select_active_cat'>Ранг:</span> <img src='{{ $item['image'] }}''> <span class='select_active_name'>{{ $item['name'] }}</span>">{{ $item['name'] }}</option>
            @endforeach
          </select>
          <!-- select -->



          <div class="select-box select__role item-disabled">
            <div class="select-box__head" data-initial-title="Роль:">Роль:</div>

            <div class="select-box__list">
              <label for="role-1">
                <span>1</span>
                <input type="checkbox" id="role-1" name="roles[]" value="1">
                <span class="select-box_check"></span>
              </label>

              <label for="role-2">
                <span>2</span>
                <input type="checkbox" id="role-2" name="roles[]" value="2">
                <span class="select-box_check"></span>
              </label>

              <label for="role-3">
                <span>3</span>
                <input type="checkbox" id="role-3" name="roles[]" value="3">
                <span class="select-box_check"></span>
              </label>

              <label for="role-4">
                <span>4</span>
                <input type="checkbox" id="role-4" name="roles[]" value="4">
                <span class="select-box_check"></span>
              </label>

              <label for="role-5">
                <span>5</span>
                <input type="checkbox" id="role-5" name="roles[]" value="5">
                <span class="select-box_check"></span>
              </label>
            </div>
          </div>
          <!-- select-box -->

          @guest
          <a href="{{ route('auth.steam') }}" class="btn login-to-search">
            <img src="img/icons/social/steam.png" alt="">Войти для поиска
          </a>
          @else
          <button type="submit" class="btn search-timeite">Найти напарника</button>
          @endguest
        </form>
      </div>
      <!-- search-wrapper__filter -->

      <div class="search-loader">
        <div class="lds-dual-ring"></div>
      </div>
      <!-- search-loader -->

      <div class="search-wrapper__info wow fadeInRight" data-wow-duration="1s">
        <h2 class="search-wrapper__title">Результаты поиска:</h2>
        <div class="search-wrapper__info__contacts">
          <h3>Наши контакты:</h3>
          <a href="https://vk.com/inwhite"><img src="img/icons/social/vk.svg" alt="">https://vk.com/inwhite</a>
          <a href="mailto:inwhite@mail.ru"><img src="img/icons/social/mail.svg" alt="">inwhite@mail.ru</a>
        </div>
        <!-- search-wrapper__info__contacts -->

        <div class="search-wrapper__info__contacts search-not-found_dota hide">
          <h3>Игроки по этим параметрам еще не здесь <img src="img/icons/small-icons/sad.svg" alt=""></h3>
          <span>Но вы можете рассказать друзьям о нашем сервисе ;)</span>
        </div>
        <!-- search-not-found_dota -->

        <div class="search-wrapper__info__contacts search-not-found_cs hide">
          <h3>Игроки по этим параметрам еще не здесь <img src="img/icons/small-icons/sad.svg" alt=""></h3>
          <span>Но вы можете рассказать друзьям о нашем сервисе ;)</span>
        </div>
        <!-- search-not-found_dota -->

        <div class="search-wrapper__info__slider hide"></div>
        <!-- search-wrapper__info__slider -->

      </div>
      <!-- search-wrapper__info -->
    </div>
    <!-- search-wrapper -->
  </div>
  <!-- container -->
</section>
<!-- section-search end -->
@endsection