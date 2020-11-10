<p align="center"><a href="https://github.com/makklays/Laravel8/blob/main/public/img/Screenshot_1.png" target="_blank"><img src="https://github.com/makklays/Laravel8/blob/main/public/img/Screenshot_1.png" width="600"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## TЗ - Про Test-овое задание 

1. Установить Laravel 8
2. Настроить login/register (composer require laravel/ui & php artisan ui bootstrap --auth) (Поля при регистрации - name, login, phone, email, date_of_birth, about)
3. Сделать 2 типа пользователей "Admin" & "User"
4. Регистрация по умолчанию тип "User"
5. Сделать личный кабинет (LiKa) для пользователей (Bootstrap 3)

User - после авторизации перевести в ЛК и вывести общие данные
Admin - после авторизации перевести в ЛК и вывести всех User по 3 на странице (есть возможность удалить User-a)

User, который был удален, видит сообщение "Этот пользователь был заблокирован!" 

<i style="color:orange;">Выложить проект на GitHub. Дать ссылку на публичный репозиторий</i>


## Про тестирование Test-ового задания

1. Скачать с GitHub репозитория
2. Запустить команду <i>php artisan migrate</i> или <i>php artisan migrate:refresh</i> 
3. Запустить команду <i>php artisan db:seed</i>

Вход на странице Login переделан на поля Login и Password (ранее были поля Email и Password). Дизайн прост и не замысловат.

Скрины выполненного тестового задания:

<a href="https://github.com/makklays/Laravel8/blob/main/public/img/Screenshot_1.png" target="_blank">
    <img src="https://github.com/makklays/Laravel8/blob/main/public/img/Screenshot_1.png" width="600">
</a>
<a href="https://github.com/makklays/Laravel8/blob/main/public/img/Screenshot_2.png" target="_blank">
    <img src="https://github.com/makklays/Laravel8/blob/main/public/img/Screenshot_2.png" width="600">
</a>
<a href="https://github.com/makklays/Laravel8/blob/main/public/img/Screenshot_3.png" target="_blank">
    <img src="https://github.com/makklays/Laravel8/blob/main/public/img/Screenshot_3.png" width="600">
</a>
<a href="https://github.com/makklays/Laravel8/blob/main/public/img/Screenshot_4.png" target="_blank">
    <img src="https://github.com/makklays/Laravel8/blob/main/public/img/Screenshot_4.png" width="600">
</a>
<a href="https://github.com/makklays/Laravel8/blob/main/public/img/Screenshot_5.png" target="_blank">
    <img src="https://github.com/makklays/Laravel8/blob/main/public/img/Screenshot_5.png" width="600">
</a>

