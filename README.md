## Работа с Request
1. Разрешаем доступ посылать post запросы: 

    В файле `vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken.php` Добавляем значение в массив на разрешение получение запросов

    protected $except = [

        'http://localhost:8000/*'

    ];

2. Придерживаемся концепции laravel для обозначения методов CRUD операций
    
Примеры в коммитах
