# Setup project for the amazing Sushi Universe, Yeah!
Welcome to this amazing tutorial about doing some OOP to manage the inventory (fish, rice, wasabi etc.) for a sushi restaurant.

## To start working on it
### Fork the project
fork the project and clone it

### Prepare the database
php bin/console make:migration
php bin/console make:fixtures
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load

### Start web server
php bin/console server:start



