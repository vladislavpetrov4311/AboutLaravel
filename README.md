## Работа с Миграцией
Команды по работе:

1. `php artisan make:model {your name Model} -m` Создаём модель с миграцией
2. `php artisan migrate` Мигрируем работу с таблицей на сервер БД
3. `php artisan migrate:rollback` Откатываем последнюю миграцию