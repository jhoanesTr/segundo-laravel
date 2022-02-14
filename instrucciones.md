1. Configurar: .env 
    -La base de datos
2. config/app.php
    - 'name' => env('APP_NAME', 'segundo-laravel'),
    - 'debug' => (bool) env('APP_DEBUG', true),
3. composer require barryvdh/laravel-debugbar --dev
    - Sirve para levantar un inspeccionar
4. resources/view/welcome.blade.php
    - Sería algo parecido al index
5. routes/web.php
    - Aqui estan las rutas
#### Para añadir paginas: resources/view/x.blade.php
#### Para añadir css a la página: public/x.css
#### Para añadir css a la página: public/x.js
#### En public puedo añadir carpetas para css, js
4. config/database.php
composer install
composer require laravel/ui -w
php artisan ui vue --auth
npm install && npm run --dev