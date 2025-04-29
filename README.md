# Ecobazar



## Project Description

Ecobazar is a web application built using the Laravel framework. It leverages Laravel's expressive and elegant syntax to provide a robust and scalable platform for your web projects.

## Installation

To get started with Ecobazar, follow these steps:

1. Clone the repository:
   ```bash
   git clone <https://github.com/asaduzzamandotcom/Ecobazar-laravel.git>
   cd Ecobazar
   ```

2. Install PHP dependencies using Composer:
   ```bash
   composer install
   ```

3. Install JavaScript dependencies using npm:
   ```bash
   npm install
   ```

4. Copy the example environment file and generate an application key:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. Configure your database settings in the `.env` file.

6. Run database migrations:
   ```bash
   php artisan migrate
   ```

7. Build frontend assets:
   ```bash
   npm run dev
   ```

## Usage

Start the local development server with:

```bash
php artisan serve
```

The application will be accessible at `http://localhost:8000`.

## Testing

Run the test suite using PHPUnit:

```bash
php artisan test
```

## Contributing

Thank you for considering contributing to Ecobazar! Please refer to the [Laravel contribution guide](https://laravel.com/docs/contributions) for guidelines on how to contribute.

## License

Ecobazar is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
