## Работа с GuzzleHttp внутри Command

1. `php artisan make:command` Создаём команду

Прописываем команду для вызова, например, `protected $signature = 'import:jsonClient';`

Затем с помощью `php artisan import:jsonClient` выполняем логику данного скрипта 

2. Создаём Guzzle клиента

`new \GuzzleHttp\Client(['base_uri' => 'https://jsonplaceholder.typicode.com/' , 'verify' => false]);`

Примеры в коммитах
