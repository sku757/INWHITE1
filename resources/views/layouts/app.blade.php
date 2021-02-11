<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name') }}</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
</head>
<body class="{{ Route::is('home') ? 'has-wow' : '' }}">

  <div class="preloader">
    <div class="lds-dual-ring"></div>
  </div>
  <!-- preloader -->

  <div class="popup-menu">
    <div class="popup-menu__wrap">
      <nav>
        <ul>
          <li><a href="{{ route('home') }}">Главная</a></li>
          <li><a href="{{ url('/#searchWrapper') }}">Поиск напарника</a></li>
          @if (Auth::user() && Auth::user()->is_admin)
          <li><a href="{{ route('users') }}">Пользователи</a></li>
          @endif
        </ul>
      </nav>
      <a href="mailto:inwhite@mail.ru" class="mail">inwhite@mail.ru</a>
    </div>
  </div>
  <!-- popup menu -->

  <header class="header">
    <div class="container">
      <div class="header-wrapper">
        <div class="menu-wrapper">
          <div class="hamburger-menu"></div>	  
        </div>
        <!-- gamburger -->
        
        <a href="{{ route('home') }}" class="header__logo">
          <img src="img/icons/logo.svg" alt="INWHITE">
        </a>
        <!-- header__logo -->

        <ul class="header__menu">
          <li><a href="{{ route('home') }}">Главная</a></li>
          <li><a href="{{ url('/#searchWrapper') }}" >Поиск напарников</a></li>
          @if (Auth::user() && Auth::user()->is_admin)
          <li><a href="{{ route('users') }}">Пользователи</a></li>
          @endif
        </ul>

        @guest
        <a href="{{ route('auth.steam') }}" class="btn enter-btn"><img src="img/icons/social/steam.png" alt="steam">
            <span>Войти через Steam</span>
        </a>
        @else
        <div class="header__user">
            <img src="{{ Auth::user()->avatar }}" alt="avatar">
            <div class="header__user__arrow_open"></div>

            <div class="header__user__links">
                <a href="{{ route('profile') }}">
                    <img src="img/icons/small-icons/user.svg" alt="user-icon">Личный кабинет
                </a>
                <a id="logout" href="{{ route('logout') }}">
                    <img src="img/icons/small-icons/logout.svg" alt="logout-icon">Выйти
                </a>
            </div>
        </div>
        @endguest
      </div>
      <!-- header-wrapper -->
    </div>
    <!-- container -->
  </header>
  <!-- header -->

  @yield('content')

<footer class="footer">
 <div class="container">
  <div class="footer-wrapper">
    <span>Если появились вопросы, пишите на почту: <a href="mailto:inwhiteapp@gmail.com">inwhiteapp@gmail.com</a></span>

    <ul>
      <li><a href="{{ route('home') }}">Главная</a></li>
      <li><a href="{{ url('/#searchWrapper') }}">Поиск напарников</a></li>
    </ul>
  </div>
  <!-- footer-wrapper -->
</div>
<!-- container -->
</footer>
<!-- footer -->

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
