## Работа с Middleware

1. В файле Kernel.php устанавливаем значение для middleware 

    protected $routeMiddleware = [
        'post' => \App\Http\Middleware\PostMiddleware::class

    ];
2. Командой `php artisan make:middleware {name}Middleware` создаём прослойку между route и controller

Примеры в коммитах
