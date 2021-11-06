# HT Limited

<img alt="HT Limited Logo" src="https://ht-limitedng.net/wp-content/uploads/2015/04/resized.png">

## About HT Limited

HT-Limited is Business Management Consulting firm, offering support in business development, human resources management and administration.


## HT Limited Application Development Procedures

1. CD into the application root directory with your command prompt/terminal/git bash.

2. Run `cp .env.example .env`.

3. Inside `.env` file, setup database, mail and other configurations.

4. Run `composer install`.

5. Run `php artisan key:generate` command.

6. Run `php artisan migrate:fresh --seed` command.

7. Run `php artisan serve` command.

8. Define your routes in `web.php`.

9. To run a single migration `php artisan migrate --path=/database/migrations/my_migration.php`.

10. To run single seeder `php artisan db:seed --class=UserSeeder`.

11. To use the Gutenberg editor, use the tutorial by Laraberg on [Laraberg Github repo](https://github.com/VanOns/laraberg/)

12. Make sure you execute `php artisan queue:work` command in a separate command prompt/terminal/git bash window to allow your mails deliver.


