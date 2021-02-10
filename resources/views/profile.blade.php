@extends('layouts.app')

@section('content')
<section class="section-cabinet">
    <div class="container">

        <h2>Личный кабинет</h2>

        <div class="cabinet-wrapper">

            <div class="cabinet__profile">

                <div class="search-wrapper__filter">
                    <h3>Профиль</h3>

                    <div class="cabinet__profile__ava">
                        <img src="{{ $user->avatar }}" alt="Avatar">

                        <span>{{ $user->username }}</span>
                    </div>
                    <!-- cabinet__user__ava -->

                    <form id="profile-form" action="{{ route('profile.update.data') }}" method="POST">
                        {{ csrf_field() }}
                        <select name="game" id="" class="wide select__game">
                            <option data-display="Выберите игру"></option>
                            <option data-image="" value="Dota" {{ $user->profile->game == 'Dota' ? 'selected' : '' }}>Dota 2</option>
                            <option data-image="" value="CS" {{ $user->profile->game == 'CS' ? 'selected' : '' }}>CS:GO</option>
                        </select>
                        <!-- select -->

                        <div class="cabinet__field">
                            <input type="text" name="player_id" value="{{ $user->profile->player_id ?? '' }}" placeholder="Ваш ID">

                            <a href="#modal"><img src="img/icons/small-icons/question-icon.svg" alt="question-icon"></a>
                        </div>
                        <!-- cabinet__field -->

                        <select name="rang[dota]" id="" class="wide select__rang_dota {{ $user->profile->game == 'CS' ? 'hide' : '' }}">
                            <option data-display="Выберите ваш ранг"></option>
                            @foreach (App\Repository::getDotaRangs() as $item)
                            <option data-image="{{ $item['image'] }}" value="{{ $item['name'] }}" data-display="<span class='select_active_cat'>Ранг:</span> <img src='{{ $item['image'] }}'> <span class='select_active_name'>{{ $item['name'] }}</span>" {{ $user->profile->rang['dota'] == $item['name'] ? 'selected' : '' }}>{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                        <!-- select -->

                        <select name="rang[cs]" id="" class="wide select__rang_cs {{ $user->profile->game == 'Dota' || $user->profile->game == null ? 'hide' : '' }}">
                            <option data-display="Выберите ваш ранг"></option>
                            @foreach (App\Repository::getCsRangs() as $item)
                            <option data-image="{{ $item['image'] }}" value="{{ $item['name'] }}" data-display="<span class='select_active_cat'>Ранг:</span> <img src='{{ $item['image'] }}'> <span class='select_active_name'>{{ $item['name'] }}</span>" {{ $user->profile->rang['cs'] == $item['name'] ? 'selected' : '' }}>{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                        <!-- select -->


                        <div class="select-box select__role {{ $user->profile->game == 'CS' ? 'hide' : '' }}">
                            <div class="select-box__head" data-initial-title="Выберите вашу роль">Выберите вашу роль</div>

                            <div class="select-box__list">
                                <label for="role-1">
                                    <span>1</span>
                                    <input type="checkbox" name="roles[]" value="1" id="role-1" {{ array_search(1, $user->profile->roles ?? []) !== false ? 'checked' : ''}}>
                                    <span class="select-box_check"></span>
                                </label>

                                <label for="role-2">
                                    <span>2</span>
                                    <input type="checkbox" name="roles[]" value="2" id="role-2" {{ array_search(2, $user->profile->roles ?? []) !== false ? 'checked' : ''}}>
                                    <span class="select-box_check"></span>
                                </label>

                                <label for="role-3">
                                    <span>3</span>
                                    <input type="checkbox" name="roles[]" value="3" id="role-3" {{ array_search(3, $user->profile->roles ?? []) !== false ? 'checked' : ''}}>
                                    <span class="select-box_check"></span>
                                </label>

                                <label for="role-4">
                                    <span>4</span>
                                    <input type="checkbox" name="roles[]" value="4" id="role-4" {{ array_search(4, $user->profile->roles ?? []) !== false ? 'checked' : ''}}>
                                    <span class="select-box_check"></span>
                                </label>

                                <label for="role-5">
                                    <span>5</span>
                                    <input type="checkbox" name="roles[]" value="5" id="role-5" {{ array_search(5, $user->profile->roles ?? []) !== false ? 'checked' : ''}}>
                                    <span class="select-box_check"></span>
                                </label>
                            </div>
                        </div>
                        <!-- select-box -->

                        <label for="showInResults" class="showInResults_label {{ $user->profile->show_in_search ? 'check' : '' }}">
                            <span>Показывать вас в поиске?</span>
                            <input type="checkbox" name="show_in_search" id="showInResults" {{ $user->profile->show_in_search ? 'checked' : '' }}>
                            <span class="label_check"></span>
                        </label>

                        <button type="submit" class="btn">Сохранить</button>
                    </form>
                </div>
                <!-- search-wrapper__filter -->

            </div>
            <!-- cabinet__profile -->

            <div class="cabinet__social">
                <h3>Связь</h3>

                <form id="contact-form" action="{{ route('profile.update.info') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="cabinet__social__item">
                        <img src="img/icons/social/discord.svg" alt="Discord-icon">

                        <input type="text" name="contacts[discord]" value="{{ $user->profile->contacts['discord'] ?? '' }}" placeholder="Напишите никнейм (пример: Miro#9521)">
                    </div>
                    <!-- cabinet__social__item -->

                    <div class="cabinet__social__item">
                        <img src="img/icons/social/vk.svg" alt="Vk-icon">

                        <input type="text" name="contacts[vk]" value="{{ $user->profile->contacts['vk'] ?? '' }}" placeholder="Вставьте ссылку">
                    </div>
                    <!-- cabinet__social__item -->

                    <button type="submit" class="btn">Сохранить</button>
                </form>

            </div>
            <!-- cabinet__social -->

            <div class="search-loader">
                <div class="lds-dual-ring"></div>
            </div>
            <!-- search-loader -->

        </div>
        <!-- cabinet-wrapper -->

    </div>
    <!-- container -->
</section>
<!-- section-cabinet -->

<div class="remodal cabinet__modal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
    <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
    
    <h3>Где его взять?</h3>

    <div class="modal__info-wrapper">
        <h4>Для Dota 2:</h4>

        <div class="modal__info-wrapper__item">
            <span>1)</span>
            <img src="img/images/cabinet/steps/dota/1.png" alt="step-dota-1">
        </div>
        <!-- modal__info-wrapper__item -->

        <div class="modal__info-wrapper__item">
            <span>2)</span>
            <img src="img/images/cabinet/steps/dota/2.png" alt="step-dota-2">
        </div>
        <!-- modal__info-wrapper__item -->
    </div>
    <!-- modal__info-wrapper -->

    <div class="modal__info-wrapper">
        <h4>Для CS:GO:</h4>

        <div class="modal__info-wrapper__item">
            <span>1)</span>
            <img src="img/images/cabinet/steps/cs/1.png" alt="step-cs-1">
        </div>
        <!-- modal__info-wrapper__item -->

        <div class="modal__info-wrapper__item">
            <span>2)</span>
            <img src="img/images/cabinet/steps/cs/2.png" alt="step-cs-2">
        </div>
        <!-- modal__info-wrapper__item -->
    </div>
    <!-- modal__info-wrapper -->

</div>
@endsection