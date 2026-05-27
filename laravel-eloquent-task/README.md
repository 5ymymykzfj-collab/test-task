# Laravel Eloquent Task

Минимальное Laravel-приложение для тестового задания: Eloquent-модель, миграции, форма, список и наполнитель БД.

## Что сделано

- Модель `Book` с CRUD-страницами: список, создание, редактирование, удаление.
- Связанная модель `Category`: у книги есть категория.
- Миграции для таблиц `categories` и `books`.
- `DatabaseSeeder`, который создает 3 категории и 10 книг.
- Только Laravel, PHP и Blade. Без Docker, JS-фреймворков, Vite и препроцессоров.

## Запуск

Создайте базу данных `laravel_eloquent_task` в phpMyAdmin или любым удобным способом в MySQL.

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

По умолчанию проект использует MySQL:

```env
DB_CONNECTION=mysql
DB_HOST=127.127.126.4
DB_PORT=3306
DB_DATABASE=laravel_eloquent_task
DB_USERNAME=root
DB_PASSWORD=
```

В OSPanel адрес MySQL может отличаться от `127.0.0.1`. В текущем окружении MySQL слушает `127.127.126.4:3306`.

После запуска откройте в браузере:

```text
http://127.0.0.1:8000
```

## Проверка

```bash
php artisan test
```
