## Работа с Редактированием миграций

Команды по работе:

1. `php artisan make:migration {условное обозначение}_to_{name your table}_table` Создаём миграцию
2. `php artisan migrate --path {yout path to migration}` Накатить конкретную миграцию
3. `php artisan migrate:rollback --path {yout path to migration}` Откатить конкретную миграцию

Примеры в коммитах
