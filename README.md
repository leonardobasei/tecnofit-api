# Api Rest - Tecnofit

## Install with Composer

```
    $ php composer.phar install or composer install
```

## Set Environment

```
    $ cp .env.example .env
```

## Set the application key

```
   $ php artisan key:generate
```

## Run migrations

```
   $ php artisan migrate
```

## Run start application

```
   $ php artisan serve
```

## Endpoints

**Get records by movement:** `GET /api/records/{movement_id}`

### Example
http://localhost:8000/api/records/1
