<?php

namespace App;

use Illuminate\Support\Collection;

class Repository {

    public static function getDotaRangs(): Collection
    {
        return Collection::make([
            ['name' => 'Рекрут', 'image' => 'img/icons/rangs/dota/1.png'],
            ['name' => 'Страж', 'image' => 'img/icons/rangs/dota/2.png'],
            ['name' => 'Рыцарь', 'image' => 'img/icons/rangs/dota/3.png'],
            ['name' => 'Герой', 'image' => 'img/icons/rangs/dota/4.png'],
            ['name' => 'Легенда', 'image' => 'img/icons/rangs/dota/5.png'],
            ['name' => 'Властелин', 'image' => 'img/icons/rangs/dota/6.png'],
            ['name' => 'Божество', 'image' => 'img/icons/rangs/dota/7.png'],
        ]);
    }

    public static function getCsRangs(): Collection
    {
        return Collection::make([
            ['name' => 'Серебро', 'image' => 'img/icons/rangs/cs/1.png'],
            ['name' => 'Золотая звезда', 'image' => 'img/icons/rangs/cs/2.png'],
            ['name' => 'Магистр', 'image' => 'img/icons/rangs/cs/3.png'],
            ['name' => 'Заслуженный Магистр', 'image' => 'img/icons/rangs/cs/4.png'],
            ['name' => 'Беркут', 'image' => 'img/icons/rangs/cs/5.png'],
            ['name' => 'Беркут-магистр', 'image' => 'img/icons/rangs/cs/6.png'],
            ['name' => 'Великий магистр', 'image' => 'img/icons/rangs/cs/7.png'],
            ['name' => 'Всемирная элита', 'image' => 'img/icons/rangs/cs/8.png'],
        ]);
    }
}