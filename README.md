# Flats Test Task

### Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan jwt:secret
```

Edit the `.env` file and set the DB info there using the following keys
`DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`
    
And then just use

```bash
php artisan migrate
php artisan db:seed
```
to migrate the database structure and seed some random values. `db:seed` can be executes multiple times for more random data. There will be no data dublications, since the seeder generates new data using faker factories.


After all of these steps, you can either setup a web server with a directory index set to /public/index.php or deploy it to a spectific port using PHP's built-in dev server 
```bash
php artisan serve --port=8080
```
