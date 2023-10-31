Hey! Welcome to my Laravel project.

We'll use Sail to run this project as this is Laravel's inbuilt containerization.
First, navigate to the /laravel-test-app folder and open a terminal here, then run:
APP_PORT=8080 ./vendor/bin/sail up -d

This will start a new Sail container running our project, running at localhost:8080.

However, we'll also need to set up our database.
Next run:
./vendor/bin/sail shell
php artisan migrate --seed
This will create our tables and add some dummy data.