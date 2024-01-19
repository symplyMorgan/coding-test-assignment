## Setting up

- From the terminal, run `git clone https://github.com/symplyMorgan/coding-test-assignment.git` to clone this repository.
- Change directory into the root of the project.
- Run `composer install` to download the project dependencies.
- Run `cp .env.example .env` to copy the environment file.
- Run `php artisan key:generate` to set the application key.
- Run `php artisan migrate` to run the migration files and setup the database. `MySQL` database is used for the purpose of this assignment.
- Set up the email credentials in the `.env` file.
- Run `php artisan serve` to spin up the local development server.