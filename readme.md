## Build app

### Step 1
- git clone `https://github.com/OlegMarko/elasticsearch-laravel.git`
- `cd elasticsearch-laravel`
- run command: `composer install`
- add permissions 777 to ./public ./storage ./bootstrap
- change `.env` file similar to `.env.example`
- run command: `php artisan migrate --seed`
- run command: `php artisan scout:import App\Book`
- run command: `php artisan serve`
- visit to [http://127.0.0.1:8000](http://127.0.0.1:8000)
